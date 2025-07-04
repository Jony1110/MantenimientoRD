<?php
$ocultar_footer = false;
require('../libreria/motor.php');
require_once('../libreria/plantilla.php');

plantilla::aplicar();
if (isset($ocultar_footer) && $ocultar_footer) {
    echo '<style>footer { display: none !important; }</style>';
}
plantilla::navbar();
?>
<!-- Main Content -->
<main>
    <!-- Hero Section -->
    <section class="container">
        <div class="hero">
            <h2>Sobre MantenimientoRD</h2>
            <p>Conoce nuestra misión, visión y el equipo detrás de la plataforma que está revolucionando la gestión de mantenimientos de vehículos, equipos informáticos y herramientas en República Dominicana.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="container">
        <h2 style="text-align: center; margin-bottom: 2rem;">Nuestra Historia</h2>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p>MantenimientoRD nació en 2024 con el objetivo de facilitar el registro, control y seguimiento de mantenimientos en empresas y particulares. Detectamos una necesidad crítica: muchas organizaciones pierden tiempo, dinero y productividad por no llevar un control adecuado de sus activos.</p>
                        <p>Hoy, nuestra plataforma permite a usuarios de todo el país gestionar mantenimientos de vehículos, computadoras, herramientas y otros equipos desde un solo lugar, ayudando a extender su vida útil y mejorar la planificación operativa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission and Vision -->
    <section class="container" style="margin-top: 3rem;">
        <h2 style="text-align: center; margin-bottom: 2rem;">Misión y Visión</h2>
        <div class="row">
            <!-- Misión -->
            <div class="col-md-6-col-sm-12">
                <div class="card">
                    <h3 class="card-title">Misión</h3>
                    <div class="card-body">
                        <p>Ofrecer una solución práctica, moderna y accesible para el registro y control de mantenimientos, ayudando a empresas y personas a optimizar el uso y cuidado de sus equipos y vehículos.</p>
                    </div>
                </div>
            </div>
            <!-- Visión -->
            <div class="col-md-6-col-sm-12">
                <div class="card">
                    <h3 class="card-title">Visión</h3>
                    <div class="card-body">
                        <p>Ser la plataforma de referencia en República Dominicana y el Caribe para la gestión de mantenimiento, reconocida por su innovación, confiabilidad y facilidad de uso.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="container" style="margin-top: 3rem;">
        <h2 style="text-align: center; margin-bottom: 2rem;">Nuestro Equipo</h2>
        <div class="row">
            <!-- Integrante 1 -->
            <div class="col-md-6-col-lg-4-col-sm-12">
                <div class="card">
                    <h3 class="card-title">Jonathan Frías</h3>
                    <div class="card-body">
                        <p><strong>Fundador y CEO</strong></p>
                        <p>Apasionado por la tecnología y la eficiencia operativa. Su visión dio origen a MantenimientoRD.</p>
                    </div>
                </div>
            </div>
            <!-- Integrante 2 -->
            <!-- <div class="col-md-6-col-lg-4-col-sm-12">
                <div class="card">
                    <h3 class="card-title">Pamela García</h3>
                    <div class="card-body">
                        <p><strong>Gerente de Desarrollo</strong></p>
                        <p>Responsable de que la plataforma sea estable, segura y fácil de usar.</p>
                    </div>
                </div>
            </div> -->
            <!-- Integrante 3 -->
            <!-- <div class="col-md-6-col-lg-4-col-sm-12">
                <div class="card">
                    <h3 class="card-title">Luis Méndez</h3>
                    <div class="card-body">
                        <p><strong>Especialista en Mantenimiento</strong></p>
                        <p>Asesora en la estructura técnica del sistema y los procesos de mantenimiento reales.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="container" style="margin-top: 3rem; margin-bottom: 3rem;">
        <div style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color: var(--white); text-align: center; padding: 3rem 1rem; border-radius: var(--radius);">
            <h2 style="margin-bottom: 1rem; font-size: 2rem;">¿Listo para llevar el control de tus mantenimientos?</h2>
            <p style="margin-bottom: 2rem; max-width: 700px; margin-left: auto; margin-right: auto;">Regístrate en MantenimientoRD y empieza a gestionar tus mantenimientos de manera profesional y organizada.</p>
            <a href="Login_y_Registro/registro.php" class="btn btn-secondary btn-lg">Crear Cuenta</a>
        </div>
    </section>
</main>
