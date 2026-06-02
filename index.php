<?php
$products = [
    [
        "icon" => "🪢",
        "title" => "Webbing Sling",
        "desc" => "Tali angkat polyester berkapasitas tinggi untuk operasi lifting yang aman, ringan, dan tidak merusak permukaan beban."
    ],
    [
        "icon" => "🔵",
        "title" => "Round Sling",
        "desc" => "Sling bundar endless berkekuatan tinggi, fleksibel untuk berbagai konfigurasi pengangkatan beban sensitif."
    ],
    [
        "icon" => "⛓️",
        "title" => "Chain Sling — RUD",
        "desc" => "Rantai angkat grade 8 & 10 merk RUD Germany. Distributor tunggal resmi untuk Indonesia."
    ],
    [
        "icon" => "🔩",
        "title" => "Wire Rope Sling",
        "desc" => "Sling kawat baja brand BRIDON, USHA MARTIN, KISWIRE & VEROPE untuk beban berat dan lingkungan ekstrem."
    ],
    [
        "icon" => "🦺",
        "title" => "Height Safety Equipment",
        "desc" => "Body harness, lanyard rope, dan sistem proteksi jatuh lengkap untuk bekerja aman di ketinggian."
    ],
    [
        "icon" => "📦",
        "title" => "Lashing & Load Control",
        "desc" => "Ratchet, hook, dan sistem pengamanan kargo untuk transportasi darat, laut, dan udara yang andal."
    ],
];

