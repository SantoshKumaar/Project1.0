<!DOCTYPE html>
<html> <head>
    <title>
         Home Page
    </title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0, maxium-scale=1.0">
    <link href="testride.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="wrapper">
        <!-- Navbar -->
    <?php include('inc/navbar.php'); ?>
     <!-- Navbar -->
    <section class="about-us">
        <div class="container">
            <form action="/action_page.php">
              <div class="row">
                <div class="col-25">
                  <label for="fname">First Name</label>
                </div>
                <div class="col-75">
                  <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="lname">Last Name</label>
                </div>
                <div class="col-75">
                  <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="bike">Select Bike</label>
                </div>
                <div class="col-75">
                  <select id="bike" name="bike">
                    <option value="1250 GS Adventure">1250 GS Adventure</option>
                    <option value="Tiger 1200">Tiger 1200</option>
                    <option value="Multistrada1260">Multistrada1260</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-25">
                  <label for="address">Delivery Address</label>
                </div>
                <div class="col-75">
                  <textarea id="address" name="address" placeholder="Enter Address.." style="height:200px"></textarea> 
              </div>
              <div class="row">
                <input type="submit" value="Submit">
              </div>
            </form>
          </div>
      </section>
</html>