<? get_header(); the_post(); ?>

            <section id="banner">
                <div class="center">
		    <?dynamic_sidebar('homearea')?>
                </div> <!-- class Center -->
            </section> <!-- section Banner -->
            <div class="center">
                <section id="sobre">
                    <h1><?the_title()?></h1>
                    <article>
		      <?the_post_thumbnail()?>
		      <?the_content()?>
                    </article>
                </section> <!-- section Sobre -->
                <section id="noticias">
                    <h1>Últimas Notícias</h1>
		    <?$noticias=new WP_Query('post_type=post&posts_per_page=5');?>
		    <?while($noticias->have_posts()):$noticias->the_post();?>
                    <article>
                        <a href="<?the_permalink()?>">
			    <?the_post_thumbnail()?>
                            <h2><?the_title()?></h2>
                            <span>Publicado em: <? the_time('d \d\e F \d\e Y') ?></span>
                        </a>
                    </article>
		    <?endwhile?>
                </section> <!-- section Notícias -->
                <section id="clientes">
                    <h1>Nossos Clientes</h1>
                    <button id="seta-dir"></button>
                    <button id="seta-esq"></button>
                    <ul>
		    <?$clientes=new WP_Query('post_type=cliente');?>
		    <?while($clientes->have_posts()):$clientes->the_post();?>
                        <li><?the_content()?></li>
		    <?endwhile?>
                    </ul>
                </section> <!-- section Clientes -->
                <section id="associados">
                    <h1>Somos Associados</h1>
                    <img src="img/associados.jpg" alt="associados">
                </section> <!-- section Associados -->
            </div> <!-- class Center -->
<? get_footer() ?>            
