<style>
 .button {
  background-color: #4CAF50;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}   


</style> 
 
 <center>       
<h1 style="font-size:60px">WELCOME TO MY WEBSITE PORTFOLIO</h1> 
<h2>Presented by NG KEAN PING</h2>
</center>

<div class="slideshow-container">

<div class="mySlides fade">
  <img alt="student" src="images/pic1.jpg" width="1000px" height="600px;"/>
</div>

<div class="mySlides fade">
  <img alt="result" src="images/pic2.jpg" width="1000px" height="600px;"/>
  </div>

<div class="mySlides fade">
  <img alt="math" src="images/pic3.jpg" width="1000px" height="600px;"/>
  </div>

</div>
<br/>
<br/>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<br/><br/>

<center>
<h1>Get to know more about me by exploring the website!</h1></center>
<br/><br/>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 3 seconds
}
</script>
