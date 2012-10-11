<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

      </div>

    </div>
      
    <div style="background: #ffffff; margin: 0 auto; width: 75%; padding: 20px 0 20px 0;">

      <div class="exlinespd"></div>
      
      <br />
  
      <center>
  
      <div style="font-family: 'arial'; font-size: 8pt;">

        <table cellpadding="5">
          <tr>
            <td>
              <select name="goto" style="color: #666666; font-family: 'verdana';">
                <option>Services</option>
                <option>---------------</option>
                <option>Item search</option>
                <option>Monster search</option>
                <option>Dungeon/field viewer</option>
              </select>
            </td>
            <td style="text-align: left;">
              <div>
                <a href="?act=contact">Contact information</a> | <a href="?act=updates">Latest updates</a> | <a href="?act=legal">Legal</a>
              </div>
            </td>
          </tr>
          <tr>
            <td style="text-align: center; padding: 10px;">
              <img src="images/logo_real.png" alt="Powered by ERODS FUSION" />
            </td>
            <td style="text-align: left;">
              <div style="color: #666666;">
                ERODS copyright &copy; by OutOfCuriosity.<br />
                Ragnarok Online is copright &copy; Gravity Corp.<br />
                <?php runStat(); ?>
              </div>
            </td>
          </tr>
        </table>
      
      </div>
      
      </center>
        
      <div id="smokescreen" style="display: none">&nbsp;</div>
      
      <div id="popUpBox" style="display: none; background: #ffffff; width: 160px; height: 160px; position: fixed; top: 50%; margin-top: -80px; left: 50%; margin-left: -80px; z-index: 9;">
        <center>
          <div id="popUp" style="padding: 30px; height: 100px; width: 75px;"></div>
          <div style="width: 160px; background: #ffffff; padding: 3px 0px 3px 0px;"><a class="random" onclick="setDisplay('popUpBox'); setDisplay('smokescreen');">Close window</a></div>
        </center>
      </div>
      
      <div id="cardPopUpBox" style="display: none; z-index: 9; position: fixed; left: 0; right: 0; top: 50%; margin-top: -250px;">
        <center>
          <div id="cardPopUp" style="width: 300px; height: 400px; background: #ffffff;"></div>
          <div style="width: 300px; background: #ffffff; padding: 3px 0px 3px 0px;"><a class="random" onclick="setDisplay('cardPopUpBox'); setDisplay('smokescreen');">Close window</a></div>
        </center>
      </div>
    
      <div id="ajaxFrame" class="propertyBox statBox" style="display: none">
      
        <table cellspacing="1" class="whitetable">
        
          <tr class="grayrow">
            <td>Options:</td>
          </tr>
          
          <tr>
            <td class="alignment1">
              <div id="ajaxDialogue"></div>
            </td>
          </tr>
          
        </table>
        
      </div>
  
    <script type="text/javascript">
    var sc_project=4360415; 
    var sc_invisible=1; 
    var sc_partition=55; 
    var sc_click_stat=1; 
    var sc_security="4bff60b4"; 
    </script>

    <script type="text/javascript"
    src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div
    class="statcounter"><a title="wordpress stats plugin"
    class="statcounter"
    href="http://www.statcounter.com/wordpress.com/"><img
    class="statcounter"
    src="http://c.statcounter.com/4360415/0/4bff60b4/1/"
    alt="wordpress stats plugin" /></a></div></noscript>
  
    </div>
  
  </body>


</html>