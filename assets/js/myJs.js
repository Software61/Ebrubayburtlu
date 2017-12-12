
  $(".close-span").click(function(){
    $("#overlay").removeClass("open").addClass("close");
    $(".hamburger").removeClass("is-active");
  })


  $(".dropbtn").click(function(){
    $(".dropdown-content").toggle();
  })
