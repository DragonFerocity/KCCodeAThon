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
    console.log(scroll);
    console.log(pos);
    if ($(".menu").length > 0) {
      if (scroll > pos) {
        $(".menu").css({"position": "fixed"});
      }
      else {
        $(".menu").css({"position": "relative"});
      }
    }
  });

  createMenuLinks(1);
});