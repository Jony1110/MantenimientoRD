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
            <h2>Gestiona el Mantenimiento de tus Vehículos y Equipos de Forma Eficiente</h2>
            <p>Registra, controla y da seguimiento a los mantenimientos de tus vehículos, computadoras y herramientas. ¡Optimiza el rendimiento de tus activos con nuestra plataforma!</p>
            <a href="Login_y_Registro/registro.php" class="btn btn-secondary btn-lg">Regístrate Ahora</a>
        </div>
    </section>

    <!-- AQUI PONDRE LAS FUNCIONES DE LISTAR MANTENIMIENTOS -->
    <!-- Mantenimientos Destacados -->
    <section class="container" style="margin-top: 3rem;">
        <h2 style="text-align: center; margin-bottom: 2rem;">Mantenimientos Recientes</h2>
        <div class="row">

            <!-- Mantenimiento 1 -->
            <div class="col-md-6-col-lg-4-col-sm-12">
                <div class="card h-100">
                    <div style="font-size: 2rem; color: var(--primary); margin-top: 1rem; text-align: center;">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="maintenance-title">Mantenimiento de Vehículo</h3>
                        <div class="maintenance-details my-2">
                            <div><i class="fas fa-car"></i> Camión de Carga</div>
                            <div><i class="fas fa-calendar-alt"></i> 20/06/2025</div>
                            <div><i class="fas fa-tools"></i> Reparación de Frenos</div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-primary">Frenos</span>
                            <span class="badge bg-primary">Suspensión</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- Mantenimiento 2 -->
            <div class="col-md-6-col-lg-4-col-sm-12">
                <div class="card h-100">
                    <div style="font-size: 2rem; color: var(--primary); margin-top: 1rem; text-align: center;">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="maintenance-title">Mantenimiento de Computadora</h3>
                        <div class="maintenance-details my-2">
                            <div><i class="fas fa-laptop"></i> Computadora Dell</div>
                            <div><i class="fas fa-calendar-alt"></i> 15/06/2025</div>
                            <div><i class="fas fa-tools"></i> Reemplazo de Discos Duros</div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-primary">Hardware</span>
                            <span class="badge bg-primary">Disco Duro</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm">Ver Detalles</a>
                    </div>
                </div>
            </div>

            <!-- Mantenimiento 3 -->
            <div class="col-md-6-col-lg-4-col-sm-12">
                <div class="card h-100">
                    <div style="font-size: 2rem; color: var(--primary); margin-top: 1rem; text-align: center;">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="maintenance-title">Mantenimiento de Herramienta</h3>
                        <div class="maintenance-details my-2">
                            <div><i class="fas fa-hammer"></i> Taladro Eléctrico</div>
                            <div><i class="fas fa-calendar-alt"></i> 18/06/2025</div>
                            <div><i class="fas fa-tools"></i> Reparación de Motor</div>
                        </div>
                        <div class="mb-3">
                            <span class="badge bg-primary">Motor</span>
                            <span class="badge bg-primary">Reparación</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-sm">Ver Detalles</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ¿Cómo Funciona? Section -->
    <section class="container" style="margin-top: 3rem;">
        <h2 style="text-align: center; margin-bottom: 2rem;">¿Cómo Funciona?</h2>

        <div class="row">
            <!-- Paso 1 -->
            <div class="col-md-6 col-lg-4 col-sm-12" style="margin-bottom: 1.5rem;">
                <div class="card" style="text-align: center;">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h3 class="card-title">1. Crea tu Perfil</h3>
                    <div class="card-body">
                        <p>Regístrate y completa tu perfil profesional, incluyendo la información de tus vehículos y equipos.</p>
                    </div>
                </div>
            </div>

            <!-- Paso 2 -->
            <div class="col-md-6 col-lg-4 col-sm-12" style="margin-bottom: 1.5rem;">
                <div class="card" style="text-align: center;">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3 class="card-title">2. Registra los Mantenimientos</h3>
                    <div class="card-body">
                        <p>Registra cada mantenimiento realizado a tus vehículos y equipos, incluyendo detalles y fechas.</p>
                    </div>
                </div>
            </div>

            <!-- Paso 3 -->
            <div class="col-md-6 col-lg-4 col-sm-12" style="margin-bottom: 1.5rem;">
                <div class="card" style="text-align: center;">
                    <div style="font-size: 3rem; color: var(--primary); margin-bottom: 1rem;">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="card-title">3. Realiza un Seguimiento</h3>
                    <div class="card-body">
                        <p>Haz un seguimiento de las fechas próximas y los próximos mantenimientos necesarios para tus activos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Empresas de Mantenimiento -->
    <section class="container" style="margin-top: 3rem;">
        <h2 style="text-align: center; margin-bottom: 2rem;">Empresas de Mantenimiento Destacadas</h2>

        <div class="row">
            <!-- Empresa 1 -->
            <div class="col-md-6 col-lg-3 col-sm-12" style="margin-bottom: 1.5rem;">
                <div class="card" style="text-align: center;">
                    <h3 class="card-title">AutoMantenimiento RD</h3>
                    <div class="card-body">
                        <p>Servicios completos de mantenimiento de vehículos, incluyendo reparaciones y chequeos preventivos.</p>
                    </div>
                    <div class="card-footer">
                        <a href="empresas.html" class="btn btn-outline btn-sm">Ver Perfil</a>
                    </div>
                </div>
            </div>

            <!-- Empresa 2 -->
            <div class="col-md-6 col-lg-3 col-sm-12" style="margin-bottom: 1.5rem;">
                <div class="card" style="text-align: center;">
                    <h3 class="card-title">TechFix RD</h3>
                    <div class="card-body">
                        <p>Reparaciones de equipos informáticos y electrónicos, con atención a detalles y soluciones efectivas.</p>
                    </div>
                    <div class="card-footer">
                        <a href="empresas.html" class="btn btn-outline btn-sm">Ver Perfil</a>
                    </div>
                </div>
            </div>

            <!-- Empresa 3 -->
            <div class="col-md-6 col-lg-3 col-sm-12" style="margin-bottom: 1.5rem;">
                <div class="card" style="text-align: center;">
                    <h3 class="card-title">Herramientas RD</h3>
                    <div class="card-body">
                        <p>Servicios de mantenimiento y reparación de herramientas eléctricas e industriales.</p>
                    </div>
                    <div class="card-footer">
                        <a href="empresas.html" class="btn btn-outline btn-sm">Ver Perfil</a>
                    </div>
                </div>
            </div>

            <!-- Empresa 4 -->
            <div class="col-md-6 col-lg-3 col-sm-12" style="margin-bottom: 1.5rem;">
                <div class="card" style="text-align: center;">
                    <h3 class="card-title">Mecánica RD</h3>
                    <div class="card-body">
                        <p>Expertos en mantenimiento de maquinaria industrial y vehículos comerciales.</p>
                    </div>
                    <div class="card-footer">
                        <a href="empresas.html" class="btn btn-outline btn-sm">Ver Perfil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonios Section -->
    <section class="container" style="margin-top: 3rem;">
        <h2 style="text-align: center; margin-bottom: 2rem;">Testimonios</h2>

        <div class="row">
            <!-- Testimonial 1 -->
            <div class="col-md-6-col-lg-4-col-sm-12">
                <div class="card">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem; text-align: center;">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="card-body">
                        <p style="font-style: italic;">Gracias a esta plataforma, pude mantener un registro organizado de todos los mantenimientos de mi flota de vehículos.</p>
                        <div style="margin-top: 1.5rem;">
                            <strong>Juan Pérez</strong>
                            <div style="color: var(--gray);">Gerente de Flota, Transporte RD</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-md-6-col-lg-4-col-sm-12">
                <div class="card">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem; text-align: center;">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="card-body">
                        <p style="font-style: italic;">Como técnico de computadoras, esta plataforma me ha permitido llevar un mejor control de las reparaciones realizadas.</p>
                        <div style="margin-top: 1.5rem;">
                            <strong>Pedro Rodríguez</strong>
                            <div style="color: var(--gray);">Técnico Informático</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-md-6-col-lg-4-col-sm-12">
                <div class="card">
                    <div style="font-size: 2rem; color: var(--primary); margin-bottom: 1rem; text-align: center;">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="card-body">
                        <p style="font-style: italic;">La plataforma me ha ayudado a gestionar mejor el mantenimiento de herramientas en nuestra empresa de construcción.</p>
                        <div style="margin-top: 1.5rem;">
                            <strong>Ana González</strong>
                            <div style="color: var(--gray);">Directora de Operaciones, Constructora RD</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="container" style="margin-top: 3rem; margin-bottom: 3rem;">
        <div
            style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%); color: var(--white); text-align: center; padding: 3rem 1rem; border-radius: var(--radius);">
            <h2 style="margin-bottom: 1rem; font-size: 2rem;">¿Listo para optimizar el mantenimiento de tus vehículos y equipos?</h2>
            <p style="margin-bottom: 2rem; max-width: 700px; margin-left: auto; margin-right: auto;">Únete a nuestra plataforma y empieza a gestionar, controlar y hacer seguimientos a todos los mantenimientos de tus activos.</p>
            <div>
                <a href="Login_y_Registro/registro.php" class="btn btn-secondary btn-lg" style="margin-right: 1rem;">Crear Cuenta como Técnico o Cliente</a>
            </div>
        </div>
    </section>
</main>
