
$(document).ready(function () {
  // filter category
  $(".all").click(function () {
    $(".one").fadeIn();
    $(".second").fadeOut();
    $(".one2").fadeIn();
    $(".second2").fadeOut();
  });
  $(".list").click(function () {
    $(".one").fadeOut();
    $(".second").fadeIn();
    $(".one2").fadeOut();
    $(".second2").fadeIn();
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 400) {
      $(".arrow").css({
        "visibility": "visible",
      });
      $(".chaticon").css({
        "visibility": "visible",
      });
      
    }
    else {
      $(".arrow").css({
        "visibility": "hidden",
      });
      $(".chaticon").css({
        "visibility": "hidden",
      });
    }
  });

  $('.arrow').click(function () {
    $('html,body').animate({ scrollTop: 0 }, "fast")
  });

  // model on web
  $('#login').click(function () {
    $('.loginmodel').fadeIn();
  });
  $('#closelogin').click(function () {
    $('.loginmodel').fadeOut();
  });

  $('#register').click(function () {
    $('.registermodel').fadeIn();
  });
  $('#closeregister').click(function () {
    $('.registermodel').fadeOut();
  });

  $("#member").click(function () {
    $('.loginmodel').fadeOut();
    $('.registermodel').fadeIn();
  });
  $("#alreadymember").click(function () {
    $('.loginmodel').fadeIn();
    $('.registermodel').fadeOut();
  });

  //start mobile 
  $('#loginmobile').click(function () {
    $('.loginmodelmobile').fadeIn();
  });
  $('#closeloginmobile').click(function () {
    $('.loginmodelmobile').fadeOut();
  });

  $('#registermobile').click(function () {
    $('.registermodelmobile').fadeIn();
  });
  $('#closeregistermobile').click(function () {
    $('.registermodelmobile').fadeOut();
  });

  $("#membermobile").click(function () {
    $('.loginmodelmobile').fadeOut();
    $('.registermodelmobile').fadeIn();
  });
  $("#alreadymembermobile").click(function () {
    $('.loginmodelmobile').fadeIn();
    $('.registermodelmobile').fadeOut();
  });

  // searchservice
  $("#searchservice").focus(function () {
    $('.resultdata').fadeIn();
  });
  $("#searchservice").blur(function () {
    $('.resultdata').fadeOut();
  });



  $(".onechat").click(function () { 
    $('.allchats').css('display','none')
    $('.chatdetails').css('display','block')
  });
  $(".back").click(function () { 
    $('.allchats').css('display','block')
    $('.chatdetails').css('display','none')

  });
});
