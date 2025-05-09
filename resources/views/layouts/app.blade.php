<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | MisJueces</title>
    <!-- TailwindCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.tailwindcss.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- Estilos personalizados -->
    <link href="{{ asset('styles/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @yield('content')

    <script>
        $(document).ready(function() {
            $('.data-table').DataTable(); // Configuración básica de DataTables
        });
    </script>
</body>
</html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name'))</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Sistema de diseño mejorado */
        :root {
            --primary-teal: #2a9d8f;
            --deep-teal: #264653;
            --light-teal: #e9f5ef;
            --glass-white: rgba(255, 255, 255, 0.85);
            --glass-border: rgba(255, 255, 255, 0.3);
            --glass-shadow: 0 8px 32px rgba(31, 38, 135, 0.1);
            --text-dark: #2b2d42;
            --text-light: #f8f9fa;

            --h1-size: 3rem;
            --h2-size: 2.25rem;
            --h3-size: 1.75rem;
            --body-size: 1.1rem;
            --caption-size: 0.9rem;

            --border-radius: 16px;
            --spacing-unit: 8px;
        }

        /* Reset y estilos base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--text-dark);
            background: linear-gradient(135deg, var(--light-teal) 0%, #ffffff 100%);
            line-height: 1.7;
            overflow-x: hidden;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            line-height: 1.3;
        }

        /* Header Navigation */
        .header {
            background: var(--deep-teal);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
        }

        .nav-item {
            position: relative;
            margin-left: 1.5rem;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 0;
            min-width: 200px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1001;
        }

        .dropdown-item {
            display: block;
            padding: 0.5rem 1rem;
            color: var(--text-dark);
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .dropdown-item:hover {
            background: var(--light-teal);
            color: var(--primary-teal);
        }

        .nav-item:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
        }

        /* Utilidades */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 var(--spacing-unit);
        }

        .section {
            padding: 6rem 0;
            position: relative;
        }

        .glass-card {
            background: var(--glass-white);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            border-radius: var(--border-radius);
            box-shadow: var(--glass-shadow);
            padding: 2.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(31, 38, 135, 0.15);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            position: relative;
            overflow: hidden;
            z-index: 1;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--primary-teal);
            color: white;
            box-shadow: 0 4px 15px rgba(42, 157, 143, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(42, 157, 143, 0.4);
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, var(--primary-teal) 0%, #34a0a4 100%);
            z-index: -1;
            transition: opacity 0.4s ease;
            opacity: 0;
        }

        .btn-primary:hover::after {
            opacity: 1;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--primary-teal);
            margin: 1.5rem auto 0;
            border-radius: 2px;
        }

        /* Hero Section - Rediseñada */
        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(233, 245, 239, 0.9) 0%, rgba(255, 255, 255, 0.7) 100%);
            margin-top: 70px; /* Para compensar el header fijo */
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 200%;
            background: radial-gradient(circle, rgba(42, 157, 143, 0.08) 0%, transparent 70%);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            padding: 3rem 2rem;
        }

        .hero h1 {
            font-size: var(--h1-size);
            color: var(--deep-teal);
            margin-bottom: 1.5rem;
            letter-spacing: -0.5px;
        }

        .hero .eslogan {
            font-size: 1.4rem;
            font-weight: 400;
            color: var(--text-dark);
            margin-bottom: 2.5rem;
            opacity: 0.9;
        }

        .hero .descripcion {
            font-size: var(--body-size);
            max-width: 700px;
            margin: 0 auto 3rem;
            opacity: 0.85;
            line-height: 1.8;
        }

        /* Sección Beneficios - Estilo Premium */
        .benefits {
            position: relative;
        }

        .benefits::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="%232a9d8f" opacity="0.03" d="M0,0 L100,0 L100,100 Q50,80 0,100 L0,0 Z"></path></svg>');
            background-size: 100% auto;
            background-repeat: no-repeat;
            background-position: bottom center;
            z-index: -1;
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .benefit-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 2.5rem 2rem;
        }

        .benefit-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary-teal) 0%, #34a0a4 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            color: white;
            font-size: 1.8rem;
            box-shadow: 0 10px 20px rgba(42, 157, 143, 0.2);
        }

        .benefit-card h3 {
            font-size: var(--h3-size);
            margin-bottom: 1rem;
            color: var(--deep-teal);
        }

        /* Sección Funcionamiento */
        .how-it-works {
            background: linear-gradient(to bottom, #ffffff 0%, var(--light-teal) 100%);
        }

        .steps-container {
            position: relative;
        }

        .steps-line {
            position: absolute;
            top: 120px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, transparent 0%, var(--primary-teal) 50%, transparent 100%);
            z-index: 1;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            position: relative;
            z-index: 2;
        }

        .step-card {
            text-align: center;
            position: relative;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-teal);
            border: 2px solid var(--primary-teal);
            box-shadow: 0 5px 15px rgba(42, 157, 143, 0.2);
        }

        /* About Us Section */
        .about-us {
            background: linear-gradient(135deg, var(--deep-teal) 0%, #1e3a5f 100%);
            color: var(--text-light);
        }

        .about-us .section-title {
            color: white;
        }

        .about-us .section-title::after {
            background: var(--primary-teal);
        }

        .about-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        /* Privacy Section */
        .privacy {
            background: var(--light-teal);
        }

        .privacy-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        /* Footer */
        footer {
            background: var(--deep-teal);
            color: var(--text-light);
            padding: 4rem 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: white;
        }

        .footer-links h3 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            color: var(--primary-teal);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary-teal);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-icons a {
            color: white;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--primary-teal);
        }

        /* Efectos y animaciones */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 768px) {
            :root {
                --h1-size: 2.5rem;
                --h2-size: 2rem;
                --h3-size: 1.5rem;
            }

            .section {
                padding: 4rem 0;
            }

            .hero {
                min-height: auto;
                padding: 6rem 0;
            }

            .steps-line {
                display: none;
            }

            /* Navigation responsive */
            .nav-menu {
                display: none;
            }
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <!-- Header Navigation -->
    @include('partials.navbar')
    <!-- Footer -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo">misjueces.mx</div>
                    <p>Plataforma del pueblo para el pueblo dedicada a la democratización del Poder Judicial en México.</p>
                </div>

                <div class="footer-links">
                    <h3>Navegación</h3>
                    <ul>
                        <li><a href="acceso.html">Ingreso</a></li>
                        <li><a href="explorador.html">Exploración</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h3>Legales</h3>
                    <ul>
                        <li><a href="#terminos">Términos y condiciones</a></li>
                        <li><a href="#privacidad">Política de privacidad</a></li>
                        <li><a href="#cookies">Política de cookies</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h3>Contacto</h3>
                    <ul>
                        <li><a href="mailto:contacto@misjueces.mx">contacto@misjueces.mx</a></li>
                        <li><a href="tel:+525555555555">+52 55 5555 5555</a></li>
                        <li>
                            <div class="social-icons">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2023 misjueces.mx - Todos los derechos reservados</p>
            </div>
        </div>
    </footer>
</body>
</html>
