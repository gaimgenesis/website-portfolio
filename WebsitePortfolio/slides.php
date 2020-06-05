<head>
<body>
  <style>
    html {
      box-sizing: border-box;
    }
    
    *, *:before, *:after {
      box-sizing: inherit;
    }
    
    .preview {
      width: 100%;
      left:50%;
    }
    
    .row {
      display: flex;
      flex-wrap: wrap;
      padding-left: 250px;
    }
    .caption-container {
      text-align: center;
      background-color: black;
      padding: 2px 16px;
      color: white;
    }
    .row > .col {
      padding: 0 8px;
    }
    
    .col {
      float: left;
      left: 50%;
      width: 25%;
    }
    
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      padding: 10px 62px 0px 62px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: black;
    }
    
    .modal-content {
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      margin: auto;
      padding: 0 0 0 0;
      width: 80%;
      background-color: black;
      max-width: 1200px;
    }
    
    .slide {
      display: none;
    }
    
    .image-slide {
      width: 100%;
    }
    
    .modal-preview {
      width: 100%;
    }
    
    .dots {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
    }
    
    img.preview, img.modal-preview {
      opacity: 0.6;
    }
    
    img.active,
    .preview:hover,
    .modal-preview:hover {
      opacity: 1;
    }
    
    img.hover-shadow {
      transition: 0.3s;
    }
    
    .hover-shadow:hover {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    } 
    
    .close {
      color: white;
      position: absolute;
      top: 10px;
      right: 25px;
      font-size: 35px;
      font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
      color: #999;
      text-decoration: none;
      cursor: pointer;
    }
    
    .previous,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -50px;
      color: white;
      font-weight: bold;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
      -webkit-user-select: none;
    }
    
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }
    
    .previous:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }
    #fade img{
      opacity: 0;
    }
  </style>
  <div class="row" id="fade">
    <div class="col">
       <img src="images/OODJ.jpg" onclick="openLightbox();toSlide(1)" class="hover-shadow preview" alt="OODJ Assignment" height="200px" width="50px" />
    </div>
    <div class="col">
       <img src="images/CCP.jpg" onclick="openLightbox();toSlide(2)" class="hover-shadow preview" alt="CCP Assignment" height="200px" width="50px"/>
    </div>
    <div class="col">
       <img src="images/IA.jpg" onclick="openLightbox();toSlide(3)" class="hover-shadow preview" alt="IA Assignment" height="200px" width="50px"/>
    </div>
  </div>
  <br/><br/>
  <div class="row" id="fade">
    <div class="col">
       <img src="images/SDP.jpg" onclick="openLightbox();toSlide(4)" class="hover-shadow preview" alt="SDP Assignment" height="200px" width="50px"/>
    </div>
    <div class="col">
       <img src="images/hobby1.jpg" onclick="openLightbox();toSlide(5)" class="hover-shadow preview" alt="Hobby 1" height="200px" width="50px"/>
    </div>
    <div class="col">
       <img src="images/hobby2.jpg" onclick="openLightbox();toSlide(6)" class="hover-shadow preview" alt="Hobby 2" height="200px" width="50px"/>
    </div>
  </div>
  <br/><br/><br/>
  
  <div id="Lightbox" class="modal">
  
    <span class="close pointer" onclick="closeLightbox()">&times;</span>
    <div class="modal-content">
      <div class="slide">
        <img src="images/OODJ.jpg" class="image-slide" alt="OODJ Assignment" height="600px" width="50px"/>
      </div>
      <div class="slide">
        <img src="images/CCP.jpg" class="image-slide" alt="CCP Assignment" height="600px" width="50px"/>
      </div>    
      <div class="slide">
        <img src="images/IA.jpg" class="image-slide" alt="IA Assignment" height="600px" width="50px"/>
      </div>
      <div class="slide">
        <img src="images/SDP.jpg" class="image-slide" alt="SDP Assignment" height="600px" width="50px"/>
      </div>
      <div class="slide">
        <img src="images/hobby1.jpg" class="image-slide" alt="Hobby 1" height="600px" width="50px"/>
      </div>
      <div class="slide">
        <img src="images/hobby2.jpg" class="image-slide" alt="Hobby 2" height="600px" width="50px"/>
      </div>
      <a class="previous" onclick="changeSlide(-1)">&#10094;</a>
      <a class="next" onclick="changeSlide(1)">&#10095;</a>
      <div class="caption-container">
      <p id="caption"></p>
      </div>    
      <div class="dots">
        <div class="col">
          <img src="images/OODJ.jpg" class="modal-preview hover-shadow" onclick="toSlide(1)" alt="Java Consultation Hour Booking System" height="100px" width="50px"/>
        </div>
        <div class="col">
          <img src="images/CCP.jpg" class="modal-preview hover-shadow" onclick="toSlide(2)" alt="Concurrent Programming Assignment" height="100px" width="50px"/>
        </div>
        <div class="col">
          <img src="images/IA.jpg" class="modal-preview hover-shadow" onclick="toSlide(3)" alt="Website Development Assignment" height="100px" width="50px"/>
        </div>
        <div class="col">
          <img src="images/SDP.jpg" class="modal-preview hover-shadow" onclick="toSlide(4)" alt="Student Quiz and Games Website" height="100px" width="50px"/>
        </div>
        <div class="col">
          <img src="images/hobby1.jpg" class="modal-preview hover-shadow" onclick="toSlide(5)" alt="Hobby Example 1" height="100px" width="50px"/>
        </div>
        <div class="col">
          <img src="images/hobby2.jpg" class="modal-preview hover-shadow" onclick="toSlide(6)" alt="Hobby Example 2" height="100px" width="50px"s/>
        </div>
      </div>
    </div> 
  </div>
  
  <script>
  //slideshow animation//
    let slideIndex = 1;

    showSlide(slideIndex);
    
    function openLightbox() {
      document.getElementById('Lightbox').style.display = 'block';
    };
    
    function closeLightbox() {
      document.getElementById('Lightbox').style.display = 'none';
    };
    window.onclick = function(event) {
    if (event.target == document.getElementById('Lightbox')) {
        document.getElementById('Lightbox').style.display = "none";
      }
    }
    function changeSlide(n) {
      showSlide(slideIndex += n);
    };
    
    function toSlide(n) {
      showSlide(slideIndex = n);
    };
    
    function showSlide(n) {
      const slides = document.getElementsByClassName('slide');
      let modalPreviews = document.getElementsByClassName('modal-preview');
      var captionText = document.getElementById("caption");
    
      if (n > slides.length) {
        slideIndex = 1; 
      };
      
      if (n < 1) {
        slideIndex = slides.length;
      };
    
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      };
      
      for (let i = 0; i < modalPreviews.length; i++) {
        modalPreviews[i].className = modalPreviews[i].className.replace(' active', '');
      };
      
      slides[slideIndex - 1].style.display = 'block';
      modalPreviews[slideIndex - 1].className += ' active';
      captionText.innerHTML = modalPreviews[slideIndex-1].alt;
    };
//fade in animation//
  $(function() {
  $('#fade img').each(function(i) {
  $(this).delay((i++) * 500).fadeTo(1000, 1); })
});
  </script>
</body>
</head>
