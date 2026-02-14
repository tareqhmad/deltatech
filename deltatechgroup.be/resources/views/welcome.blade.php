<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Delta Tech - Solutions IT innovantes pour PME. Développement web, infrastructure IT, cloud, cybersécurité et support technique 24/7 en Belgique.">
    <meta name="keywords"
        content="solutions IT, développement web, infrastructure IT, cloud, cybersécurité, PME, Bruxelles, Belgique, Delta Tech, NAS, Finance, Applications mobiles">
    <meta name="author" content="Delta Tech">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Delta Tech - Solutions IT pour PME">
    <meta property="og:description"
        content="Transformation digitale et solutions informatiques innovantes pour votre entreprise">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.deltatechgroup.be">
    <link rel="canonical" href="https://www.deltatechgroup.be">
    <title>Delta Tech - Solutions IT Innovantes pour PME | Bruxelles, Belgique</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --metal-silver: #C0C0C0;
            --metal-platinum: #E5E4E2;
            --metal-titanium: #878681;
            --metal-chrome: #ABB2B9;
            --metal-steel: #5D6D7E;
            --metal-dark: #2C3E50;
            --accent-cyan: #00D9FF;
            --accent-electric: #00FFF0;
        }

        body {
            font-family: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
            line-height: 1.6;
            color: #2C3E50;
            overflow-x: hidden;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: linear-gradient(135deg, rgba(192, 192, 192, 0.1) 0%, rgba(43, 62, 80, 0.15) 100%);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            z-index: 1000;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border-bottom: 1px solid rgba(0, 217, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 217, 255, 0.1);
        }

        header.scrolled {
            background: linear-gradient(135deg, rgba(192, 192, 192, 0.15) 0%, rgba(43, 62, 80, 0.2) 100%);
            box-shadow: 0 8px 32px rgba(0, 217, 255, 0.2);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 0;
        }

        .logo {
            font-size: 2rem;
            font-weight: 900;
            background: linear-gradient(135deg, var(--metal-platinum) 0%, var(--accent-cyan) 50%, var(--accent-electric) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            text-shadow: 0 0 30px rgba(0, 217, 255, 0.5);
            letter-spacing: 2px;
            position: relative;
        }

        .logo::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-cyan), transparent);
            animation: glow 2s ease-in-out infinite;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 3rem;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--metal-platinum);
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 1px;
        }

        .nav-links a:hover {
            color: var(--accent-cyan);
            text-shadow: 0 0 20px rgba(0, 217, 255, 0.8);
        }

        .nav-links a::before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(90deg, var(--accent-cyan), var(--accent-electric));
            transition: width 0.3s ease;
            box-shadow: 0 0 10px var(--accent-cyan);
        }

        .nav-links a:hover::before {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 50%, #16213e 100%);
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 50%, rgba(0, 217, 255, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(0, 255, 240, 0.15) 0%, transparent 50%),
                linear-gradient(135deg, transparent 0%, rgba(192, 192, 192, 0.05) 100%);
            animation: pulse 8s ease-in-out infinite;
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                linear-gradient(rgba(0, 217, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 217, 255, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: grid-move 20s linear infinite;
        }

        @keyframes grid-move {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(50px);
            }
        }

        .hero-content {
            color: white;
            text-align: center;
            z-index: 2;
            position: relative;
            animation: fadeInUp 1.2s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hero h1 {
            font-size: 5.5rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--metal-platinum) 0%, var(--accent-cyan) 50%, var(--accent-electric) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 900;
            letter-spacing: 3px;
            text-transform: uppercase;
            filter: drop-shadow(0 0 40px rgba(0, 217, 255, 0.5));
        }

        .hero p {
            font-size: 1.8rem;
            margin-bottom: 3rem;
            color: var(--metal-chrome);
            font-weight: 300;
            letter-spacing: 2px;
        }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .cta-button {
            display: inline-block;
            padding: 18px 45px;
            background: linear-gradient(135deg, rgba(192, 192, 192, 0.1) 0%, rgba(0, 217, 255, 0.2) 100%);
            color: var(--accent-cyan);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 2px solid rgba(0, 217, 255, 0.5);
            backdrop-filter: blur(10px);
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: radial-gradient(circle, rgba(0, 217, 255, 0.3) 0%, transparent 70%);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
            border-radius: 50%;
        }

        .cta-button:hover::before {
            width: 300px;
            height: 300px;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 40px rgba(0, 217, 255, 0.4);
            border-color: var(--accent-cyan);
            color: white;
        }

        .cta-button.express {
            background: linear-gradient(135deg, rgba(240, 147, 251, 0.15) 0%, rgba(245, 87, 108, 0.2) 100%);
            border-color: rgba(245, 87, 108, 0.5);
            color: #f5576c;
        }

        .cta-button.express:hover {
            box-shadow: 0 10px 40px rgba(245, 87, 108, 0.4);
            border-color: #f5576c;
        }

        /* Services Section */
        .services {
            padding: 120px 0;
            background: linear-gradient(135deg, #0f0f1e 0%, #1a1a2e 100%);
            position: relative;
        }

        .section-title {
            text-align: center;
            font-size: 3.5rem;
            margin-bottom: 4rem;
            background: linear-gradient(135deg, var(--metal-platinum) 0%, var(--accent-cyan) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 900;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2.5rem;
        }

        .service-card {
            background: linear-gradient(135deg, rgba(192, 192, 192, 0.05) 0%, rgba(43, 62, 80, 0.1) 100%);
            padding: 3rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(0, 217, 255, 0.2);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-cyan), var(--accent-electric));
            box-shadow: 0 0 20px var(--accent-cyan);
        }

        .service-card::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(0, 217, 255, 0.1) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.4s;
        }

        .service-card:hover::after {
            opacity: 1;
        }

        .service-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 60px rgba(0, 217, 255, 0.3);
            border-color: var(--accent-cyan);
        }

        .service-icon {
            font-size: 4rem;
            background: linear-gradient(135deg, var(--accent-cyan), var(--accent-electric));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 0 20px rgba(0, 217, 255, 0.5));
        }

        .service-card h3 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            color: var(--metal-platinum);
            font-weight: 700;
            letter-spacing: 1px;
        }

        .service-card p {
            color: var(--metal-chrome);
            line-height: 1.8;
            font-size: 1.05rem;
        }

        /* About Section */
        .about {
            padding: 120px 0;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            position: relative;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: center;
        }

        .about-text h2 {
            font-size: 3rem;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, var(--metal-platinum) 0%, var(--accent-cyan) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 900;
            letter-spacing: 1px;
        }

        .about-text p {
            font-size: 1.15rem;
            color: var(--metal-chrome);
            margin-bottom: 1.5rem;
            line-height: 1.9;
        }

        .about-features {
            list-style: none;
            margin-top: 2rem;
        }

        .about-features li {
            padding: 1rem 0;
            position: relative;
            padding-left: 3rem;
            color: var(--metal-platinum);
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .about-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--accent-cyan);
            font-weight: bold;
            font-size: 1.5rem;
            text-shadow: 0 0 10px var(--accent-cyan);
        }

        .about-features li:hover {
            transform: translateX(10px);
            color: var(--accent-cyan);
        }

        .about-visual {
            text-align: center;
            font-size: 12rem;
            background: linear-gradient(135deg, var(--accent-cyan), var(--accent-electric));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: drop-shadow(0 0 40px rgba(0, 217, 255, 0.5));
            animation: float 6s ease-in-out infinite;
        }

        /* Contact Section */
        .contact {
            padding: 120px 0;
            background: linear-gradient(135deg, #0f0f1e 0%, #1a1a2e 100%);
            position: relative;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 5rem;
            align-items: start;
        }

        .contact-info h2 {
            font-size: 3rem;
            margin-bottom: 2rem;
            background: linear-gradient(135deg, var(--metal-platinum) 0%, var(--accent-cyan) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 900;
        }

        .contact-info p {
            font-size: 1.15rem;
            margin-bottom: 2rem;
            color: var(--metal-chrome);
            line-height: 1.9;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            color: var(--metal-platinum);
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            transform: translateX(10px);
            color: var(--accent-cyan);
        }

        .contact-item i {
            font-size: 1.5rem;
            margin-right: 1rem;
            width: 30px;
            color: var(--accent-cyan);
            text-shadow: 0 0 10px var(--accent-cyan);
        }

        .contact-form {
            background: linear-gradient(135deg, rgba(192, 192, 192, 0.05) 0%, rgba(43, 62, 80, 0.1) 100%);
            padding: 3rem;
            border-radius: 20px;
            backdrop-filter: blur(20px);
            border: 1px solid rgba(0, 217, 255, 0.2);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.7rem;
            font-weight: 600;
            color: var(--metal-platinum);
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 0.85rem;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid rgba(0, 217, 255, 0.3);
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.3);
            font-size: 1rem;
            transition: all 0.3s ease;
            color: var(--metal-platinum);
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--accent-cyan);
            box-shadow: 0 0 20px rgba(0, 217, 255, 0.3);
            background: rgba(0, 0, 0, 0.4);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, rgba(0, 217, 255, 0.2) 0%, rgba(0, 255, 240, 0.2) 100%);
            color: var(--accent-cyan);
            border: 2px solid rgba(0, 217, 255, 0.5);
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.4s ease;
            backdrop-filter: blur(10px);
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .submit-btn:hover {
            background: linear-gradient(135deg, rgba(0, 217, 255, 0.3) 0%, rgba(0, 255, 240, 0.3) 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 40px rgba(0, 217, 255, 0.4);
            color: white;
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
            padding: 80px 0 30px;
            color: var(--metal-chrome);
            border-top: 1px solid rgba(0, 217, 255, 0.2);
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 50px;
            margin-bottom: 50px;
        }

        .footer-section h3 {
            font-size: 1.4rem;
            margin-bottom: 25px;
            color: var(--accent-cyan);
            position: relative;
            padding-bottom: 15px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-cyan), transparent);
            box-shadow: 0 0 10px var(--accent-cyan);
        }

        .footer-section ul li a {
            color: var(--metal-chrome);
            transition: all 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: var(--accent-cyan);
            transform: translateX(5px);
            text-shadow: 0 0 10px rgba(0, 217, 255, 0.5);
        }

        footer>.container>p {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(0, 217, 255, 0.2);
            color: var(--metal-chrome);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(60px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes glow {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 1;
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 3rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .about-content,
            .contact-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .section-title {
                font-size: 2.5rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Floating particles */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: var(--accent-cyan);
            border-radius: 50%;
            box-shadow: 0 0 10px var(--accent-cyan);
            animation: particle-float 15s linear infinite;
        }

        @keyframes particle-float {
            0% {
                transform: translateY(100vh) translateX(0);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <header id="header">
        <nav class="container">
            <a href="#" class="logo">DELTA TECH</a>
            <ul class="nav-links">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#apropos">À propos</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{ route('blog.index') }}" class="cta-button express"
                        style="padding: 10px 25px; font-size: 0.9rem;"><i class="fas fa-truck"></i> Express</a></li>
            </ul>
        </nav>
    </header>

    <section id="accueil" class="hero">
        <div class="particles" id="particles"></div>
        <div class="container">
            <div class="hero-content">
                <h1>DELTA TECH</h1>
                <p>Solutions IT innovantes pour les PME</p>
                <div class="hero-buttons">
                    <a href="#contact" class="cta-button">Contactez-nous</a>
                    <a href="{{ route('blog.index') }}" class="cta-button express"><i class="fas fa-truck"></i> Delta
                        Express</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title fade-in">Nos Services</h2>
            <div class="services-grid">
                <article class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Développement Web</h3>
                    <p>Création de sites web modernes et d'applications sur mesure pour votre entreprise. Solutions
                        responsive et optimisées pour tous les appareils.</p>
                </article>
                <article class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Infrastructure IT</h3>
                    <p>Mise en place et maintenance de votre infrastructure informatique. Serveurs, réseaux, sécurité et
                        sauvegarde de données.</p>
                </article>
                <article class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Solutions Cloud</h3>
                    <p>Migration vers le cloud, hébergement sécurisé et solutions de stockage pour optimiser votre
                        productivité et réduire vos coûts.</p>
                </article>
                <article class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Cybersécurité</h3>
                    <p>Protection de vos données et systèmes contre les cybermenaces. Audit de sécurité, formation et
                        mise en place de solutions de protection.</p>
                </article>
                <article class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Support Technique</h3>
                    <p>Assistance technique 24/7, maintenance préventive et support utilisateur pour assurer la
                        continuité de votre activité.</p>
                </article>
                <article class="service-card fade-in">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Consulting IT</h3>
                    <p>Conseil en stratégie informatique, audit de vos systèmes existants et recommandations pour
                        optimiser votre infrastructure.</p>
                </article>
            </div>
        </div>
    </section>

    <section id="apropos" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text fade-in">
                    <h2>À propos de Delta Tech</h2>
                    <p>Delta Tech est une entreprise spécialisée dans les solutions informatiques pour les PME. Forte de
                        plusieurs années d'expérience, notre équipe d'experts vous accompagne dans votre transformation
                        digitale.</p>
                    <p>Nous croyons que chaque entreprise, quelle que soit sa taille, mérite d'avoir accès aux
                        meilleures technologies pour optimiser ses performances et rester compétitive.</p>
                    <ul class="about-features">
                        <li>Équipe d'experts certifiés</li>
                        <li>Solutions sur mesure</li>
                        <li>Support technique 24/7</li>
                        <li>Accompagnement personnalisé</li>
                        <li>Technologies de pointe</li>
                        <li>Rapport qualité-prix optimal</li>
                    </ul>
                </div>
                <div class="about-visual fade-in">
                    <i class="fas fa-users-cog"></i>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-info fade-in">
                    <h2>Contactez-nous</h2>
                    <p>Prêt à transformer votre infrastructure IT ? Notre équipe d'experts est là pour vous accompagner
                        dans tous vos projets informatiques.</p>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@deltatechgroup.be</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+32 (0)497 22 70 33</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Avenue de la liberté 175, 1080 Molenbeek-Saint-Jean, Belgique</span>
                    </div>
                </div>
                <form class="contact-form fade-in" action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom complet</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Entreprise</label>
                        <input type="text" id="company" name="company">
                    </div>
                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required placeholder="Décrivez votre projet ou vos besoins..."></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Envoyer le message</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Delta Tech</h3>
                    <p>Solutions IT innovantes pour les PME. Nous accompagnons votre transformation digitale avec
                        expertise et innovation.</p>
                </div>
                <div class="footer-section">
                    <h3>Nos Services</h3>
                    <ul>
                        <li><a href="#services">Développement Web</a></li>
                        <li><a href="#services">Infrastructure IT</a></li>
                        <li><a href="#services">Solutions Cloud</a></li>
                        <li><a href="#services">Cybersécurité</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Liens Rapides</h3>
                    <ul>
                        <li><a href="{{ route('blog.index') }}">Delta Express</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#apropos">À propos</a></li>
                        <li><a href="#services">Services</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p><i class="fas fa-phone"></i> +32 (0)497 22 70 33</p>
                    <p><i class="fas fa-envelope"></i> info@deltatechgroup.be</p>
                    <p><i class="fas fa-map-marker-alt"></i> Avenue de la liberté 175, 1080 Bruxelles</p>
                </div>
            </div>
            <p>&copy; 2025 Delta Tech. Tous droits réservés.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Fade in animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Create floating particles
        const particlesContainer = document.getElementById('particles');
        for (let i = 0; i < 50; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
            particlesContainer.appendChild(particle);
        }
    </script>
</body>

</html>
