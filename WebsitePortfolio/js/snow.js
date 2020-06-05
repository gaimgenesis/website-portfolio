   function snowtoggle() {
	var snowcss = document.getElementById('snowflakecss');
	var snow = document.getElementById('snowtoggle');
	var snowbutton = document.getElementById('snowonclick');

	if (snowbutton.style.color != "yellow"){
		snow.style.visibility = "visible";
		snowbutton.style.color = "yellow";

	} else if (snowbutton.style.color = "yellow") {
		
		snow.style.visibility = "hidden";
		snowbutton.style.color = "white";
	}


}