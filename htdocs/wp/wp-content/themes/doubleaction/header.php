<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="/wp/wp-content/twentyfourteen/style.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script>
$( document ).ready(function() {

$('.navlink').hover( 
  function() {
    $(this)
      .css('color','white')
      .animate({'color': '#f5b830', 'margin-top': '-15px', 'padding-bottom': '15px'}, 150);
  },
  function() {
    $(this)
      .animate({'color': 'white', 'margin-top': '0px', 'padding-bottom': '0px'}, 150);
  }
);

$('a').hover( 
  function() {
	if ( $( this ).hasClass( "blogtitle" ) || $( this ).hasClass( "navlink" ) || $( this ).hasClass( "whitelink" ) )
		return;

    $(this)
      .css('color','#b67e00')
      .animate({'color': '#ffb000'}, 150);
  },
  function() {
	if ( $( this ).hasClass( "blogtitle" ) || $( this ).hasClass( "navlink" ) || $( this ).hasClass( "whitelink" ) )
		return;

    $(this)
      .animate({'color': '#b67e00'}, 150);
  }
);

$('.blogtitle').hover( 
  function() {
    $(this)
      .css('color','#f5b830')
      .animate({'color': 'white'}, 150);
  },
  function() {
    $(this)
      .animate({'color': '#f5b830'}, 150);
  }
);

$('.whitelink').hover( 
  function() {
    $(this)
      .css('color','white')
      .animate({'color': '#f5b830'}, 150);
  },
  function() {
    $(this)
      .animate({'color': 'white'}, 150);
  }
);

});
</script>

<div id="header" role="banner">
        <a href="/"><div id="logo"></div></a>
        <div id="nav">
                <a class="navlink" href="/blog" >NEWS</a>
                <?/*<a class="navlink" href="/game">GAME</a>
                <a class="navlink" href="/workshop">WORKSHOP</a>*/?>
                <a class="navlink" href="http://forums.doubleactiongame.com">COMMUNITY</a>
        </div>
</div>

<div id="page">




