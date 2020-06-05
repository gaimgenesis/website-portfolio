<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  font-family: Avantgarde, TeX Gyre Adventor, URW Gothic L, sans-serif;
  font-weight: bold;
  font-style: italic;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  font-size: 20px;
  width:100px;
  transition: width 1s;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  width: 120px;
}
.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
                  <?php
                  echo '
                  <div class="topnav" id="myTopnav">
                    <a href="#" onclick="bufferhome()" style="background-color:gray;">Home</a>
                    <a href="#" onclick="about()">About</a>
                    <a href="#" onclick="hobbies()">Gallery</a>
                    <a href="#" onclick="skills()">Skills</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                      <i class="fa fa-bars"></i>
                    </a>
                  </div>'
                  ?>
                  
        <center><div id="buffer" class="buffback"><div class="lds-circle animate" id="bufferout"><div></div></div></div></center>
        </div></div>
    <!----snow----->
    
    <div class="snowflakes" style="aria-hidden: true;visibility: hidden;" id="snowtoggle">
      <div class="snowflake">❅</div>
      <div class="snowflake">❅</div>
      <div class="snowflake">❆</div>
      <div class="snowflake">❄</div>
      <div class="snowflake">❅</div>
      <div class="snowflake">❆</div>
      <div class="snowflake">❄</div>
      <div class="snowflake">❅</div>
      <div class="snowflake">❆</div>
      <div class="snowflake">❄</div>
    </div>  
      <input type="button" class="snowbutton" id="snowonclick" onclick="snowtoggle()" value="❆"/>
       
    <!-----snow---->

<script>
//responsive navigation bar//
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>









