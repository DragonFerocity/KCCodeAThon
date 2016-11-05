$(function() {
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

  /*$(window).scroll(function() {
    if ()
  });*/

  createMenuLinks(1);
});