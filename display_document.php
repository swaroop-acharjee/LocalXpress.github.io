<script type="text/javascript">
if (document.layers) {
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = function () {
        return false;
    };
}
else {
    document.onmouseup = function (e) {
        if (e != null && e.type == "mouseup") {
            //Check the Mouse Button which is clicked.
            if (e.which == 2 || e.which == 3) {
                //If the Button is middle or right then disable.
                return false;
            }
        }
    };
}
document.oncontextmenu = function () {
    return false;
};

document.onkeydown = function (e) {
  var key = e.charCode || e.keyCode;
  if (key == 38 || key==40) { 
    // enter key do nothing
  } 
  else if(key==93)
  {
  	alert("Invalid");
  }
  else {
  	alert("Invalid");
    e.preventDefault();
  }	     
}
function put_pdf()
{
    document.getElementById("gg").setAttribute("src", "sample.pdf#toolbar=0&navpanes=0&scrollbar=0");
}
</script>
<body onload="put_pdf();">
<embed id="gg" src="" width="100%" height="100%"/>
</bod>