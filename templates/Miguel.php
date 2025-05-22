<?php /* Template Name: Miguel Abad */
get_header();
$template_uri = get_bloginfo('template_url'); ?>

<?php if(get_field('ver_1') == true) { ?>
    <!-- Hero Banner -->
    <section class="hero" id="inicio" style="background-image: url('<?php the_field('imagen_del_banner') ?>');">
        <div class="hero-content">
            <h2><?php the_field('titulo_banner') ?></h2>
            <p><?php the_field('texto_acompañante') ?></p>
            <a href="<?php the_field('boton_1') ?>" class="btn">¡Inscríbete ahora!</a>

        </div>
    </section>
<?php } ?>
<?php if(get_field('ver_02') == true) { ?>

    <!-- Sección Carreras -->
    <section class="carreras" id="carreras">
        <div class="container">
            <div class="section-title">
                <h2>Nuestras Carreras Profesionales</h2>
                <p>Programas académicos licenciados por el MINEDU</p>
            </div>
            
            <div class="carreras-grid">
                <!-- Carrera 1 -->
                <div class="carrera-card">
                    <div class="carrera-img">
                        <img src="img/desa.jpg" alt="Desarrollo de Sistemas de Información">
                    </div>
                    <div class="carrera-content">
                        <h3>Desarrollo de Sistemas de Información</h3>
                        <p>Formamos profesionales capaces de analizar, diseñar, desarrollar e implementar sistemas informáticos para optimizar procesos en las organizaciones. Aprenderás programación, bases de datos, desarrollo web y móvil, redes y seguridad informática.</p>
                        
                        <div class="carrera-meta">
                            <div class="meta-item">
                                <i class="fas fa-clock"></i>
                                <span>Duración: 2 años (6 ciclos académicos)</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-certificate"></i>
                                <span>Título a nombre de la Nación</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-briefcase"></i>
                                <span>Alta demanda laboral</span>
                            </div>
                        </div>
                        <a href="admi.html" class="btn">Ver detalles</a>
                    </div>
                </div>
                
                <!-- Carrera 2 -->
                <div class="carrera-card">
                    <div class="carrera-img">
                        <img src="img/con.jpg" alt="Contabilidad">
                    </div>
                    <div class="carrera-content">
                        <h3>Contabilidad</h3>
                        <p>Formamos profesionales capaces de gestionar los procesos contables y financieros de las organizaciones. Aprenderás contabilidad general, costos, tributación, auditoría, finanzas y gestión empresarial con herramientas tecnológicas actualizadas.</p>
                        
                        <div class="carrera-meta">
                            <div class="meta-item">
                                <i class="fas fa-clock"></i>
                                <span>Duración: 2 años (6 ciclos académicos)</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-certificate"></i>
                                <span>Título a nombre de la Nación</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-briefcase"></i>
                                <span>Amplio campo laboral</span>
                            </div>
                        </div>
                           <a href="admi.html" class="btn">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php } ?>
<?php if(get_field('ver_03') == true) { ?>

    <!-- Talleres -->
    <section class="talleres" id="talleres">
        <div class="container">
            <div class="section-title">
                <h2><?php the_field('titulo')?></h2>
                <p><?php the_field('Texto')?></p>
            </div>

            <?php if( have_rows( 'talleres') ) {  ?>
                <div class="talleres-grid">
                <?php while( have_rows( 'talleres') ) { the_row();?>

                    <div class="taller-card">
                        <div class="taller-img">
                            <img src="<?php the_sub_field('imagen')?>" alt="Taller de Ensamblaje">
                        </div>
                        <div class="taller-content">
                            <h3><?php the_sub_field('nombre_taller')?></h3>
                            <p><?php the_sub_field('descripcion')?></p>
                            <a href="<?php the_sub_field('enlace')?>" class="btn">Más información</a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

<?php } ?>
<?php if(get_field('ver_04') == true) { ?>

    <!-- Información -->
    <section class="info" id="quienes-somos">
        <div class="container">
            <div class="info-grid">
                <div class="info-card">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Ubicación</h3>
                    <p>Av. Cesar Vallejo, Sector 2 Grupo 15, al lado de la comisaría de Villa El Salvador, a media cuadra de la municipalidad.</p>
                    <a href="https://maps.app.goo.gl/osCb1AXoDEs6o3Mx6" class="btn" target="_blank">Ver mapa</a>
                </div>
                <div class="info-card">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Licenciamiento</h3>
                    <p>Instituto licenciado por el MINEDU. Oficio N°01220-2021-MINEDU</p>
                    <a href="rd.pdf" class="btn" target="_blank">Ver resolución</a>
                </div>
                <div class="info-card">
                    <i class="fas fa-calendar-alt"></i>
                    <h3>Próximas Admisiones</h3>
                    <p>Inicio de clases: 21 Abril 2025. Inscripciones abiertas. ¡No pierdas esta oportunidad!</p>
                    <a href="admision.html" class="btn">Inscríbete aquí</a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php get_footer(); ?>