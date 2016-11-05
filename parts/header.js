$(function() {
  function createMenuLinks(login) {
  	console.log("hello")
  	if (login)
  	{
      $("body").prepend("<div id='menubar'></div>");
      $("#menubar").append("<div id='linkbar'></div>");
      $("#linkbar").append("<a href=\"\"><div class=\"menulink\">Home</div></a>");
      $("#linkbar").append("<a href=\"\"><div class=\"menulink\">Location</div></a>");
      $("body").append("<section id=\"content\"></section>");
  		/*var linkBar = document.getElementById("linkbar");

  		var newLink = document.createElement("a");
  		var newLinkDiv = document.createElement("div");
  		newLink.class = "menulink";
  		newLink.href = "http://www.google.com";
  		newLinkDiv.class = "menulink";
  		newLinkDiv.innerHTML = "Home";
  		newLink.append(newLinkDiv);

  		//var link = document.createElement("img");
  		//link.src = "http://wardencoding.x10host.com/files/home-default.png"
  		//link.onmouseover = function(){this.src = 'http://wardencoding.x10host.com/files/home-hover.png'};
  		//link.onouseout = function(){this.src = 'http://wardencoding.x10host.com/files/home-default.png'};
  		linkBar.append(newLink);*/
  	}
  }

  createMenuLinks(1);
});