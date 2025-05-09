@extends('layouts.app')

@section('title', 'Evaluación de Jueces - JuezMX')

@section('styles')

@endsection

@section('content')
<<!-- Hero Section -->
<section class="hero">
        <div class="hero-content">
            <h1>Conoce y evalúa a las y los aspirantes a Juez</h1>
            <a href="explorador.html" class="btn btn-primary">
                ¡Vota aquí!
                <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
            </a>
        </div>
    </section>

    <!-- Sección Beneficios -->
    <section class="section benefits" id="beneficios">
        <div class="container">
            <div class="section-title">
                <h2>Nuestro Enfoque</h2>
                <p>Conoce cómo contribuimos a la democracia judicial</p>
            </div>
            
            <div class="benefits-grid">
                <div class="glass-card benefit-card floating" style="animation-delay: 0s;">
                    <div class="benefit-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Antes que nada: ¿quiénes son?</h3>
                    <p>El tema primordial de la elección popular de jueces es que ni sabemos quienes son, ni son parte de partidos políticos. ¡Lo primero es conocerlos!</p>
                </div>
                
                <div class="glass-card benefit-card floating" style="animation-delay: 0.2s;">
                    <div class="benefit-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Lo central: Evaluar su desempeño</h3>
                    <p>El objetivo primero de esta pagina es el evaluar a las y los candidatos a jueces mediante un sistema simple del 1 al 10. Que funcione bien y no haya interferencia de bots es nuestra meta.</p>
                </div>
                
                <div class="glass-card benefit-card floating" style="animation-delay: 0.4s;">
                    <div class="benefit-icon">
                        <i class="fas fa-democrat"></i>
                    </div>
                    <h3>Bases sólidas para la democracia</h3>
                    <p>Conociendo el balance de evaluaciones de una persona podemos darnos una idea de la persona que es. Al ser donde compartir nuestras opiniones, el objetivo es que nos sirva como ágora moderna.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Funcionamiento -->
    <section class="section how-it-works" id="funcionamiento">
        <div class="container">
            <div class="section-title">
                <h2>¿Cómo funciona?</h2>
                <p>Participa en la evaluación de aspirantes a jueces</p>
            </div>
            
            <div class="steps-container">
                <div class="steps-line"></div>
                <div class="steps-grid">
                    <div class="glass-card step-card">
                        <div class="step-number"><i class="fas fa-check"></i></div>
                        <h3>Proceso simple</h3>
                        <p>Simplemente vota por las y los candidatos que conozcas para que el resto de personas podamos conocer tu opinión.</p>
                    </div>
                    
                    <div class="glass-card step-card">
                        <div class="step-number"><i class="fas fa-users"></i></div>
                        <h3>Evaluación colectiva</h3>
                        <p>Formémonos una idea entre todas y todos sobre quienes queremos que ocupen el puesto de Juez en nuestro país.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="section about-us" id="conocenos">
        <div class="container">
            <div class="section-title">
                <h2>Conócenos</h2>
                <p>Nuestra misión y visión</p>
            </div>
            
            <div class="about-content">
                <p>Somos estudiantes de la UNAM muy preocupados por la democracia en nuestro país, que hemos decidido tomar acción.</p>
                <p>Creemos firmemente en el poder de las comunidades organizadas para transformar las corruptas realidades estructurales que vivimos. Y entendemos que el primer e imprescindible paso es el libre desarrollo de la discusión pública en torno a los temas de relevancia general, que es, etimológicamente, la política.</p>
                <p>Por eso hemos creado esta plataforma para la evaluación de las personas que ejercen el Poder Judicial de la República, y de quienes aspiran a este.</p>
            </div>
        </div>
    </section>

    <!-- Privacy Section -->
    <section class="section privacy" id="privacidad">
        <div class="container">
            <div class="section-title">
                <h2>Política de Privacidad</h2>
                <p>Tu seguridad y privacidad son importantes</p>
            </div>
            
            <div class="privacy-grid">
                <div class="glass-card">
                    <h3>Términos y condiciones del servicio</h3>
                    <p>Consulta nuestros términos de uso para entender cómo funciona la plataforma.</p>
                </div>
                <div class="glass-card">
                    <h3>Aviso de política de privacidad</h3>
                    <p>Conoce cómo protegemos y utilizamos tus datos personales.</p>
                </div>
                <div class="glass-card">
                    <h3>Aviso de uso de datos personales</h3>
                    <p>Información detallada sobre el tratamiento de datos personales.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contacto">
        <div class="container">
            <div class="section-title">
                <h2>Contacto</h2>
                <p>Estamos aquí para responder tus preguntas</p>
            </div>
            
            <div class="glass-card" style="text-align: center; padding: 3rem;">
                <h3>Para establecer contacto</h3>
                <p>Envía un correo a <a href="mailto:contacto@misjueces.mx">contacto@misjueces.mx</a></p>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
<script>
    // Efecto de aparición suave al hacer scroll
    document.addEventListener('DOMContentLoaded', function() {
        const sections = document.querySelectorAll('section');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, { threshold: 0.1 });
        
        sections.forEach(section => {
            observer.observe(section);
        });
    });
</script>
@endsection