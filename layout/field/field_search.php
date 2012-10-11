<?php if(!defined('EFFICIENT_ROOT')) exit; ?>

    <div style="padding-right: 20px;">
        
      <div>
        
        <div style="float: left; margin: 0 10px 0 10px; width: 110px; text-align: center; background: 0;">
          <img src="images/thumb/romap.png" alt="image/gif" />
        </div>
          
      </div>
        
      <img src="images/text/tfield0.png" alt="Search monster database" /><br />
          
        <br />

        O visualizador de campo permite-lhe procurar um mapa especifico, lista e monstros e pegar as estatisticas de monstros para o mapa.<br />
        <br />
        Certifique-se tambem ter um olhar para o <a href="?act=world">Mapa Mundi</a>, uma visao completa de todos os mapas de Rune-Midgard!<br />
        Busca de um mapa calabouco? De uma olhada <a href="?act=dungeon">aqui</a>.
        
    </div>
    
    <div style="clear: both; margin: 20px 0 20px 0;"></div>

  <img src="images/tr/novice0.png" alt="image/PNG" style="float: right; position: relative; bottom: 110px; right: 60px;" />

  <table class="gentable" style="background: #ffffff; margin-left: 122px;" cellspacing="5">
    
    <tr class="grayrow">
      <td><span>Selecione Mapa por ID</span><br />
      Selecione um mapa com base em seu nome de ID</td>
    </tr>

    <tr>
      <td>
        <form method="get" action="" name="field_search_by_m_id" id="field_search_by_m_id">
          
          <input style="display: none" name="act" value="fieldview" />
          
          <select id="field_by_m_id" name="field" class="fixedInput">
<?php
              
              foreach($list_maps1 as $c => $id) {
              echo <<<EOT
            <option value="$id">$id</option>

EOT;
              }
              
?>
          </select>
          <input class="ssubmit" type="submit" value="" />
        </form>
      </td>
    </tr>
    
    <tr class="grayrow">
      <td><span>Selecione Mapa Por Titulo</span><br />
      Selecione um mapa do que e titulo do mapa</td>
    </tr>
    
    <tr>
      <td>
        <form method="get" action="" name="field_search_by_title" id="field_search_by_title">
           
          <input style="display: none" name="act" value="fieldview" />
           
          <select id="field_by_title" name="field">
<?php
              
              foreach($list_maps2 as $map_src => $map_name) {
              echo <<<EOT
                <option value="$map_src">$map_name</option>
                
EOT;
              }
              
?>
          </select>
          <input class="ssubmit" type="submit" value="" />
        </form>
      </td>
    </tr>

  </table>
