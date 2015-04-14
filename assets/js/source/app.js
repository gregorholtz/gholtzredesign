$( document ).ready(function(){

  $('.toggle').click(function(){
    if($('#popup-menu').hasClass('open')) {
      $('#popup-menu').removeClass('open');
    }
    else {
      $('#popup-menu').addClass('open');
    }
  });

})
