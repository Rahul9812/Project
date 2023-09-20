<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-commerce Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="navbar">
      <div class="nav">
        <h2 class="logo"><span class="span">digital</span>Bazar</h2>
        <nav class="navbar">
          <a href="home.php">Home</a>
          <a href="about.php">About</a>
          <a href="products.php">Products</a>
          <a href="contact.php">Contact</a>
          <a href="user/user_login.php" class="loginBtn">Login</a>
          <label class="cartIcon"
          ><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a></label
          >
        </nav>
        <div class="search">
          <input type="text" placeholder="Search.." name="search" />
          <a href="#" class="icon"><i class="fa fa-search"></i></a>
        </div>
      </div>
    </header>

    <section class="page-header contact">
      <h2>Let's talk!</h2>
      <p>Leave a message, We love to hear from you!</p>
    </section>

    <section class="formDetails">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear form you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="Email">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button>Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="img/rahul2.jpg">
                <p><span>Rahul Shrestha</span> Owner 
                <br> Email: rahul@gmail.com
                </p>
            </div>
            <div>
                <img src="img/kushal.jpg">
                <p><span>Kushal Khadka</span> Owner 
                <br> Email: kushal@gmail.com
                </p>
            </div>
        </div>
    </section>

    <footer class="section-p1">
      <div class="col">
        <h2 class="logo">
          <span class="span">digital</span><span class="bazar">Bazar</span>
        </h2>
        <h4>Contacts:</h4>
        <p><strong>Email:</strong> digitalBazar01@gmail.com</p>
        <p><strong>Phone:</strong>+01 7890123 / +977 9841123456</p>
        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
          </div>
        </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms and Conditions</a>
        <a href="#">Contact us</a>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign in</a>
        <a href="#">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>
      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="row">
          <img src="img/pay/app.jpg" />
          <img src="img/pay/play.jpg" />
        </div>
      </div>
      <div class="copyright">
        <p>© 2023, Rahul and Kushal - E-commerce Website</p>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>