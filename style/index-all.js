document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
  {
         document.getElementById('interactive');
		 document.getElementById('loader_text').innerHTML = '<strong>Load Complete !</strong>';
		 new WOW().init();
  }
	{		 
         document.getElementById('load').style.display="none";

	}
		 
  }
}
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("opener").style.opacity = "0";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("opener").style.opacity = "1";
}