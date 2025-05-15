<?php $template_uri = get_bloginfo('template_url'); ?>

    <!-- Footer -->
    <footer id="contacto">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>ISMEM</h3>
                    <p>Instituto Superior María Elena Moyano - Formando profesionales técnicos desde 1995.</p>
                    <div class="social-links">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Enlaces Rápidos</h3>
                    <a href="index.html">Inicio</a>
                    <a href="carreras.html">Carreras</a>
                    <a href="talleres.html">Talleres</a>
                    <a href="admision.html">Admisión</a>
                    <a href="contacto.html">Contacto</a>
                </div>
                <div class="footer-column">
                    <h3>Contacto</h3>
                    <p><i class="fas fa-phone"></i> (01) 287-7695</p>
                    <p><i class="fas fa-mobile-alt"></i> 924 488 433</p>
                    <p><i class="fas fa-envelope"></i> secretariacademicaismem@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Av.Cesar Vallejo,Sector 2 Grupo 15, Villa El Salvador</p>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Instituto Superior María Elena Moyano - Todos los derechos reservados</p>
                <p>Licenciado por el MINEDU -OF-01220-2021-MINEDU</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling para enlaces internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Marcar el enlace activo en el menú
        const currentPage = window.location.pathname.split('/').pop() || 'index.html';
        document.querySelectorAll('nav a').forEach(link => {
            if(link.getAttribute('href') === currentPage) {
                link.classList.add('active');
            }
        });
    </script>
</body>
</html>