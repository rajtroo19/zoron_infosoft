<?php
require_once __DIR__ . '/config.php';
$request_uri = $_SERVER['REQUEST_URI'];
$current_page = trim(parse_url($request_uri, PHP_URL_PATH), '/');
if ($current_page == 'index.php' || $current_page == '') $current_page = 'index';
$current_page = str_replace('.php', '', $current_page);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta tags for SEO & og tags to be injected per page, defaults below -->
    <title><?= isset($page_title) ? $page_title : 'Zoron Infosoft - IT Solutions Partner' ?></title>
    <meta name="description" content="<?= isset($page_desc) ? $page_desc : 'Experience the Best IT Solutions with Zoron Infosoft. Your partner for smarter, safer IT.' ?>">
    <meta property="og:title" content="<?= isset($page_title) ? $page_title : 'Zoron Infosoft' ?>">
    <meta property="og:description" content="<?= isset($page_desc) ? $page_desc : 'Experience the Best IT Solutions' ?>">
    
    <!-- Favicon placeholder -->
    <link rel="icon" href="<?= BASE_URL ?>assets/images/favicon.png" type="image/png">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    
    <style>
        /* Header Specific Styles inline for modularity, can be moved to style.css */
        .site-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(248, 250, 252, 0.8);
            backdrop-filter: var(--glass-blur);
            border-bottom: 1px solid rgba(226, 232, 240, 0.4);
            z-index: 1000;
            transition: var(--transition);
        }
        .site-header.scrolled {
            box-shadow: 0 2px 12px rgba(21, 101, 192, 0.08);
            padding: 8px 0;
        }
        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 80px;
        }
        
        /* Logo CSS Implementation */
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-family: var(--font-heading);
            font-size: 26px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 14px rgba(var(--shadow-color), 0.4);
        }
        .logo-icon::after {
            content: "";
            position: absolute;
            width: 16px;
            height: 26px;
            background-color: #fff;
            clip-path: polygon(100% 0, 0 40%, 40% 50%, 0 100%, 100% 60%, 60% 50%);
        }
        .logo-text-z { color: var(--text-heading); }
        .logo-text-i { 
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Navigation */
        .main-nav ul {
            display: flex;
            gap: 36px;
            align-items: center;
        }
        .main-nav a {
            color: var(--text-body);
            font-weight: 500;
            position: relative;
            padding: 8px 0;
            transition: var(--transition);
        }
        .main-nav a:hover, .main-nav a.active {
            color: var(--primary);
            font-weight: 600;
        }
        .main-nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0%;
            height: 2px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--accent) 100%);
            transition: var(--transition);
            transform: translateX(-50%);
            border-radius: 2px;
        }
        .main-nav a.active::after, .main-nav a:hover::after {
            width: 100%;
        }

        /* Mobile Menu */
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 6px;
            cursor: pointer;
            padding: 8px;
        }
        .menu-toggle span {
            width: 24px;
            height: 2px;
            background-color: var(--text-heading);
            transition: var(--transition);
        }

        @media (max-width: 1024px) {
            .menu-toggle { display: flex; }
            .header-nav { display: none; }
            .main-nav {
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: var(--bg-main);
                box-shadow: var(--shadow-sm);
                padding: 24px;
                flex-direction: column;
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
                transition: all 0.4s ease;
            }
            .main-nav.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }
            .main-nav ul {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
                width: 100%;
            }
            .main-nav .btn { margin-top: 16px; width: 100%; }
            .menu-toggle.active span:nth-child(1) { transform: translateY(8px) rotate(45deg); }
            .menu-toggle.active span:nth-child(2) { opacity: 0; }
            .menu-toggle.active span:nth-child(3) { transform: translateY(-8px) rotate(-45deg); }
        }
    </style>
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <!-- Logo -->
        <a href="<?= BASE_URL ?>" class="logo">
            <div class="logo-icon"></div>
            <div>
                <span class="logo-text-z">Zoron</span><span class="logo-text-i">Infosoft</span>
            </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="main-nav">
            <ul>
                <li><a href="<?= BASE_URL ?>" class="<?= ($current_page == 'index' || $current_page == '') ? 'active' : '' ?>">Home</a></li>
                <li><a href="<?= BASE_URL ?>about" class="<?= $current_page == 'about' ? 'active' : '' ?>">About Us</a></li>
                <li><a href="<?= BASE_URL ?>services" class="<?= $current_page == 'services' ? 'active' : '' ?>">Services</a></li>
                <li><a href="<?= BASE_URL ?>career" class="<?= $current_page == 'career' ? 'active' : '' ?>">Career</a></li>
                <li><a href="<?= BASE_URL ?>contact" class="<?= $current_page == 'contact' ? 'active' : '' ?>">Contact Us</a></li>
                <li class="header-nav"><a href="<?= BASE_URL ?>contact" class="btn btn-header">Get Started</a></li>
            </ul>
        </nav>

        <!-- Mobile Menu Toggle -->
        <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

<!-- Main content starts here, offset by header height -->
<main style="padding-top: 80px;">
