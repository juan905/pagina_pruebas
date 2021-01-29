<footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre<span>GdlWebcamp</span></h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil, qui magnam totam cumque sapiente cupiditate asperiores ab! Minus sed saepe deleniti enim in aperiam iste, placeat alias adipisci harum dolor.</p>
            </div>

            <div class="ultimos-tweets">
                <h3>Ultimos<span>Tweets</span></h3>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque possimus sequi voluptatum impedit doloribus ducimus, porro laboriosam deleniti quia suscipit iusto cum tenetur consequatur modi fugiat maxime culpa accusamus ad.</li>

                    <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius laudantium aliquam asperiores, distinctio officia vitae alias fuga mollitia magni ratione qui totam inventore ad eligendi! Minus sit quisquam fugiat cumque.</li>

                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit minus et consectetur! Ipsum nostrum minima recusandae, adipisci tempora quam eligendi maiores, ipsam voluptas iure nihil, numquam obcaecati consequatur. Ipsa, repellendus?</li>
                </ul>
            </div>

            <div class="menu">
                <h3>Redes<span>Sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest-square"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        </div>
    </footer>

    <p class="copyright">
        Todos Los Derechos Reservados 2020. Creado por Juan David Vargas
    </p>




    <script src="js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <?php
       $archivo = basename($_SERVER['PHP_SELF']);
       $pagina = str_replace(".php", "", $archivo);
       if ($pagina == "invitados" || $pagina == "index") {
           echo '<script src="js/jquery.colorbox-min.js"></script>';
       } elseif($pagina == 'conferencia'){
           echo '<script src="js/lightbox.js"></script>';
       }
    ?>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('set', 'transport', 'beacon');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>