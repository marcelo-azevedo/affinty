<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?wp_title()?> <?bloginfo('name')?></title>
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?bloginfo('template_directory')?>/css/normalize.css">
        <link rel="stylesheet" href="<?bloginfo('template_directory')?>/css/style.css">
	<?wp_head()?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">Você está usando um browser<strong>Antigo</strong>. Por Favor <a href="http://browsehappy.com/">Atualise seu browser</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">ative o Google Chrome Frame</a> para melhorar a sua experiência!!</p>
        <![endif]-->

        <div id="main">
            <header id="topo">
                <div class="center">
                    <a href="<?bloginfo('url')?>"><div id="logo"></div></a>
                    <nav id="topo1">
                        <ul>
                            <li class="none">Idioma</li>
                            <li class="idioma">Português</li>
                            <li>English</li>
                            <li>Español</li>
                        </ul>
                    </nav> <!-- nav Topo1 -->
		    <?wp_nav_menu(array(
		      'theme_location'=>'main',
		      'container'=>'nav',
		      'container_id'=>'topo2',
		    ))?>
                </div> <!-- class Center -->
            </header> <!-- header Topo -->
            <nav id="menu">
	        <?wp_nav_menu(array(
	          'theme_location'=>'bar',
	          'container_class'=>'center',
	        ))?>
            </nav> <!-- nav Menu -->
            
