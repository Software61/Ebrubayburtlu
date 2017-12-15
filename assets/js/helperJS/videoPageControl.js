
var i=0;
function changeHandler(e) {
 
  if(i==0) {
  	i=1;
  	$(".index__wrapper").css("display","none");
  }else if(i==1) {
  	i=0;
  	$(".index__wrapper").css("display","block");
  }
}

document.addEventListener("fullscreenchange", changeHandler, false);
document.addEventListener("webkitfullscreenchange", changeHandler, false);
document.addEventListener("mozfullscreenchange", changeHandler, false);

