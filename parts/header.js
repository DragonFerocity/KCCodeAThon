$(function() {
  if ($(".menu").length > 0)
    pos = Math.round($(".menu").offset().top/100)*100;
  $(window).scroll(function() {
    var scroll = $(document).scrollTop();
    if ($(".menu").length > 0) {
      if (scroll >= pos-50) {
        $(".header-text").css({"position": "fixed", "top": "0px"});
        $(".menu").css({"position": "fixed", "top": "48px"});
        $("#menubar, #menubar-white").css({"background-color": "transparent"});
      }
      else {
        $(".header-text").css({"position": "absolute", "top": "calc(100% - 100px - 48px)"});
        $(".menu").css({"position": "absolute", "top": "calc(100% - 100px)"});
        $("#menubar").css({"background-color": "rgba(53, 239, 110, 0.6)"});
        $("#menubar-white").css({"background-color": "rgba(255, 255, 255, 0.8)"});
      }
    }
  });

  $("body").on("mouseover", ".event", function () {
    $("body").append("<div id=\"info-window\"></div>");
    $("#info-window").html("<p>" + $(this).data("info") + "</p>");
    $("#info-window").css({ "left": ($(this).offset().left-50) + "px", "top": ($(this).offset().top+$(this).height()+12)  + "px" }).delay(300).fadeIn(300);
  }).on("mouseout", ".event", function () {
    $("#info-window").remove();
  });
});