<table class="menu">
  <tr>
    <td width="99%">
      <table class="submenu">
        <tr>
          <?php include_partial('General/tab', array
                (
                  'title'       => 'Inicio', 
                  'uri'         => '@home',
                  'image'       => 'backend/menu/home.gif',
                ))
          ?>
          <?php include_partial('General/tab', array
                (
                  'title'       => 'Noticias', 
                  'uri'         => '@news_list',
                  'image'       => 'backend/menu/inventory.gif',
                ))
          ?>
          <?php include_partial('General/tab', array
                (
                  'title'       => 'Aplicaciones', 
                  'uri'         => '@application_list',
                  'image'       => 'backend/menu/inventory.gif',
                ))
          ?>
          <?php include_partial('General/tab', array
          (
                            'title'       => 'Equipo', 
                            'uri'         => '@team_list',
                            'image'       => 'backend/menu/inventory.gif',
          ))
          ?>
          <?php include_partial('General/tab', array
          (
                                      'title'       => 'Servicios', 
                                      'uri'         => '@service_list',
                                      'image'       => 'backend/menu/inventory.gif',
          ))
          ?>                
          <?php include_partial('General/tab', array
                (
                  'title'       => 'Usuarios', 
                  'uri'         => '@user_list',
                  'image'       => 'backend/menu/user.gif',
                ))
          ?>
        </tr>
      </table>
    </td>
    <td width="1%">
      <table class="submenu">
        <tr>
          <?php include_partial('General/tab', array
                (
                  'title'       => 'Cerrar Sesi&oacute;n', 
                  'uri'         => '@log_logout',
                  'image'       => 'backend/menu/logout.gif',
                ))
          ?>
      </table>
    </td>
  </tr>
</table>
