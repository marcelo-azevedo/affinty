<?
add_theme_support( 'post-thumbnails' ); 
register_nav_menu( 'main', 'Menu Principal' );
register_nav_menu( 'bar', 'Menu Barra de Ícones' );
register_nav_menu( 'footer', 'Menu do Rodapé' );
register_sidebar(array(
  'name'=>'Imagem do Rodapé',
  'id'=>'footerimg',
  'before_widget'=>'',
  'after_widget'=>'',
));
register_sidebar(array(
  'name'=>'Endereço do Rodapé',
  'id'=>'footeraddress',
  'before_widget'=>'<h4>',
  'after_widget'=>'</h4>',
));
register_sidebar(array(
  'name'=>'Destaque Principal da Home',
  'id'=>'homearea',
  'before_widget'=>'',
  'after_widget'=>'',
));

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'cliente',
		array(
			'labels' => array(
				'name' => __( 'Clientes' ),
				'singular_name' => __( 'Cliente' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}

