<!DOCTYPE html>
<html>
    <head>
        <title>
             Home Page
        </title>
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0, maxium-scale=1.0">
        <link href="adv.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div id="wrapper">
            <header>
              <div class="flex">
                <div class="logo">
                  <a href="#">The Motorrad <span> Company</span></a>
                </div>
                <nav>
                  <button id="nav-toggle" class="hamburger-menu">
                    <span class="strip"></span>
                    <span class="strip"></span>
                    <span class="strip"></span>
                  </button>
                  <ul id="nav-menu-container">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Bookings</a></li>
                    
                    <li><a href="#">Contact</a></li>
                  </ul>
                </nav>
              </div>
            </header>
          
            <main>
              <section>
                <div class="container">
  
                  <!-- Full-width images with number text -->
                  <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                      <img src="images/1250gsa1.png" style="width:100%">
                  </div>
                
                  <div class="mySlides">
                    <div class="numbertext">2 / 6</div>
                      <img src="images/Multistrada1260.png" style="width:100%">
                  </div>
                
                  <div class="mySlides">
                    <div class="numbertext">3 / 6</div>
                      <img src="images/AfricaTwin.png" style="width:100%">
                  </div>
                
                  <div class="mySlides">
                    <div class="numbertext">4 / 6</div>
                      <img src="images/triumph1200.png" style="width:100%">
                  </div>
                
                  <div class="mySlides">
                    <div class="numbertext">5 / 6</div>
                      <img src="images/panamerica.png" style="width:100%">
                  </div>
                
                  <div class="mySlides">
                    <div class="numbertext">6 / 6</div>
                      <img src="images/ktm1290.png" style="width:100%">
                  </div>
                
                  <!-- Next and previous buttons -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                  <!-- Image text -->
                  <div class="caption-container">
                    <p id="caption"></p>
                  </div>
                
                  <!-- Thumbnail images -->
                  <div class="row">
                    <div class="column">
                      <img class="demo cursor" src="images/1250gsa1.png" style="width:100%" onclick="currentSlide(1)" alt="BMW 1250 Gs Adventure">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="images/Multistrada1260.png" style="width:100%" onclick="currentSlide(2)" alt="Ducati Multistrada 1260">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="images/AfricaTwin.png" style="width:100%" onclick="currentSlide(3)" alt="Hona Africa Twin">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="images/triumph1200.png" style="width:100%" onclick="currentSlide(4)" alt="Triumph 1200xcx">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="images/panamerica.png" style="width:100%" onclick="currentSlide(5)" alt="Harley-Davidson Pan American">
                    </div>
                    <div class="column">
                      <img class="demo cursor" src="images/ktm1290.png" style="width:100%" onclick="currentSlide(6)" alt="Ktm 1290 r Adventure">
                    </div>
                  </div>
                </div>
              <!-- <section class="hero-image"> 
                <img src="https://onclickwebdesign.com/wp-content/uploads/2019/02/E8A0GT.jpg" alt="ABC Company Hero Image" />
                <div class="hero-marketing-bar">
                  <h3>Developing Innovative Strategies</h3>
                  <h1>ACHIEVING GROWTH</h1>
                </div>
              </section>-->
              </section>
              
              <section class="marketing-boxes">
                <div class="flex">
                  <div class="box" id="bmw">
                    <h2>BMW</h2>
                    <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    <button><a href="1250.php">Know More</a></button>
                    
                  </div>
                  
                  <div class="box box2" id="ducati">
                    <h2>Ducati</h2>
                    <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    <button>Know More</button>
                  </div>
                  
                  <div class="box" id="honda">
                    <h2>Honda</h2>
                    <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    <button>Know More</button>
                  </div>
                </div>
                </section>
                <section class="marketing-boxes">
                  <div class="flex">
                    <div class="box" id="triumph">
                      <h2>Triumph</h2>
                      <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.Lorem Ipsum is not simply random text.Lorem Ipsum is not simply random text.</p>
                      <button>Know More</button>
                    </div>
                    
                    <div class="box box2" id="harley">
                      <h2>Harley</h2>
                      <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.Lorem Ipsum is not simply random text.mply random text.</p>
                      <button>Know More</button>
                    </div>
                    
                    <div class="box" id="ktm">
                      <h2>KTM</h2>
                      <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.Lorem Ipsum is not simply random text.Lorem Ipsum is not simply random text.</p>
                      <button>Know More</button>
                    </div>
                  </div>
                </section>
              <!-- <section class="about-us">
                    <h1>About Us</h1>
                    <p>
                      Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                      <br/><br/>
                      Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                    </p>
                    <button>Read More</button>
                  </section>
               -->
              <section class="contact-us">
                <h1>Contact Us</h1>
                <div class="flex">
                  <div id="map" class="map">
                    <img src="https://onclickwebdesign.com/wp-content/uploads/2019/02/map.jpg" alt="Map" />
                  </div>
                  <div class="contact-form">
                    <address>
                      1234 Evergreen Terrace<br/>
                      Chicago, IL 49343<br/>
                      info@acmecompany.com<br/>
                      Tel: 123-456-7890
                    </address>
                    
                    <form>
                      <input type="text" name="name" id="name" placeholder="Name" />
                      <input type="email" name="email" id="email" placeholder="Email" />
                      <input type="text" name="subject" id="subject" placeholder="Subject" />
                      <textarea id="message">Type your message here...</textarea>
                      <button>Submit</button>
                    </form>
                  </div>
                </div>
              </section>
            </main>
          
            <footer>
              <div class="flex">
                <small>&copy; 2019 ACME Company.  Proudly created by OnClick Media.</small>
                <ul>
                  <li>
                    <a href="#">
                      <img src="https://onclickwebdesign.com/wp-content/uploads/2019/02/facebook_icon.jpg" alt="Facebook" />
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="https://onclickwebdesign.com/wp-content/uploads/2019/02/twitter_icon.jpg" alt="Twitter" />
                    </a>
                  </li>
                </ul>
              </div>
            </footer>
          </div>
          <script>
            document.getElementById('nav-toggle').addEventListener('click', function () {
let navMenu = document.getElementById('nav-menu-container');
navMenu.style.display = navMenu.offsetParent === null ? 'block' : 'none';
});
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
         </script>
   </body>
</html>