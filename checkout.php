<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="Assests/css/Stylesheet.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
	<header>
  <div class="container">
    <div class="Top-bar">
      <!-- Logo -->
      <div class="logo text-center">
        <a href="index.html">
          <img src="Assests/Images/Sumie-Therapy-world.png" alt="The Therapy Store Logo" class="logo-img img-fluid">
        </a>
      </div>

      <!-- Search Bar -->
      <div class="search-bar">
        <form class="form-inline" style="width: 100%;">
          <input type="search" class="form-control" placeholder="search..." aria-label="Search">
          <button class="btn btn-primary" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </form>
      </div>

      <!-- Account and Cart Icons (Hidden on Small Screens) -->
  <div class="account-cart">
    <a href="#" class="account-link"><i class="fas fa-user"></i> My Account</a>
    <a href="cart.html" class="cart-link">
      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
      <span id="cart-count">Cart</span>
    </a>
  </div>
		
		
		
		
		
    </div>
  </div>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbarline">
  <!-- Toggle Button (Small Screens Only) -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
    <span>Menu</span>
  </button>

  <!-- Collapsible Navbar -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Shop by Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="toys.html">Play Toys</a>
          <a class="dropdown-item" href="puzzles.html">Puzzles</a>
          <a class="dropdown-item" href="charts.html">Learning Charts</a>
          <a class="dropdown-item" href="speech.html">Speech and Language therapy Materials</a>
          <a class="dropdown-item" href="bags.html">Kids School bags</a>
          <a class="dropdown-item" href="sensory.html">Multisensory materials</a>
          <a class="dropdown-item" href="writing.html">Writing boards</a>
          <a class="dropdown-item" href="blocks.html">Blocks</a>
			<a class="dropdown-item" href="montessori.html">Montessori materials</a>
			<a class="dropdown-item" href="preschool.html">Pre-school and Kindergarten materials</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">FAQs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>

  <!-- Navbar Icons for Small Screens -->
<div class="navbar-icons">
  <a href="cart.html" class="nav-link">
    <i class="fas fa-shopping-cart"></i>
    <span>Cart</span>
  </a>
  <div class="dropdown nav-link">
    <a href="#" class="dropdown-toggle" id="shopDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-store"></i>
      <span>Shop by Category</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="shopDropdown">
     <a class="dropdown-item" href="toys.html">Play Toys</a>
      <a class="dropdown-item" href="puzzles.html">Puzzles</a>
      <a class="dropdown-item" href="charts.html">Learning Charts</a>
      <a class="dropdown-item" href="preschool.html">Pre-school and Kindergarten</a>
      <a class="dropdown-item" href="speech.html">Speech and Language Therapy Materials</a>
      <a class="dropdown-item" href="bags.html">Kids School Bags</a>
      <a class="dropdown-item" href="sensory.html">Multi-Sensory Materials</a>
      <a class="dropdown-item" href="blocks.html">Blocks</a>
      <a class="dropdown-item" href="writing.html">Writing Boards</a>
		<a class="dropdown-item" href="occupational.html">Occupational therapy Materials</a>
		<a class="dropdown-item" href="montessori.html">Montessori Materials</a>
    </div>
  </div>
  <a href="account.html" class="nav-link">
    <i class="fas fa-user"></i>
    <span>Account</span>
  </a>
</div>

</nav>
	
  <div class="container">
    <h2>Checkout</h2>
    <form id="checkout-form">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="address">Shipping Address</label>
        <textarea id="address" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <label for="payment-method">Payment Method</label>
        <select id="payment-method" class="form-control" required>
          <option value="mobile-money">Mobile Money</option>
          <option value="debit-card">Debit Card</option>
          <option value="cash-on-delivery">Cash on Delivery</option>
        </select>
      </div>
      <button class="btn btn-success" type="submit">Place Order</button>
    </form>
  </div>
	
	
	<!-- Information Section -->
<section class="information-section">
    <div class="container">
        <div class="row">
            <!-- Connect Section -->
            <div class="col-md-3">
                <h5>CONNECT</h5>
                <ul class="contact-info">
                    <li><i class="fas fa-phone-alt"></i> ph: 0779 000 000</li>
                    <li><i class="fas fa-envelope"></i> summietherapyworld@gmail.com</li>
                </ul>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <!-- Products Section -->
          <div class="col-md-3">
            <h5>PRODUCTS</h5>
              <ul class="product-list">
  <li><a href="toys.html">Play Toys</a></li>
          <li><a href="puzzles.html">Puzzles</a></li>
          <li><a href="charts.html">Learning Charts</a></li>
          <li><a href="preshool.html">Pre-school and Kindergarten</a></li>
          <li><a href="speech.html">Speech and language therapy Materials</a></li>
          <li><a href="kids.html">Kids school bags</a></li>
          <li><a href="Mutisensory">Multisensory Materials</a></li>
          <li><a href="blocks.html">Blocks</a></li>
          <li><a href="writing.html">Writing boards</a></li>
          <li><a href="montessori.html">Montessori Materials</a></li>
          <li><a href="occupational.html">Occupational therapy Materials</a></li>
              </ul>
            </div>
            <!-- Quick Links Section -->
            <div class="col-md-3">
                <h5>QUICK LINKS</h5>
                <ul class="quick-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shopping by Category</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <!-- Stay in Touch Section -->
            <div class="col-md-3">
    <h5>SIGN UP</h5>
    <form class="subscribe-form" action="scripts/signup.php" method="POST">
        <div class="form-group">
            <label for="signupName">Full Name</label>
            <input type="text" id="signupName" name="name" class="form-control" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="signupEmail">Email Address</label>
            <input type="email" id="signupEmail" name="email" class="form-control" placeholder="Enter your email address" required>
        </div>
        <div class="form-group">
            <label for="signupPassword">Password</label>
            <input type="password" id="signupPassword" name="password" class="form-control" placeholder="Enter your password" required>
        </div>
        <div class="form-group">
            <label for="signupConfirmPassword">Confirm Password</label>
            <input type="password" id="signupConfirmPassword" name="confirm_password" class="form-control" placeholder="Confirm your password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
    </form>
</div>
        </div>
    </div>
</section>

<!-- Footer Section -->
<footer class="footer">
    <div class="container text-center">
        <p>Copyright &copy; 2024 Summie Therapy Store</p>
    </div>
</footer>
	
  <script>
    document.getElementById('checkout-form').addEventListener('submit', function (e) {
      e.preventDefault();
      alert('Order placed successfully!');
      localStorage.removeItem('cart');
      window.location.href = 'confirmation.html';
    });
  </script>
</body>
</html>