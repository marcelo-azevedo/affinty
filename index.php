<?get_header();the_post()?>
            <section id="quem-somos">
                <h1><?the_title()?></h1>
                <nav id="breadcrumb">
                    <ul>
                        <li><a href="<?bloginfo('url')?>">Home</a></li>
                        <li><?the_title()?></li>
                    </ul>
                </nav>
                <article id="quem-somos-cont">
                    <?the_content()?>
                </article>
                
            </section>
<?get_footer()?>            
