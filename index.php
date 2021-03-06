 <!DOCTYPE html>
 <html>
     <head>
         <title>
              Home Page
         </title>
         <meta name="viewpoint" content="width=device-width, initial-scale=1.0, maxium-scale=1.0">
         <link href="style.css" rel="stylesheet" type="text/css">

     </head>
     <body>
        <div id="wrapper">
        <?php include('inc/navbar.php'); ?>
          
            <main>
              <section class="hero-image">
                <img src="images/logo.jpg" alt="bmw_motorrad_logo" />
                <div class="hero-marketing-bar">
                  
                </div>
              </section>
              
              <section class="marketing-boxes">
                <div class="flex">
                  <div class="box">
                    <h2>Racer Sports</h2>
                    <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    <button><a href="sports.php">Race now</a></button>
                  </div>
                  
                  <div class="box box2">
                    <h2>Adventure Tourers</h2>
                    <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    <button><a href="adv.php">Travel now</a></button>
                  </div>
                  
                  <div class="box">
                    <h2>Heritage Bikes</h2>
                    <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    <button><a href="adv.php">Ride now</a></button>
                  </div>
                </div>
                  <div class="box box3">
                    <h2>EV's</h2>
                    <p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                    <button><a href="adv.php">More Info</a></button>
                  </div>
                
                
              </section>
              
              <section class="about-us">
                    <h1>About Us</h1>
                    <p>
                      Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                      <br/><br/>
                      Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC. Richard McClintock looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
                    </p>
                    <button>Read More</button>
                  </section>
              
              <section class="contact-us">
                <h1>Contact Us</h1>
                <div class="flex">
                  <div id="map" class="map">
                    <img src="images/map.jpg" alt="Map" />
                  </div>
                  <div class="contact-form">
                    <address>
                      #478,Rajarajeshwari Nagar<br/>
                      Bengaluru-98<br/>
                      santosh@abiistudio.com<br/>
                      Tel: 080-28611536
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
                <small>&copy; 2021 The Mottorrad Company.  Proudly created by abiistudio.</small>
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
           </script>
     </body>
 </html>