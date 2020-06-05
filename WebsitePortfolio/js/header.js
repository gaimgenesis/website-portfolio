//open homepage
function bufferhome() {
	var random = Math.floor(Math.random() * 7) * 100 + 600;
	document.getElementById('buffer').style.display = "block";
	setTimeout(zoomouthome, random);
}

function zoomouthome(){
	document.getElementById('bufferout').classList.add("zoomout");
	setTimeout(openhome, 300);
}

function openhome() {
   window.open("default.php","_self");

}

//open hobbies
function hobbies(){
	var random = Math.floor(Math.random() * 10) * 100 + 600;
	document.getElementById('buffer').style.display = "block";
	setTimeout(zoomouthobby, random);
}

function zoomouthobby(){
	document.getElementById('bufferout').classList.add("zoomout");
	setTimeout(openhobby, 300);
}
function openhobby() {
   window.open("gallery.php","_self");
	
}

//open about
function about() {
	var random = Math.floor(Math.random() * 7) * 100 + 600;
	document.getElementById('buffer').style.display = "block";
	setTimeout(zoomoutabout, random);
}

function zoomoutabout(){
	document.getElementById('bufferout').classList.add("zoomout");
	setTimeout(openabout, 300);
}

function openabout() {
   window.open("aboutme.php","_self");

}


//open skills
function skills(){
	var random = Math.floor(Math.random() * 10) * 100 + 600;
	document.getElementById('buffer').style.display = "block";
	setTimeout(zoomoutskills, random);
}


function zoomoutskills(){
	document.getElementById('bufferout').classList.add("zoomout");
	setTimeout(openskills, 300);
}
function openskills() {
	window.open("skills.php","_self");
	
}
