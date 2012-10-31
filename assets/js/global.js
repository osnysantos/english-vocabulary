
$(window).load(function(){
    $('.flip').click(function(){
        $(this).find('.card').addClass('flipped').mouseleave(function(){
            $(this).removeClass('flipped');
        });
        //return false;
    });
    $('.inline').toggle(function() {
      $('.manage').show();
      $(this).parent().addClass('active');
      return false;
    }, function() {
      $('.manage').hide();
      $(this).parent().removeClass('active');
      return false;
    });
});
