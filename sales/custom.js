// JavaScript Document
window.onload = function() {
	var ww = window.innerWidth;
  if (ww>800) {
    var myDivs = ["slide-transition-container", "slide", "frame", "wrapper"]
    var i = 0;
    while (i < 4) {
		console.log(document.getElementById("myDivs[i])");
      document.getElementById(myDivs[i]).style.width="800px";
      i++;
    }
    var z = 0;
    while (z < 2) {
      document.getElementById(myDivs[z]).style.height="700px";
      z++;
    }
  }
}
