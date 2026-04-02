# Laravel Request Flow (This Project)

This repository is a **Laravel 13** app (see `composer.json` → `laravel/framework: ^13.0`).

This document explains the **HTTP request lifecycle** in Laravel using the **actual files in your project**, and compares it to a CodeIgniter-style flow.

---

## 1) High-level flow (like a map)

When you open a URL in the browser:

1. **Web server → `public/index.php`**
2. **Bootstrap app → `bootstrap/app.php`**
3. **HTTP kernel + middleware pipeline runs**
4. **Router matches route from `routes/web.php`**
5. **Controller action OR route closure runs**
6. **Return a Response (HTML / JSON / redirect / file)**
7. **Response sent back to browser**

---

## 2) Step-by-step flow using your files

### Step A — Entry point: `public/index.php`

All HTTP requests are routed to `public/index.php` (your “front controller”).

What it does (simplified):

- Loads maintenance mode file (if present)
- Loads Composer autoloader: `vendor/autoload.php`
- Creates the Laravel application by loading: `bootstrap/app.php`
- Captures the incoming request and asks the app to handle it

In your file, the important lines are:

- `require __DIR__.'/../vendor/autoload.php';`
- `$app = require_once __DIR__.'/../bootstrap/app.php';`
- `$app->handleRequest(Request::capture());`

### Step B — Bootstrap / configure the app: `bootstrap/app.php`

In Laravel 13, `bootstrap/app.php` uses `Application::configure(...)` to wire things up.

In your project, routing is configured here:

- Web routes: `routes/web.php`
- Console routes: `routes/console.php`
- Health route: `/up`

This is the point where Laravel builds the application container, registers core services, and prepares middleware + exception handling.

### Step C — Route matching: `routes/web.php`

Laravel checks the incoming URL + HTTP method, then matches it against routes.

Your current `routes/web.php` contains:

- `GET /` → returns `view('welcome')`

So:

- If the browser requests `/` with GET,
- Laravel runs that route closure,
- and returns the `welcome` view.

### Step D — View rendering: `resources/views/welcome.blade.php`

`view('welcome')` means:

- Laravel looks for `resources/views/welcome.blade.php`
- Blade compiles it (first time) into cached PHP under `storage/framework/views`
- The rendered HTML becomes the Response body

**Important in your project right now:** `welcome.blade.php` is empty, so `/` will render an empty page.

---

## 3) What happens in between (middleware pipeline)

Between “route matched” and “response returned”, Laravel runs middleware (think: filters/hooks).

Common responsibilities:

- Sessions & cookies
- CSRF protection (for web forms)
- Authentication / authorization checks
- Rate limiting
- Localization

In Laravel 13, middleware configuration can be customized in `bootstrap/app.php` inside:

```php
->withMiddleware(function (Middleware $middleware): void {
    //
})
```

Even if you don’t add anything here, Laravel still has sensible defaults for web requests.

---

## 4) “MVC” flow (typical real app pattern)

Right now your `/` route uses a closure. In real apps you usually do:

1. **Route** → points to a **Controller**
2. **Controller** → calls **Model / Service** for data
3. **Controller** → returns a **View** (HTML) or JSON

Typical file locations:

- Controllers: `app/Http/Controllers/`
- Models: `app/Models/`
- Views: `resources/views/`
- Routes: `routes/web.php`

---

## 5) CodeIgniter-style comparison (mental model)

If you know CodeIgniter, this mapping helps:

- `public/index.php` (Laravel) ≈ `index.php` (CI)  
  **front controller**

- `routes/web.php` (Laravel) ≈ `app/Config/Routes.php` (CI4)  
  **routes definition**

- Middleware (Laravel) ≈ Filters/Hooks (CI)  
  **pre/post request pipeline**

- `app/Http/Controllers/*` (Laravel) ≈ `app/Controllers/*` (CI)  
  **controllers**

- `resources/views/*.blade.php` (Laravel) ≈ `app/Views/*` (CI)  
  **views/templates**

- Service Container + Providers (Laravel)  
  Laravel has a stronger built-in DI/container approach than CI’s default patterns.

---

## 5.1) Laravel vs CodeIgniter (diff table)

| Topic | Laravel (this project) | CodeIgniter (typical CI4) |
|---|---|---|
| Entry point | `public/index.php` bootstraps app, handles request | `public/index.php` bootstraps CI, runs framework |
| Bootstrap / config | `bootstrap/app.php` (`Application::configure(...)`) | `app/Config/*` (App, Routes, Filters, etc.) |
| Routes | `routes/web.php` (web) | `app/Config/Routes.php` |
| Handler | Route closure or `Controller@method` | Controller method (or closure route) |
| Middleware / filters | Middleware pipeline | Filters (before/after) |
| Views | Blade: `resources/views/*.blade.php` | PHP views: `app/Views/*` |
| DI / container | Service container + Providers (`app/Providers/*`) | Lighter DI (Services), less container-centric |
| “Hello” response | `return 'Hello World';` in route/controller | `return 'Hello World';` in controller |

---

## 5.2) “Hello World” example (both)

### Laravel (your app)

Edit `routes/web.php`:

```php
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
});
```

Open in browser: `http://localhost/hello`

### CodeIgniter 4 (typical)

In `app/Config/Routes.php`:

```php
$routes->get('hello', 'Hello::index');
```

Create `app/Controllers/Hello.php`:

```php
<?php

namespace App\Controllers;

class Hello extends BaseController
{
    public function index()
    {
        return 'Hello World';
    }
}
```

Open in browser: `http://localhost/hello`

---

## 6) Quick “trace” example for `/`

Request:

- `GET /`

Trace:

1. `public/index.php` bootstraps Laravel
2. `bootstrap/app.php` loads `routes/web.php`
3. Router matches `Route::get('/')`
4. Route returns `view('welcome')`
5. Blade renders `resources/views/welcome.blade.php`
6. Response HTML sent to browser

---

## 7) Useful places to learn next (inside this repo)

- `public/index.php` → first file for HTTP entry
- `bootstrap/app.php` → configuration + route wiring
- `routes/web.php` → URL to handler mapping
- `app/Providers/AppServiceProvider.php` → where you can register services/bindings
- `config/*.php` → framework & app configuration
- `storage/logs/laravel.log` → errors and debugging output

