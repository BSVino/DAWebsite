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

<title><?php wp_title('', true, 'right'); ?></title>

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
      .animate({'color': '#f5b830'}, 150);
  },
  function() {
    $(this)
      .animate({'color': 'white'}, 150);
  }
);

$('.menulevel2').hover( 
  function() {
    $(this)
      .css('color','white')
      .animate({'color': '#f5b830', 'padding-left': '20px'}, 150);
  },
  function() {
    $(this)
      .animate({'color': 'white', 'padding-left': '0px'}, 150);
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

$("ul.dropdown li").hover(
	function() {
	    $(this).addClass("hover");
	    $('ul:first', this).css('visibility', 'visible');
	},
	function() {
	    $(this).removeClass("hover");
    	$('ul:first', this).css('visibility', 'hidden');
	}
);


});
</script>

<?
	// This stuff won't stick in the .css, not interested in finding out why.
	$menuitem = 'class="menulevel2 whitelink" style="font-size: 22px; text-align: left; margin: 0px; margin-left: 15px; padding: 0px;"';
?>

<div id="header" role="banner">
        <a href="/"><div id="logo"></div></a>
        <div id="nav">

		    <ul class="dropdown">
		    	<li><a class="menulevel1 whitelink navlink" href="/blog">NEWS</a></li>
		    	<li><a class="menulevel1 whitelink navlink" href="/game">GAME</a>
		    		<ul class="sub_menu">
		    			<li><a href="/game" <? echo $menuitem; ?>>MEDIA</a></li>
		    			<li><a href="http://steamcommunity.com/sharedfiles/filedetails/?id=332224979" <? echo $menuitem; ?>>QUICK PLAY GUIDE</a></li>
		    			<li><a href="http://steamcommunity.com/sharedfiles/filedetails/?id=332255864" <? echo $menuitem; ?>>SERVER SETUP GUIDE</a></li>
		    		</ul>
		    	</li>
                <li><a class="navlink" href="/workshop">WORKSHOP</a>
		    		<ul class="sub_menu">
		    			<li><a href="/coding" <? echo $menuitem; ?>>CODING</a></li>
		    			<li><a href="/mapping" <? echo $menuitem; ?>>MAPPING</a></li>
		    			<li><a href="/modeling" <? echo $menuitem; ?>>MODELING</a></li>
		    		</ul>
		    	</li>
		    	<li><a class="menulevel1 whitelink navlink" href="http://forums.doubleactiongame.com/">COMMUNITY</a>
		    		<ul class="sub_menu">
		    			<li><a href="http://steamcommunity.com/app/317360" <? echo $menuitem; ?>>STEAM GAME HUB</a></li>
		    			<li><a href="http://steamcommunity.com/app/317360/discussions/" <? echo $menuitem; ?>>FORUMS</a></li>
		    		</ul>
		    	</li>
		    </ul>
        </div>
</div>

<div id="page">




