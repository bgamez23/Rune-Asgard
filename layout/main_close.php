<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

      </div>

    </div>
      
    <div style="background: transparent; margin: 0 auto; width: 75%; padding: 20px 0 20px 0;">

      <div class="exlinespd"></div>
      
      <br />
  
  
      <div style="font-family: 'arial'; font-size: 8pt;">

      <script type="text/javascript">

        function goto(id) {
        obj = document.getElementById(id);
        redir= obj.selectedIndex;
          if(obj.options[redir].value != '') {
            location = obj.options[redir].value;
           }
        } 

      </script>

      <center>
      
        <table cellpadding="5">
          <tr>
            <td>
              <select onchange="goto('droplink')" id="droplink" style="color: #666666; font-family: 'verdana';">
                <option value=""><?php echo message('erods_service'); ?></option>
                <option value="">---------------</option>
                <option value="?act=item"><?php echo message('src_item_title'); ?></option>
                <option value="?act=mob"><?php echo message('src_mob_title'); ?></option>
                <option value="?act=field"><?php echo message('src_field_title'); ?></option>
              </select>
            </td>
            <td style="text-align: left;">
              <div>
                <a href="?act=contact"><?php echo message('erods_contact'); ?></a> | <a href="?act=updates"><?php echo message('erods_updates'); ?></a> | <a href="?act=legal"><?php echo message('erods_legal'); ?></a>
              </div>
            </td>
          </tr>
          <tr>
            <td style="text-align: center; padding: 10px;">
              <img src="images/logo_real.png" alt="Powered by ERODS FUSION" />
            </td>
            <td style="text-align: left;">
              <div style="color: #666666;">
                ERODS copyright &copy; OutOfCuriosity.<br />
                Ragnarok Online copright &copy; Gravity Corp.<br />
                <?php runStat(); ?>
              </div>
            </td>
          </tr>
        </table>
        
      </center>
      
      </div>
      
        
      <div id="smokescreen" style="display: none">&nbsp;</div>
      
      <div id="popUpBox" style="display: none; background: #ffffff; width: 160px; height: 160px; position: fixed; top: 50%; margin-top: -80px; left: 50%; margin-left: -80px; z-index: 9;">
        <center>
          <div id="popUp" style="padding: 30px; height: 100px; width: 75px;"></div>
          <div style="width: 160px; background: #ffffff; padding: 3px 0px 3px 0px;"><a class="random" onclick="setDisplay('popUpBox'); setDisplay('smokescreen');"><?php echo message('ajax_close_w'); ?></a></div>
        </center>
      </div>
      
      <div id="cardPopUpBox" style="display: none; z-index: 9; position: fixed; left: 0; right: 0; top: 50%; margin-top: -250px; cursor: pointer;">
        <center>
          <div id="cardPopUp" onclick="setDisplay('cardPopUpBox'); setDisplay('smokescreen');" style="width: 300px; height: 400px; background: #ffffff;"></div>
        </center>
      </div>
    
      <div id="ajaxFrame" class="propertyBox statBox" style="display: none">
      
        <table cellspacing="1" class="whitetable">
        
          <tr class="grayrow">
            <td><?php echo message('ajax_options'); ?>:</td>
          </tr>
          
          <tr>
            <td class="alignment1">
              <div id="ajaxDialogue"></div>
            </td>
          </tr>
          
        </table>
        
      </div>
  
    </div>
  
  </body>


</html>