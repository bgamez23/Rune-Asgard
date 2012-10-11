<?php if(!defined('EFFICIENT_ROOT')) exit; ?>
<!DOCTYPE html 
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

  <head>
  
    <meta content="text/x-html; charset=<?php echo EFFICIENT_CHARSET; ?>" http-equiv="Content-Type" />
    <meta name="title" content="Efficient Ragnarok Online Database System" />
    <meta content="ragnarok online database, poring, mmorpg, item, monster, mob, field, mvp, world map" name="keywords" />
    <meta content="A Ragnarok Online database for view mobs, fields and items. Features advanced search functions for both monsters and items." name="description" />
    <meta content="OutOfCuriosity" name="author" />
    <meta name="designer" content="OutOfCuriosity" />

    <link rel="shortcut icon" href="favicon.png" type="image/png" />    
    <link rel="stylesheet" href="layout/style.css" type="text/css" />

    <script type="text/javascript">
      var ajax_action = "<?php echo message('ajax_action'); ?>";
      var ajax_add_cur = "<?php echo message('ajax_add_cur'); ?>";
      var ajax_new_src = "<?php echo message('ajax_new_src'); ?>";
      var ajax_close_d = "<?php echo message('ajax_close_d'); ?>";
      var ajax_close_w = "<?php echo message('ajax_close_w'); ?>";
      var ajax_options = "<?php echo message('ajax_options'); ?>";
    </script>
    
    <script type="text/javascript" src="efficient.js">

    </script>

    <title><?php echo PAGE_TITLE; ?></title>
    
    <!--[if IE]>
    <style type="text/css">
    #smokescreen {
    filter: alpha(opacity = 30);
    background: #000000;
    }
    </style>
    <![endif]-->
    
  </head>

  <body style="background-image: url('images/back/back_<?php echo VIEW_ID; ?>.png')">

