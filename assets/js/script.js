
jQuery(function($){

  $(document).ready(function(){

  	$('.menu-burger').click(function(){
      $('.menu-nav').toggleClass('open');
  	});

  

    $('.menu-item-has-children').click(function(){
      $(this).children('.menu-nav ul').toggleClass('open');
  	});

    $('.search-btn').click(function(){
      $('input.form-control').toggleClass('open');
  	});

    $('li a').click(function(e) {
    //e.preventDefault();
  });

    $(window).scroll(checkAffix);

  });

  function checkAffix(){
    if($(window).scrollTop() > 0){
      $('header').addClass('header-affix');
    } else {
      $('header').removeClass('header-affix');
    }
  }

});
