$('document').ready(function(){

          $('a.habilidad').click(function(e){
                e.preventDefault();
                var enlace = $(this).attr('href');
                $('html, body').animate({
                  scrollTop: $(enlace).offset().top
        }, 1000);
    });

    $('a.inicio').click(function(e){
          e.preventDefault();
          var enlace = $(this).attr('href');
          $('html, body').animate({
            scrollTop: $(enlace).offset().top
  }, 1000);
});

$('a.experiencia').click(function(e){
      e.preventDefault();
      var enlace = $(this).attr('href');
      $('html, body').animate({
        scrollTop: $(enlace).offset().top
}, 1000);
});

});
