$(document).ready(function(){
      $('.toggle_menu').click(function(){
            $('.sidebar_menu').addClass('hide_menu');
            $('.toggle_menu').addClass('opacity_one');
      });

      $('.fa-arrow-left').click(function(){
            $('.sidebar_menu').removeClass('hide_menu');
            $('.toggle_menu').removeClass('opacity_one');
      });

});