$stats = [
    ["value" => "1997",  "label" => "Berdiri di Indonesia"],
    ["value" => "27+",   "label" => "Tahun Pengalaman"],
    ["value" => "50+",   "label" => "Negara Jaringan Global"],
    ["value" => "ISO",   "label" => "9001 Tersertifikasi"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpanSet Indonesia — Safety. Lifting. Protection.</title>
    <meta name="description" content="SpanSet adalah pionir perlengkapan lifting, lashing, dan height safety di dunia, menjadi principal dari merek dagang no 1 di Indonesia sejak 1997.">
    <meta name="keywords" content="Spanset, Spanset Indonesia, Webbing Sling, Webbing, Lifting">
    <meta name="author" content="Spanset">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="geo.position" content="-6.098882164993395;106.97517988021606">
    <meta name="geo.region" content="ID-JB">
    <meta name="geo.placename" content="Jawa Barat">
    <link rel="canonical" href="https://spanset-indonesia.github.io/">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://spanset-indonesia.github.io/">
    <meta property="og:title" content="SpanSet Indonesia — Safety. Lifting. Protection.">
    <meta property="og:description" content="SpanSet adalah pionir perlengkapan lifting, lashing, dan height safety di dunia, menjadi principal dari merek dagang no 1 di Indonesia sejak 1997.">
    <meta property="og:image" content="https://spanset-indonesia.github.io/logo.svg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Spanset">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://spanset-indonesia.github.io/">
    <meta property="twitter:title" content="SpanSet Indonesia — Safety. Lifting. Protection.">
    <meta property="twitter:description" content="SpanSet adalah pionir perlengkapan lifting, lashing, dan height safety di dunia, menjadi principal dari merek dagang no 1 di Indonesia sejak 1997.">
    <meta property="twitter:image" content="https://spanset-indonesia.github.io/logo.svg">
    <link rel="icon" type="image/svg+xml" href="https://spanset-indonesia.github.io/logo.svg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --navy:        #004b73;
            --navy-dark:   #003554;
            --navy-deeper: #00263c;
            --navy-light:  #0069a0;
            --accent:      #f0a500;  /* SpanSet yellow-gold accent */
            --accent-dim:  #c88700;
            --white:       #ffffff;
            --off-white:   #f5f7fa;
            --grey-lt:     #e8ecf0;
            --grey:        #8a96a3;
            --dark-txt:    #1a2533;
            --mid-txt:     #3d4f62;

            --font: 'Outfit', system-ui, sans-serif;
            --max-w: 1160px;
            --r: 6px;
            --t: 0.22s ease;
        }

        html { scroll-behavior: smooth; }
        body {
            font-family: var(--font);
            background: var(--white);
            color: var(--dark-txt);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
        }
        a { color: inherit; text-decoration: none; }
        ul { list-style: none; }
        img { display: block; max-width: 100%; }

        .container {
            max-width: var(--max-w);
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ── Topbar ── */
        .topbar {
            background: var(--navy-deeper);
            color: rgba(255,255,255,0.65);
            font-size: 12.5px;
            padding: 9px 0;
            letter-spacing: 0.02em;
        }
        .topbar__inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
        }
        .topbar a { color: rgba(255,255,255,0.65); transition: color var(--t); }
        .topbar a:hover { color: var(--accent); }
        .topbar__contact { display: flex; gap: 20px; align-items: center; }
        .topbar__contact span { display: flex; align-items: center; gap: 6px; }

        /* ── Nav ── */
        .nav {
            background: var(--navy);
            position: sticky;
            top: 0;
            z-index: 200;
            box-shadow: 0 2px 16px rgba(0,0,0,0.25);
        }
        .nav__inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 72px;
            gap: 32px;
        }
        .nav__logo {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-shrink: 0;
        }
        .nav__logo img {
            height: 40px;
            width: auto;
            filter: brightness(0) invert(1);
        }

        .nav__links {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .nav__links a {
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0.02em;
            color: rgba(255,255,255,0.82);
            padding: 8px 14px;
            border-radius: var(--r);
            transition: background var(--t), color var(--t);
        }
        .nav__links a:hover {
            background: rgba(255,255,255,0.12);
            color: var(--white);
        }
        .nav__cta {
            background: var(--accent) !important;
            color: var(--navy-deeper) !important;
            font-weight: 700 !important;
            margin-left: 8px;
        }
        .nav__cta:hover {
            background: var(--accent-dim) !important;
        }

        /* ── Hero ── */
        .hero {
            background: var(--navy);
            color: var(--white);
            padding: 96px 0 80px;
            position: relative;
            overflow: hidden;
        }
        .hero__bg-pattern {
            position: absolute;
            inset: 0;
            background-image:
                repeating-linear-gradient(
                    -45deg,
                    rgba(255,255,255,0.025) 0px,
                    rgba(255,255,255,0.025) 1px,
                    transparent 1px,
                    transparent 40px
                );
        }
        .hero__glow {
            position: absolute;
            top: -80px;
            right: -80px;
            width: 520px;
            height: 520px;
            background: radial-gradient(circle, rgba(0,105,160,0.5) 0%, transparent 70%);
            pointer-events: none;
        }
        .hero .container { position: relative; z-index: 2; }
        .hero__eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(240,165,0,0.15);
            border: 1px solid rgba(240,165,0,0.4);
            color: var(--accent);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 100px;
            margin-bottom: 28px;
        }
        .hero__title {
            font-size: clamp(42px, 6.5vw, 82px);
            font-weight: 800;
            line-height: 1.02;
            letter-spacing: -0.02em;
            max-width: 700px;
            margin-bottom: 24px;
        }
        .hero__title em {
            font-style: normal;
            color: var(--accent);
        }
        .hero__desc {
            font-size: 17px;
            font-weight: 300;
            color: rgba(255,255,255,0.75);
            max-width: 500px;
            line-height: 1.75;
            margin-bottom: 44px;
        }
        .hero__actions { display: flex; gap: 14px; flex-wrap: wrap; }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 13px 26px;
            border-radius: var(--r);
            font-family: var(--font);
            font-size: 14.5px;
            font-weight: 600;
            letter-spacing: 0.01em;
            cursor: pointer;
            transition: all var(--t);
            border: none;
        }
        .btn--gold   { background: var(--accent); color: var(--navy-deeper); }
        .btn--gold:hover { background: var(--accent-dim); }
        .btn--ghost  { background: transparent; color: var(--white); border: 1.5px solid rgba(255,255,255,0.35); }
        .btn--ghost:hover { border-color: var(--white); background: rgba(255,255,255,0.08); }
        .btn--navy   { background: var(--navy); color: var(--white); }
        .btn--navy:hover { background: var(--navy-dark); }

        /* ── Stats ── */
        .stats { background: var(--navy-dark); }
        .stats__grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
        }
        .stats__item {
            padding: 32px 20px;
            text-align: center;
            border-right: 1px solid rgba(255,255,255,0.1);
            color: var(--white);
        }
        .stats__item:last-child { border-right: none; }
        .stats__val {
            font-size: 44px;
            font-weight: 800;
            line-height: 1;
            color: var(--accent);
            display: block;
            margin-bottom: 6px;
            letter-spacing: -0.02em;
        }
        .stats__lbl {
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.07em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.6);
        }

        /* ── Section commons ── */
        section { padding: 88px 0; }
        .sec-tag {
            font-size: 11.5px;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--navy);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .sec-tag::before {
            content: '';
            display: block;
            width: 24px;
            height: 2px;
            background: var(--accent);
            flex-shrink: 0;
        }
        .sec-title {
            font-size: clamp(30px, 4.5vw, 48px);
            font-weight: 800;
            line-height: 1.08;
            letter-spacing: -0.02em;
            color: var(--dark-txt);
            margin-bottom: 14px;
        }
        .sec-title span { color: var(--navy); }
        .sec-desc {
            font-size: 16px;
            color: var(--grey);
            max-width: 540px;
            line-height: 1.72;
        }
        .sec-head { margin-bottom: 52px; }

        /* ── Products ── */
        .products { background: var(--off-white); }
        .products__grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }
        .prod-card {
            background: var(--white);
            border-radius: var(--r);
            padding: 32px 28px;
            border: 1.5px solid var(--grey-lt);
            border-top: 3px solid transparent;
            transition: border-top-color var(--t), box-shadow var(--t), transform var(--t);
            cursor: pointer;
        }
        .prod-card:hover {
            border-top-color: var(--navy);
            box-shadow: 0 6px 28px rgba(0,75,115,0.12);
            transform: translateY(-3px);
        }
        .prod-card__icon {
            font-size: 34px;
            margin-bottom: 18px;
            display: block;
        }
        .prod-card__title {
            font-size: 17px;
            font-weight: 700;
            color: var(--dark-txt);
            margin-bottom: 10px;
        }
        .prod-card__desc {
            font-size: 13.5px;
            color: var(--grey);
            line-height: 1.65;
            margin-bottom: 20px;
        }
        .prod-card__link {
            font-size: 13px;
            font-weight: 600;
            color: var(--navy);
            display: inline-flex;
            align-items: center;
            gap: 5px;
            letter-spacing: 0.01em;
            transition: gap var(--t), color var(--t);
        }
        .prod-card:hover .prod-card__link { gap: 9px; color: var(--navy-light); }

        /* ── About ── */
        .about__grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 72px;
            align-items: center;
        }
        .about__visual-wrap {
            background: var(--navy);
            border-radius: 10px;
            aspect-ratio: 4/3;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        .about__visual-logo {
            width: 56%;
            opacity: 0.18;
            filter: brightness(0) invert(1);
        }
        .about__visual-badge {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background: var(--accent);
            color: var(--navy-deeper);
            padding: 12px 18px;
            border-radius: var(--r);
            font-weight: 800;
            font-size: 13px;
            text-align: center;
            line-height: 1.3;
            box-shadow: 0 4px 16px rgba(0,0,0,0.2);
        }
        .about__visual-badge strong { font-size: 22px; display: block; }

        .about__points { margin: 28px 0 36px; }
        .about__point {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 14px 0;
            border-bottom: 1px solid var(--grey-lt);
        }
        .about__point:last-child { border-bottom: none; }
        .about__point-dot {
            width: 10px;
            height: 10px;
            background: var(--accent);
            border-radius: 50%;
            margin-top: 7px;
            flex-shrink: 0;
        }
        .about__point-title {
            font-size: 15px;
            font-weight: 700;
            color: var(--dark-txt);
            margin-bottom: 3px;
        }
        .about__point-desc { font-size: 13.5px; color: var(--grey); }

        /* ── CTA Band ── */
        .cta-band {
            background: linear-gradient(135deg, var(--navy-deeper) 0%, var(--navy) 100%);
            padding: 72px 0;
            position: relative;
            overflow: hidden;
        }
        .cta-band::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: repeating-linear-gradient(
                -45deg,
                rgba(255,255,255,0.02) 0px, rgba(255,255,255,0.02) 1px,
                transparent 1px, transparent 40px
            );
        }
        .cta-band .container {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            flex-wrap: wrap;
        }
        .cta-band__title {
            font-size: clamp(26px, 3.5vw, 40px);
            font-weight: 800;
            color: var(--white);
            line-height: 1.15;
            letter-spacing: -0.02em;
            max-width: 520px;
        }
        .cta-band__title em { font-style: normal; color: var(--accent); }

        /* ── Contact ── */
        .contact { background: var(--white); }
        .contact__grid {
            display: grid;
            grid-template-columns: 1fr 1.1fr;
            gap: 64px;
            align-items: start;
        }
        .contact__info-block {
            display: flex;
            gap: 16px;
            margin-bottom: 28px;
        }
        .contact__info-icon {
            width: 42px;
            height: 42px;
            background: rgba(0,75,115,0.08);
            border-radius: var(--r);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
            color: var(--navy);
        }
        .contact__info-label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--grey);
            margin-bottom: 4px;
        }
        .contact__info-value { font-size: 14.5px; font-weight: 500; color: var(--dark-txt); }
        .contact__info-value a { color: var(--navy); }
        .contact__info-value a:hover { text-decoration: underline; }

        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
        .form-group { margin-bottom: 18px; }
        .form-label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.07em;
            text-transform: uppercase;
            color: var(--mid-txt);
            margin-bottom: 7px;
        }
        .form-control {
            width: 100%;
            padding: 11px 15px;
            border: 1.5px solid var(--grey-lt);
            border-radius: var(--r);
            font-family: var(--font);
            font-size: 14.5px;
            color: var(--dark-txt);
            background: var(--white);
            transition: border-color var(--t), box-shadow var(--t);
            outline: none;
        }
        .form-control:focus {
            border-color: var(--navy);
            box-shadow: 0 0 0 3px rgba(0,75,115,0.1);
        }
        textarea.form-control { resize: vertical; min-height: 120px; }
        .form-submit {
            background: var(--navy);
            color: var(--white);
            width: 100%;
            justify-content: center;
            font-size: 15px;
            padding: 14px;
            border-radius: var(--r);
            font-weight: 700;
            cursor: pointer;
            transition: background var(--t);
            border: none;
            font-family: var(--font);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .form-submit:hover { background: var(--navy-dark); }

        .success-msg {
            background: #f0f9ff;
            border: 1.5px solid var(--navy-light);
            border-radius: var(--r);
            padding: 28px 24px;
            text-align: center;
        }
        .success-msg__icon { font-size: 40px; margin-bottom: 10px; }
        .success-msg__title { font-size: 18px; font-weight: 700; color: var(--navy); margin-bottom: 6px; }
        .success-msg__text { font-size: 14px; color: var(--grey); }

        /* ── Footer ── */
        .footer {
            background: var(--navy-deeper);
            color: rgba(255,255,255,0.55);
            padding: 56px 0 28px;
        }
        .footer__grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
            padding-bottom: 44px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            margin-bottom: 28px;
        }
        .footer__logo img {
            height: 36px;
            filter: brightness(0) invert(1);
            margin-bottom: 14px;
        }
        .footer__tagline {
            font-style: italic;
            font-size: 13px;
            color: rgba(255,255,255,0.4);
            margin-bottom: 14px;
        }
        .footer__about { font-size: 13px; line-height: 1.7; }
        .footer__col-title {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--white);
            margin-bottom: 16px;
        }
        .footer__links { display: flex; flex-direction: column; gap: 10px; }
        .footer__links a {
            font-size: 13.5px;
            color: rgba(255,255,255,0.5);
            transition: color var(--t);
        }
        .footer__links a:hover { color: var(--accent); }
        .footer__bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
            font-size: 12px;
        }
        .footer__badges { display: flex; gap: 8px; }
        .footer__badge {
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.12);
            border-radius: 4px;
            padding: 4px 10px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.05em;
            color: rgba(255,255,255,0.65);
        }

        /* ── Responsive ── */
        @media (max-width: 960px) {
            .products__grid { grid-template-columns: 1fr 1fr; }
            .about__grid    { grid-template-columns: 1fr; gap: 40px; }
            .contact__grid  { grid-template-columns: 1fr; gap: 40px; }
            .footer__grid   { grid-template-columns: 1fr 1fr; gap: 32px; }
            .stats__grid    { grid-template-columns: repeat(2,1fr); }
            .stats__item:nth-child(2) { border-right: none; }
        }
        @media (max-width: 620px) {
            .nav__links { display: none; }
            .products__grid { grid-template-columns: 1fr; }
            .footer__grid   { grid-template-columns: 1fr; }
            .hero { padding: 64px 0 56px; }
            .topbar__left { display: none; }
            .form-row { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<!-- Topbar -->
<div class="topbar">
    <div class="container">
        <div class="topbar__inner">
            <span class="topbar__left">📍 Marunda Center Blok F No.20, Bekasi — Jawa Barat 17211</span>
            <div class="topbar__contact">
                <span>
                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013 10.81a19.79 19.79 0 01-3.07-8.68A2 2 0 011.92 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92v2z"/></svg>
                    <a href="tel:+622128510077">+62 21 285 100 77</a>
                </span>
                <span>
                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <a href="mailto:marketing@spanset.co.id">marketing@spanset.co.id</a>
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Nav -->
<nav class="nav">
    <div class="container">
        <div class="nav__inner">
            <a href="/" class="nav__logo">
                <img src="https://spanset-indonesia.github.io/logo.svg" alt="SpanSet Indonesia" onerror="this.style.display='none';this.nextSibling.style.display='block'">
                <span style="display:none;color:#fff;font-size:20px;font-weight:800;letter-spacing:0.04em;">SpanSet <span style="color:var(--accent)">Indonesia</span></span>
            </a>
            <ul class="nav__links">
                <li><a href="#products">Produk</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#contact">Kontak</a></li>
                <li><a href="https://www.spanset.com/id-id" target="_blank" rel="noopener">SpanSet Global</a></li>
                <li><a href="#contact" class="nav__cta btn">Konsultasi Gratis</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero -->
<section class="hero" id="home">
    <div class="hero__bg-pattern"></div>
    <div class="hero__glow"></div>
    <div class="container">
        <div class="hero__eyebrow">⚡ Authorized Distributor · Indonesia sejak 1997</div>
        <h1 class="hero__title">
            Safety.<br>Lifting.<br><em>Protection.</em>
        </h1>
        <p class="hero__desc">
            SpanSet Indonesia adalah distributor resmi perlengkapan lifting, lashing, dan height safety terkemuka — menghadirkan standar kelas dunia untuk industri Indonesia selama lebih dari 27 tahun.
        </p>
        <div class="hero__actions">
            <a href="#products" class="btn btn--gold">Lihat Produk →</a>
            <a href="#contact" class="btn btn--ghost">Hubungi Kami</a>
        </div>
    </div>
</section>

<!-- Stats -->
<div class="stats">
    <div class="container">
        <div class="stats__grid">
            <?php foreach ($stats as $s): ?>
            <div class="stats__item">
                <span class="stats__val"><?= htmlspecialchars($s['value']) ?></span>
                <span class="stats__lbl"><?= htmlspecialchars($s['label']) ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Products -->
<section class="products" id="products">
    <div class="container">
        <div class="sec-head">
            <p class="sec-tag">Lini Produk Kami</p>
            <h2 class="sec-title">Solusi <span>Lifting & Safety</span><br>Kelas Dunia</h2>
            <p class="sec-desc">Setiap produk SpanSet dirancang, diuji, dan disertifikasi sesuai standar internasional — memastikan keselamatan dan produktivitas di setiap operasi lapangan Anda.</p>
        </div>
        <div class="products__grid">
            <?php foreach ($products as $p): ?>
            <div class="prod-card">
                <span class="prod-card__icon"><?= $p['icon'] ?></span>
                <h3 class="prod-card__title"><?= htmlspecialchars($p['title']) ?></h3>
                <p class="prod-card__desc"><?= htmlspecialchars($p['desc']) ?></p>
                <span class="prod-card__link">Selengkapnya →</span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- About -->
<section class="about" id="about">
    <div class="container">
        <div class="about__grid">
            <div class="about__visual-wrap">
                <img class="about__visual-logo"
                     src="https://spanset-indonesia.github.io/logo.svg"
                     alt="SpanSet Indonesia">
                <div class="about__visual-badge">
                    <strong>#1</strong>
                    Merek Lifting<br>di Indonesia
                </div>
            </div>
            <div>
                <p class="sec-tag">Tentang SpanSet Indonesia</p>
                <h2 class="sec-title">Kepercayaan yang<br><span>Teruji Sejak 1997</span></h2>
                <p class="sec-desc">
                    PT SpanSet Indonesia adalah bagian dari SpanSet International Group — perusahaan global dengan jaringan di lebih dari 50 negara. Kami menjadi mitra keselamatan terpercaya ribuan perusahaan di Indonesia, mulai dari sektor migas, pertambangan, konstruksi, hingga manufaktur berat.
                </p>
                <div class="about__points">
                    <div class="about__point">
                        <div class="about__point-dot"></div>
                        <div>
                            <div class="about__point-title">Distributor Tunggal Resmi</div>
                            <div class="about__point-desc">Pemegang lisensi eksklusif produk SpanSet dan agen tunggal RUD Germany untuk pasar Indonesia.</div>
                        </div>
                    </div>
                    <div class="about__point">
                        <div class="about__point-dot"></div>
                        <div>
                            <div class="about__point-title">Tersertifikasi ISO 9001</div>
                            <div class="about__point-desc">Sistem manajemen mutu disahkan Lloyd's Register Quality Assurance. Standar EN, ASME, dan SNI.</div>
                        </div>
                    </div>
                    <div class="about__point">
                        <div class="about__point-dot"></div>
                        <div>
                            <div class="about__point-title">Layanan Inspeksi & Pelatihan</div>
                            <div class="about__point-desc">Tim teknisi bersertifikat siap melakukan inspeksi berkala, perawatan, dan pelatihan K3 di lokasi Anda.</div>
                        </div>
                    </div>
                </div>
                <a href="#contact" class="btn btn--navy" style="display:inline-flex;">Konsultasikan Kebutuhan Anda →</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Band -->
<div class="cta-band">
    <div class="container">
        <h2 class="cta-band__title">Butuh solusi <em>lifting & safety</em><br>untuk proyek Anda?</h2>
        <a href="#contact" class="btn btn--gold" style="font-size:15px;padding:15px 30px;flex-shrink:0;">
            Hubungi Tim Kami →
        </a>
    </div>
</div>

<!-- Contact -->
<section class="contact" id="contact">
    <div class="container">
        <div class="sec-head">
            <p class="sec-tag">Kontak</p>
            <h2 class="sec-title">Siap <span>Membantu</span> Anda</h2>
            <p class="sec-desc">Konsultasikan kebutuhan lifting, lashing, dan height safety proyek Anda bersama tim ahli kami. Respon dalam 1×24 jam kerja.</p>
        </div>
        <div class="contact__grid">
            <div>
                <div class="contact__info-block">
                    <div class="contact__info-icon">📍</div>
                    <div>
                        <div class="contact__info-label">Alamat Kantor</div>
                        <div class="contact__info-value">Marunda Center Blok F No.20<br>Segara Makmur, Tarumajaya<br>Bekasi, Jawa Barat 17211</div>
                    </div>
                </div>
                <div class="contact__info-block">
                    <div class="contact__info-icon">📞</div>
                    <div>
                        <div class="contact__info-label">Telepon</div>
                        <div class="contact__info-value">
                            <a href="tel:+622128510077">+62 21 285 100 77</a><br>
                            Fax: +62 21 285 100 88
                        </div>
                    </div>
                </div>
                <div class="contact__info-block">
                    <div class="contact__info-icon">✉</div>
                    <div>
                        <div class="contact__info-label">Email</div>
                        <div class="contact__info-value">
                            <a href="mailto:marketing@spanset.co.id">marketing@spanset.co.id</a><br>
                            <a href="mailto:info@spanset.co.id" style="color:var(--grey);font-size:13px;">info@spanset.co.id</a>
                        </div>
                    </div>
                </div>
                <div class="contact__info-block">
                    <div class="contact__info-icon">🕒</div>
                    <div>
                        <div class="contact__info-label">Jam Operasional</div>
                        <div class="contact__info-value">Senin – Jumat: 08.00 – 17.00 WIB</div>
                    </div>
                </div>
                <div class="contact__info-block">
                    <div class="contact__info-icon">🏭</div>
                    <div>
                        <div class="contact__info-label">Cabang Surabaya</div>
                        <div class="contact__info-value">Ruko Klampis Megah B27<br>Sukolilo, Surabaya, Jawa Timur 60117</div>
                    </div>
                </div>
            </div>

            <div>
                <?php
                $sent = false;
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name    = htmlspecialchars(trim($_POST['name']    ?? ''));
                    $company = htmlspecialchars(trim($_POST['company'] ?? ''));
                    $email   = htmlspecialchars(trim($_POST['email']   ?? ''));
                    $phone   = htmlspecialchars(trim($_POST['phone']   ?? ''));
                    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
                    if ($name && $email && $message) {
                        // TODO: integrate mail() or save to DB
                        $sent = true;
                    }
                }
                ?>
                <?php if ($sent): ?>
                <div class="success-msg">
                    <div class="success-msg__icon">✅</div>
                    <div class="success-msg__title">Pesan Terkirim!</div>
                    <p class="success-msg__text">Terima kasih, <?= htmlspecialchars($name) ?>. Tim kami akan menghubungi Anda dalam 1×24 jam kerja.</p>
                </div>
                <?php else: ?>
                <form method="POST" action="#contact">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="name">Nama Lengkap *</label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Budi Santoso" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="company">Perusahaan</label>
                            <input class="form-control" type="text" id="company" name="company" placeholder="PT. Contoh Industri">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="email">Email *</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="budi@perusahaan.com" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">No. Telepon</label>
                            <input class="form-control" type="tel" id="phone" name="phone" placeholder="0812-xxxx-xxxx">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Pesan / Kebutuhan *</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Ceritakan kebutuhan lifting atau safety Anda — jenis produk, kapasitas, industri, dll." required></textarea>
                    </div>
                    <button type="submit" class="form-submit">Kirim Pesan →</button>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer__grid">
            <div>
                <div class="footer__logo">
                    <img src="https://spanset-indonesia.github.io/logo.svg" alt="SpanSet Indonesia">
                </div>
                <div class="footer__tagline">Safety. Lifting. Protection.</div>
                <p class="footer__about">
                    PT SpanSet Indonesia — authorized distributor SpanSet International Group untuk wilayah Indonesia. Bagian dari jaringan global di 50+ negara, bersertifikat ISO 9001.
                </p>
            </div>
            <div>
                <div class="footer__col-title">Produk</div>
                <ul class="footer__links">
                    <li><a href="#">Webbing Sling</a></li>
                    <li><a href="#">Round Sling</a></li>
                    <li><a href="#">Chain Sling — RUD</a></li>
                    <li><a href="#">Wire Rope Sling</a></li>
                    <li><a href="#">Height Safety</a></li>
                    <li><a href="#">Lashing & Load Control</a></li>
                </ul>
            </div>
            <div>
                <div class="footer__col-title">Layanan</div>
                <ul class="footer__links">
                    <li><a href="#">Inspeksi Peralatan</a></li>
                    <li><a href="#">Pelatihan K3</a></li>
                    <li><a href="#">Sertifikasi Produk</a></li>
                    <li><a href="#">Konsultasi Teknis</a></li>
                    <li><a href="#">After-Sales Support</a></li>
                </ul>
            </div>
            <div>
                <div class="footer__col-title">Perusahaan</div>
                <ul class="footer__links">
                    <li><a href="#">Tentang Kami</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Berita & Artikel</a></li>
                    <li><a href="https://www.spanset.com/id-id" target="_blank" rel="noopener">SpanSet Global ↗</a></li>
                    <li><a href="#contact">Hubungi Kami</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <span>&copy; <?= date('Y') ?> PT SpanSet Indonesia. Hak cipta dilindungi undang-undang.</span>
            <div class="footer__badges">
                <span class="footer__badge">ISO 9001</span>
                <span class="footer__badge">EN 1492</span>
                <span class="footer__badge">ASME B30</span>
                <span class="footer__badge">SNI</span>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
