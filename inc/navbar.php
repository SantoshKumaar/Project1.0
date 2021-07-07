

   
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
                <?php 
                if(!isset($_SESSION['username']))
                {
                  echo "<li><a href='logout.php'>Logout</a></li>";
                }
                else{
                  echo "<li><a href='login1.php'>Login</a></li>";
                }
                ?>
                
               <!--  <div class="dropdown">
                    <button class="dropbtn">Sign In </button> 
                    <div class="dropdown-content">
                      <a href="#">Customer</a>
                      <a href="#">Admin</a>
                  
                    </div>-->
                  </div>
              </ul>
            </nav>
          </div>
        </header>
        
       