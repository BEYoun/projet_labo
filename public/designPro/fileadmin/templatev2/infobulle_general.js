    $().ready(function() {
      <!-- infobulle -->
      $('.bloc_infobulle').mouseover( function() {
        $(this).find('.infobulle').show();
      }).mouseout( function() {
        $(this).find('.infobulle').hide();
      });
      <!-- /infobulle -->
    }); 

