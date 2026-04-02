<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immune Support Supplements | Gulf Pharmacy</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,700;1,500&display=swap"
        rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #0f2438;
            --primary-blue-dark: #091522;
            --secondary-teal: #00b09b;
            --secondary-teal-hover: #009382;
            --accent-green: #96e6a1;
            --bg-light: #f5f8fa;
            --bg-white: #ffffff;
            --bg-blue-tint: #eaf1f5;
            --text-dark: #1a1a1a;
            --text-muted: #6b7280;
            --border-light: rgba(15, 36, 56, 0.08);

            --radius-sm: 8px;
            --radius-md: 16px;
            --radius-lg: 24px;
            --radius-pill: 100px;
            --transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            cursor: none;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            font-family: 'Outfit', sans-serif;
            color: var(--text-dark);
            background-color: var(--bg-light);
            line-height: 1.6;
        }

        /* Custom Cursor */
        .cursor-dot {
            width: 8px;
            height: 8px;
            background-color: var(--secondary-teal);
            border-radius: 50%;
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width 0.2s, height 0.2s;
        }

        .cursor-outline {
            width: 40px;
            height: 40px;
            border: 1px solid var(--secondary-teal);
            border-radius: 50%;
            position: fixed;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 9998;
            transform: translate(-50%, -50%);
            transition: width 0.2s, height 0.2s;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        .container {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .section {
            padding: 80px 0;
        }

        .text-gradient {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-teal));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Navigation */
        header {
            background: var(--bg-white);
            border-bottom: 1px solid var(--border-light);
            padding: 16px 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            color: var(--secondary-teal);
        }

        .nav-links {
            display: flex;
            gap: 40px;
        }

        .nav-link {
            font-weight: 500;
            font-size: 0.95rem;
        }

        .nav-actions {
            display: flex;
            gap: 12px;
        }

        .icon-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1px solid var(--border-light);
            background: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
            color: var(--primary-blue);
        }

        .icon-btn:hover {
            background: var(--bg-blue-tint);
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 28px;
            border-radius: var(--radius-pill);
            font-size: 1rem;
            font-weight: 600;
            border: none;
            transition: var(--transition);
        }

        .btn-primary {
            background: var(--primary-blue);
            color: var(--bg-white);
        }

        .btn-primary:hover {
            background: var(--secondary-teal);
            box-shadow: 0 10px 20px rgba(0, 176, 155, 0.2);
            transform: translateY(-2px);
            color: var(--bg-white);
        }

        .btn-outline {
            border: 2px solid var(--border-light);
            color: var(--primary-blue);
            background: var(--bg-white);
        }

        .btn-outline:hover {
            border-color: var(--primary-blue);
        }

        /* Top Section / Breadcrumb */
        .page-header {
            background: var(--bg-blue-tint);
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }

        .page-header::after {
            content: '';
            position: absolute;
            right: 0;
            bottom: 0;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(0, 176, 155, 0.1), transparent 70%);
            border-radius: 50%;
        }

        .breadcrumb {
            display: flex;
            gap: 8px;
            align-items: center;
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 24px;
            font-weight: 500;
        }

        .breadcrumb i {
            font-size: 14px;
        }

        .breadcrumb a:hover {
            color: var(--primary-blue);
        }

        .breadcrumb .active {
            color: var(--primary-blue);
            font-weight: 600;
        }

        .header-content h1 {
            font-size: 3.5rem;
            color: var(--primary-blue);
            font-weight: 800;
            margin-bottom: 16px;
            letter-spacing: -1px;
        }

        .header-content p {
            font-size: 1.15rem;
            color: var(--text-muted);
            max-width: 600px;
        }

        /* Solution Overview & Types */
        .overview-box {
            background: var(--bg-white);
            padding: 40px;
            border-radius: var(--radius-md);
            box-shadow: 0 10px 30px rgba(15, 36, 56, 0.03);
            margin-top: -30px;
            position: relative;
            z-index: 10;
            display: flex;
            gap: 40px;
            align-items: center;
            margin-bottom: 60px;
        }

        .overview-text {
            flex: 1;
        }

        .overview-text h3 {
            font-size: 1.4rem;
            color: var(--primary-blue);
            margin-bottom: 12px;
        }

        .overview-text p {
            color: var(--text-muted);
            line-height: 1.8;
        }

        .overview-icon {
            width: 80px;
            height: 80px;
            background: var(--bg-light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: var(--secondary-teal);
        }

        .types-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .type-card {
            background: var(--bg-white);
            border: 1px solid var(--border-light);
            padding: 24px;
            border-radius: var(--radius-md);
            transition: var(--transition);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .type-card:hover {
            border-color: var(--secondary-teal);
            box-shadow: 0 10px 20px rgba(0, 176, 155, 0.05);
            transform: translateY(-5px);
        }

        .type-card h4 {
            font-size: 1.1rem;
            color: var(--primary-blue);
            margin-bottom: 8px;
        }

        .type-card p {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 16px;
        }

        .type-link {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--secondary-teal);
            display: inline-flex;
            align-items: center;
            gap: 4px;
            margin-top: auto;
            justify-content: center;
        }

        /* Layout & Sidebar */
        .store-layout {
            display: grid;
            grid-template-columns: 280px 1fr;
            gap: 40px;
        }

        /* Sidebar Filters */
        .sidebar {
            background: var(--bg-white);
            border-radius: var(--radius-md);
            padding: 32px;
            border: 1px solid var(--border-light);
            align-self: start;
            position: sticky;
            top: 100px;
        }

        .filter-section {
            margin-bottom: 32px;
        }

        .filter-section:last-child {
            margin-bottom: 0;
        }

        .filter-title {
            font-size: 1.1rem;
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.95rem;
            color: var(--text-muted);
            cursor: pointer;
        }

        .checkbox-label input {
            width: 18px;
            height: 18px;
            accent-color: var(--secondary-teal);
        }

        /* Products Toolbar */
        .products-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            background: var(--bg-white);
            padding: 16px 24px;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-light);
        }

        .results-count {
            font-size: 0.95rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .sort-box {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sort-box select {
            padding: 10px 32px 10px 16px;
            border-radius: var(--radius-sm);
            border: 1px solid var(--border-light);
            font-family: 'Outfit';
            font-size: 0.95rem;
            outline: none;
            appearance: none;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="%236b7280" d="M7 10l5 5 5-5z"/></svg>') no-repeat right 8px center;
        }

        /* Product Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .product-card {
            background: var(--bg-white);
            border-radius: var(--radius-md);
            padding: 20px;
            transition: var(--transition);
            border: 1px solid var(--border-light);
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            box-shadow: 0 20px 40px rgba(15, 36, 56, 0.08);
            transform: translateY(-8px);
            border-color: transparent;
        }

        .product-img {
            background: #eef2f5;
            height: 240px;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            padding: 24px;
        }

        .product-img img {
            max-height: 100%;
            transition: 0.5s;
            mix-blend-mode: multiply;
        }

        .product-card:hover .product-img img {
            transform: scale(1.1);
        }

        .quick-view {
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(4px);
            padding: 10px 20px;
            border-radius: var(--radius-pill);
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--primary-blue);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            white-space: nowrap;
        }

        .product-card:hover .quick-view {
            bottom: 20px;
            opacity: 1;
        }

        .stars {
            color: #f59e0b;
            font-size: 16px;
            display: flex;
            margin-bottom: 8px;
        }

        .stars i {
            font-size: 16px;
        }

        .reviews {
            color: var(--text-muted);
            font-size: 0.8rem;
            margin-left: 6px;
        }

        .product-info h3 {
            font-size: 1.15rem;
            color: var(--primary-blue);
            margin-bottom: 8px;
        }

        .product-info p {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 24px;
            line-height: 1.5;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: auto;
        }

        .price {
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--primary-blue);
        }

        .price span {
            font-size: 0.8rem;
            font-weight: 500;
            color: var(--text-muted);
        }

        .add-cart-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--bg-blue-tint);
            color: var(--primary-blue);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .product-card:hover .add-cart-btn {
            background: var(--primary-blue);
            color: var(--bg-white);
        }

        /* Trust Ribbon */
        .trust-ribbon {
            background: var(--primary-blue);
            padding: 40px 0;
            margin-top: 80px;
            color: white;
            display: flex;
            justify-content: space-around;
        }

        .trust-ribbon-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .trust-ribbon-item i {
            font-size: 32px;
            color: var(--accent-green);
        }

        .trust-ribbon-item span {
            font-size: 1.1rem;
            font-weight: 600;
        }

        /* Final CTA */
        .cta-footer {
            background: white;
            padding: 100px 0;
            text-align: center;
        }

        .cta-footer h2 {
            font-size: 2.8rem;
            color: var(--primary-blue);
            margin-bottom: 32px;
            font-weight: 800;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 16px;
        }

        /* Hover target class for custom cursor */
        .hover-target {
            cursor: none;
        }

        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <header>
        <div class="container navbar">
            <a href="index.html" class="logo hover-target">
                <span class="material-icons-outlined logo-icon">medical_information</span>
                Gulf Pharmacy
            </a>
            <ul class="nav-links">
                <li><a href="#" class="nav-link hover-target">Medicines</a></li>
                <li><a href="index.html" class="nav-link hover-target"
                        style="color:var(--primary-blue); font-weight:600;">Wellness</a></li>
                <li><a href="#" class="nav-link hover-target">Clinical</a></li>
            </ul>
            <div class="nav-actions">
                <button class="icon-btn hover-target"><span class="material-icons-outlined">search</span></button>
                <button class="icon-btn hover-target"><span
                        class="material-icons-outlined">shopping_cart</span></button>
            </div>
        </div>
    </header>

    <div class="page-header">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" class="hover-target">Home</a>
                <i class="material-icons-outlined">chevron_right</i>
                <a href="index.html" class="hover-target">Wellness & Clinical Nutrition</a>
                <i class="material-icons-outlined">chevron_right</i>
                <span class="active">Immune Support</span>
            </div>

            <div class="header-content reveal">
                <h1>Supplements That Support <br>Your <span class="text-gradient">Immunity</span></h1>
                <p>Explore a curated selection of vitamins and supplements designed to support immune health and overall
                    wellness, bridging the gaps in your daily diet.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="overview-box reveal">
            <div class="overview-icon"><i class="material-icons-outlined">shield</i></div>
            <div class="overview-text">
                <h3>How Nutrients Support Immunity</h3>
                <p>Key nutrients that support immunity include Vitamin C, Zinc, Vitamin D, and powerful antioxidants.
                    Working together, they help strengthen the body's natural defense systems, support cellular health,
                    and maintain inflammatory balance during seasonal changes.</p>
            </div>
        </div>

        <div class="types-grid reveal" style="margin-bottom: 80px;">
            <div class="type-card hover-target">
                <h4>Vitamin C</h4>
                <p>Essential antioxidant support.</p>
                <a href="#" class="type-link hover-target">View Products <i class="material-icons-outlined"
                        style="font-size:16px;">east</i></a>
            </div>
            <div class="type-card hover-target">
                <h4>Zinc Tablets</h4>
                <p>Mineral defense activation.</p>
                <a href="#" class="type-link hover-target">View Products <i class="material-icons-outlined"
                        style="font-size:16px;">east</i></a>
            </div>
            <div class="type-card hover-target">
                <h4>Multivitamins</h4>
                <p>Comprehensive daily coverage.</p>
                <a href="#" class="type-link hover-target">View Products <i class="material-icons-outlined"
                        style="font-size:16px;">east</i></a>
            </div>
            <div class="type-card hover-target">
                <h4>Immune Blends</h4>
                <p>Multi-nutrient defense complexes.</p>
                <a href="#" class="type-link hover-target">View Products <i class="material-icons-outlined"
                        style="font-size:16px;">east</i></a>
            </div>
            <div class="type-card hover-target">
                <h4>Probiotics</h4>
                <p>Gut-based immune fortification.</p>
                <a href="#" class="type-link hover-target">View Products <i class="material-icons-outlined"
                        style="font-size:16px;">east</i></a>
            </div>
        </div>

        <div class="section-header" style="margin-bottom: 32px;">
            <h2 style="font-size: 2.2rem; color: var(--primary-blue);">Recommended <span class="text-gradient">Immune
                    Support</span> Products</h2>
        </div>

        <div class="store-layout">
            <!-- Sidebar Filters -->
            <aside class="sidebar reveal">
                <div class="filter-section">
                    <div class="filter-title">Brand <i class="material-icons-outlined">expand_more</i></div>
                    <div class="checkbox-group">
                        <label class="checkbox-label hover-target"><input type="checkbox" checked> Zenith
                            Nutrients</label>
                        <label class="checkbox-label hover-target"><input type="checkbox"> Pure Encapsulations</label>
                        <label class="checkbox-label hover-target"><input type="checkbox"> Nature's Way</label>
                        <label class="checkbox-label hover-target"><input type="checkbox"> Solgar</label>
                    </div>
                </div>

                <div class="filter-section">
                    <div class="filter-title">Supplement Type <i class="material-icons-outlined">expand_more</i></div>
                    <div class="checkbox-group">
                        <label class="checkbox-label hover-target"><input type="checkbox"> Tablet</label>
                        <label class="checkbox-label hover-target"><input type="checkbox" checked> Capsule</label>
                        <label class="checkbox-label hover-target"><input type="checkbox"> Effervescent</label>
                        <label class="checkbox-label hover-target"><input type="checkbox"> Liquid</label>
                    </div>
                </div>

                <div class="filter-section">
                    <div class="filter-title">Price Range <i class="material-icons-outlined">expand_more</i></div>
                    <div class="checkbox-group">
                        <label class="checkbox-label hover-target"><input type="checkbox"> Under 50 AED</label>
                        <label class="checkbox-label hover-target"><input type="checkbox"> 50 - 100 AED</label>
                        <label class="checkbox-label hover-target"><input type="checkbox" checked> 100 - 200 AED</label>
                        <label class="checkbox-label hover-target"><input type="checkbox"> Above 200 AED</label>
                    </div>
                </div>

                <div class="filter-section">
                    <div class="filter-title">Customer Rating <i class="material-icons-outlined">expand_more</i></div>
                    <div class="checkbox-group">
                        <label class="checkbox-label hover-target"><input type="checkbox" checked> ★★★★ & Up</label>
                        <label class="checkbox-label hover-target"><input type="checkbox"> ★★★ & Up</label>
                    </div>
                </div>
            </aside>

            <!-- Product Feed -->
            <main>
                <div class="products-toolbar reveal">
                    <div class="results-count">Showing 1-9 of 45 products</div>
                    <div class="sort-box">
                        <span style="color:var(--text-muted); font-size:0.9rem;">Sort by:</span>
                        <select class="hover-target">
                            <option>Most Popular</option>
                            <option>Best Rated</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>
                </div>

                <div class="products-grid">
                    <!-- Product 1 -->
                    <div class="product-card reveal hover-target">
                        <div class="product-img">
                            <img src="assets/product_vitamins.png" alt="Zenith Vitamin C">
                            <div class="quick-view">Quick View</div>
                        </div>
                        <div class="stars">
                            <i class="material-icons-outlined">star</i><i class="material-icons-outlined">star</i><i
                                class="material-icons-outlined">star</i><i class="material-icons-outlined">star</i><i
                                class="material-icons-outlined">star_half</i>
                            <span class="reviews">(124)</span>
                        </div>
                        <div class="product-info">
                            <h3>Zenith Daily Multivitamin</h3>
                            <p>Complete multi-nutrient coverage with boosted immunity blend including Vitamin C & D.</p>
                        </div>
                        <div class="product-bottom">
                            <div class="price">125 <span>AED</span></div>
                            <button class="add-cart-btn hover-target"><i
                                    class="material-icons-outlined">shopping_cart</i></button>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card reveal hover-target">
                        <div class="product-img">
                            <img src="assets/product_vitamins.png" alt="Advanced Shield"
                                style="filter: hue-rotate(45deg);">
                            <div class="quick-view">Quick View</div>
                        </div>
                        <div class="stars">
                            <i class="material-icons-outlined">star</i><i class="material-icons-outlined">star</i><i
                                class="material-icons-outlined">star</i><i class="material-icons-outlined">star</i><i
                                class="material-icons-outlined">star</i>
                            <span class="reviews">(89)</span>
                        </div>
                        <div class="product-info">
                            <h3>Liposomal Vitamin C 1000mg</h3>
                            <p>High absorption format ensuring maximum cellular delivery for immediate immune response.
                            </p>
                        </div>
                        <div class="product-bottom">
                            <div class="price">95 <span>AED</span></div>
                            <button class="add-cart-btn hover-target"><i
                                    class="material-icons-outlined">shopping_cart</i></button>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card reveal hover-target">
                        <div class="product-img">
                            <img src="assets/product_vitamins.png" alt="Zinc Picolinate"
                                style="filter: hue-rotate(90deg);">
                            <div class="quick-view">Quick View</div>
                        </div>
                        <div class="stars">
                            <i class="material-icons-outlined">star</i><i class="material-icons-outlined">star</i><i
                                class="material-icons-outlined">star</i><i class="material-icons-outlined">star</i><i
                                class="material-icons-outlined">star_border</i>
                            <span class="reviews">(42)</span>
                        </div>
                        <div class="product-info">
                            <h3>Premium Zinc Picolinate</h3>
                            <p>Highly bioavailable zinc formula crucial for daily immune system maintenance.</p>
                        </div>
                        <div class="product-bottom">
                            <div class="price">75 <span>AED</span></div>
                            <button class="add-cart-btn hover-target"><i
                                    class="material-icons-outlined">shopping_cart</i></button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Trust Ribbon -->
    <div class="trust-ribbon">
        <div class="container" style="display:flex; justify-content:space-between; width:100%;">
            <div class="trust-ribbon-item">
                <i class="material-icons-outlined">verified</i>
                <span>Pharmacy verified supplements</span>
            </div>
            <div class="trust-ribbon-item">
                <i class="material-icons-outlined">public</i>
                <span>Globally trusted brands</span>
            </div>
            <div class="trust-ribbon-item">
                <i class="material-icons-outlined">lock</i>
                <span>Safe online shopping</span>
            </div>
            <div class="trust-ribbon-item">
                <i class="material-icons-outlined">local_shipping</i>
                <span>Fast delivery in UAE</span>
            </div>
        </div>
    </div>

    <!-- Final CTA -->
    <div class="cta-footer reveal">
        <div class="container">
            <h2>Find the Right Wellness Support for Your Health</h2>
            <div class="cta-buttons">
                <button class="btn btn-primary hover-target">Add Selected to Cart <i
                        class="material-icons-outlined">shopping_cart</i></button>
                <a href="index.html" class="btn btn-outline hover-target">Continue Exploring Wellness Products</a>
            </div>
        </div>
    </div>

    <script>
        // Custom Cursor
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');
        window.addEventListener('mousemove', (e) => {
            cursorDot.style.left = `${e.clientX}px`; cursorDot.style.top = `${e.clientY}px`;
            cursorOutline.style.left = `${e.clientX}px`; cursorOutline.style.top = `${e.clientY}px`;
        });
        document.querySelectorAll('.hover-target').forEach(t => {
            t.addEventListener('mouseenter', () => { cursorOutline.style.transform = 'translate(-50%, -50%) scale(1.5)'; });
            t.addEventListener('mouseleave', () => { cursorOutline.style.transform = 'translate(-50%, -50%) scale(1)'; });
        });

        // Reveal animations
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('active'); });
        }, { threshold: 0.1 });
        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
    </script>
</body>

</html>