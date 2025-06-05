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