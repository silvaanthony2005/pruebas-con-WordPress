    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Sobre nosotros</h4>
                <p>Bienvenido a Mundo Animal, tu sitio para aprender sobre el reino animal.</p>
            </div>
            <div class="footer-section">
                <h4>Enlaces útiles</h4>
                <ul>
                    <li><a href="<?php echo home_url(); ?>">Inicio</a></li>
                    <li><a href="<?php echo home_url('/contacto'); ?>">Contacto</a></li>
                    <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Síguenos</h4>
                <ul class="footer-social">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Mi Primer tema de WordPress. Todos los derechos reservados.</p>
        </div>
    </footer>
</main>
</body>
<?php wp_footer(); ?>
</html>