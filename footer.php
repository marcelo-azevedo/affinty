            
            <footer id="footer">
                <div class="center">
		    <?dynamic_sidebar('footerimg')?>
                    <nav id="footer1">
                        <ul>
                            <li class="idioma">Português</li>
                            <li>English</li>
                            <li>Español</li>
                        </ul>
                    </nav> <!-- nav Footer1 -->
		    <?wp_nav_menu(array(
		      'theme_location'=>'main',
		      'container'=>'nav',
		      'container_id'=>'footer2',
		    ))?>
		    <?dynamic_sidebar('footeraddress')?>
                </div> <!-- class Center -->
            </footer>
        </div>

	<?wp_footer()?>
    </body>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>
