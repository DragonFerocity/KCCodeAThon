$(function() {
  function createMenuLinks(login) {
  	if (login)
  	{
      $("body").prepend("<div id='menubar'></div>");
      $("#menubar").append("<div id='linkbar'></div>");
      $("#linkbar").append("<a href=\"\"><div class=\"menulink\">Home</div></a>");
      $("#linkbar").append("<a href=\"\"><div class=\"menulink\">Location</div></a>");
  	}
  }
  if ($(".menu").length > 0)
    pos = $(".menu").offset().top;
  $(window).scroll(function() {
    var scroll = $(document).scrollTop();
    if ($(".menu").length > 0) {
      if (scroll >= pos-50) {
        $(".header-text").css({"position": "fixed", "top": "0px"});
        $(".menu").css({"position": "fixed", "top": "48px"});
        $("#menubar").css({"background-color": "transparent"});
      }
      else {
        $(".header-text").css({"position": "relative", "top": "0px"});
        $(".menu").css({"position": "relative", "top": "0px"});
        $("#menubar").css({"background-color": "rgba(53, 239, 110, 0.6)"});
      }
    }
  });

  createMenuLinks(1);
});