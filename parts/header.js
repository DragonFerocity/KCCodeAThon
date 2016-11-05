$(function() {
  pos = $(".menu").offset().top;

  function createMenuLinks(login) {
  	console.log("hello")
  	if (login)
  	{
      $("body").prepend("<div id='menubar'></div>");
      $("#menubar").append("<div id='linkbar'></div>");
      $("#linkbar").append("<a href=\"\"><div class=\"menulink\">Home</div></a>");
      $("#linkbar").append("<a href=\"\"><div class=\"menulink\">Location</div></a>");
  	}
  }

  $(window).scroll(function() {
    var scroll = $(document).scrollTop();
    if ($(".menu").length > 0) {
      if (scroll >= pos) {
        $(".header-text").css({"position": "fixed", "top": "70px"});
        $(".menu").css({"position": "fixed", "top": "0px"});
        $("#menubar").animate({"background-color": "transparent"}, 500);
      }
      else {
        $(".header-text").css({"position": "relative", "top": "0px"});
        $(".menu").css({"position": "fixed", "top": "0px"});
        $("#menubar").animate({"background-color": "rgba(32, 32, 32, 0.8)"}, 500);
      }
    }
  });

  createMenuLinks(1);
});