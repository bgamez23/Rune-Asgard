<?php if(!defined('EFFICIENT_ROOT')) exit; ?>
    
    <div id="main">
      
      <div>
      
        <!--<div style="float: left; width: 129px; height: 1em; padding: 6px; color: #ffffff;"></div>-->
      
        <div style="text-align: right; padding: 5px 10px 5px 10px; background: #000000; color: #ffffff;">
          <?php 
          
            if(AUTH && isset($_SESSION['user'])) echo $_SESSION['user'] . ', lvl ' . $_SESSION['level'] . ' user';
            echo (AUTH) ? '<a href="?act=dologin" class="loginLink">' . message('nav_logout') . '</a>' : '<a href="?act=login" class="loginLink">' . message('nav_login') . '</a>';
            
          ?>
          <a href="./" style="color: #ffffff; margin-left: 20px;"><?php echo message('nav_register'); ?></a>
          <a href="./" style="color: #ffffff; margin-left: 20px;"><?php echo message('nav_sitemap'); ?></a>
        </div>
      </div>
    
      <?php require((Settings::get('interface', 'groups', GROUP_ID, 'exec') === TRUE) ? 'layout/group_ext/group_' . VIEW_ID . '.inc.php' : 'layout/group_ext/group_0.inc.php'); ?>
    
      <table style="width: 100%;" cellspacing="0" cellpadding="0">
        <tr>
          <td style="width: 141px; text-align: center;">
            <a href="?act=default"><img src="images/logo_test.png" alt="Database" /></a>
          </td>
          <td style="width: 357px; background: url('images/hback/back<?php echo VIEW_ID; ?>_top_left.png') top left no-repeat;">
            <div style="height: 103px; width: 16px; background: url('images/hback/shader.png') repeat-y;"></div>
          </td>
          <td style="width: 462px; background: url('images/hback/back<?php echo VIEW_ID; ?>_top_right.png') top left no-repeat;">
            <!--<div style="float: right; position: relative; right: 10px;">
              <table>
                <tr>
                  <td>
                    
                  </td>
                  <td>
                    <img src="images/kafra1.gif" alt="" />
                  </td>
                </tr>
              </table>
            </div>-->
          </td>
        </tr>
      </table>
      
      <!--<div class="exlinesp"></div>-->

      <div style="float: left;">
        
  <?php navigationMenu(Settings::get('interface', 'navigation')); ?>

      </div>
      
      <div style="float: right; width: 819px; height: 144px; background: url('images/hback/back<?php echo VIEW_ID; ?>_bottom.png') top right no-repeat;">
        <div style="height: 144px; width: 16px; background: url('images/hback/shader.png') repeat-y;"></div>
      </div>
    
    <div style="clear: both; width: 100%; height: 11px; background: url(images/shade1.png) repeat-x;"></div>
    
    </div>
 
    <div id="necky_nuts">
      
      <div class="inpadding">
