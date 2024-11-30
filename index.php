<?php
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Summie Therapy World</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">
<link href="Assests/css/Stylesheet.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body style="padding-top: 70px">

<header>
  <div class="container">
    <div class="Top-bar">
      <!-- Logo -->
      <div class="logo text-center">
        <a href="index.php">
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

      <!-- Account and Cart Section -->
      <div class="account-cart">
        <?php if (isset($_SESSION['user_id'])): ?>
          <span>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</span>
          <a href="scripts/logout.php" class="account-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
        <?php else: ?>
          <a href="#" class="account-link" data-toggle="modal" data-target="#authModal"><i class="fas fa-user"></i> Login/Sign Up</a>
        <?php endif; ?>
        <a href="cart.php" class="cart-link">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <span id="cart-count">Cart</span>
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbarline">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
    <span>Menu</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop by Category</a>
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
      <li class="nav-item"><a class="nav-link" href="#">FAQs</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
    </ul>
  </div>
</nav>

<!-- Modals for Login and Sign-Up -->
<div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="authModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="authModalLabel">Login / Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Nav Tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a>
          </li>
        </ul>
        <!-- Tab Content -->
        <div class="tab-content">
          <!-- Login Form -->
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form action="scripts/login.php" method="POST" class="mt-3">
              <div class="form-group">
                <label for="loginEmail">Email Address</label>
                <input type="email" class="form-control" id="loginEmail" name="email" required>
              </div>
              <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" class="form-control" id="loginPassword" name="password" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
          </div>
          <!-- Sign-Up Form -->
          <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
            <form action="scripts/signup.php" method="POST" class="mt-3">
              <div class="form-group">
                <label for="signupName">Full Name</label>
                <input type="text" class="form-control" id="signupName" name="name" required>
              </div>
              <div class="form-group">
                <label for="signupEmail">Email Address</label>
                <input type="email" class="form-control" id="signupEmail" name="email" required>
              </div>
              <div class="form-group">
                <label for="signupPassword">Password</label>
                <input type="password" class="form-control" id="signupPassword" name="password" required>
              </div>
              <div class="form-group">
                <label for="signupConfirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="signupConfirmPassword" name="confirm_password" required>
              </div>
              <button type="submit" class="btn btn-success btn-block">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="navbar-icons">
  <!-- Cart Icon -->
  <a href="cart.html" class="nav-link">
    <i class="fas fa-shopping-cart"></i>
    <span>Cart</span>
    <?php if (isset($_SESSION['cart_count']) && $_SESSION['cart_count'] > 0): ?>
      <span class="badge"><?php echo $_SESSION['cart_count']; ?></span>
    <?php endif; ?>
  </a>

  <!-- Shop Dropdown -->
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

  <!-- Account/Sign-Up/Logout -->
  <div class="dropdown nav-link">
    <a href="#" class="dropdown-toggle" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user"></i>
      <span>Account</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="accountDropdown">
      <?php if (isset($_SESSION['user_name'])): ?>
        <p class="dropdown-item">Hello, <?php echo $_SESSION['user_name']; ?></p>
        <a class="dropdown-item" href="logout.php">Logout</a>
      <?php else: ?>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#signupModal">Sign-Up</a>
      <?php endif; ?>
    </div>
  </div>
</div>



<?php
// Check if the logout parameter is set in the URL
if (isset($_GET['logout']) && $_GET['logout'] === 'success') {
    echo '<div id="logoutMessage" class="alert alert-success">You have successfully logged out.</div>';
}
?>





<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active"> <img class="d-block mx-auto img-fluid" src="Assests/Images/Carousel-sumie.png" alt="First slide">
      <div class="carousel-caption">
        <h5>First slide Heading</h5>
        <p>First slide Caption</p>
      </div>
    </div>
    <div class="carousel-item"> <img class="d-block mx-auto" src="images/Carousel_Placeholder.png" alt="Second slide">
      <div class="carousel-caption">
        <h5>Second slide Heading</h5>
        <p>Second slide Caption</p>
      </div>
    </div>
    <div class="carousel-item"> <img class="d-block mx-auto img-fluid" src="images/Carousel_Placeholder.png" alt="Third slide">
      <div class="carousel-caption">
        <h5>Third slide Heading</h5>
        <p>Third slide Caption</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<main>
  <div class="background-section-1">
    <div class="container">
<h3>Featured products</h3>
      
      <div class="row">
        <div class="col-xl-3"><img src="images/Carousel_Placeholder.png" alt="" width="600" height="400" class="img-fluid"/> </div>
        <div class="col-xl-3"><img src="images/Carousel_Placeholder.png" alt="" width="600" height="400" class="img-fluid"/></div>
        <div class="col-xl-3"><img src="images/Carousel_Placeholder.png" alt="" width="600" height="400" class="img-fluid"/></div>
        <div class="col-xl-3"><img src="images/Carousel_Placeholder.png" alt="" width="600" height="400" class="img-fluid"/></div>
      </div>
    </div>
  </div>
  <div class="container">
    <section class="about-the-shop">
      <h3>About our therapy shop</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in.</p>
    </section>
  </div>
  <div class="container">
    <section class="the-blog">
      <h3>Our Blog</h3>
		
		
	  <div class="row">
		  <div class="col-xl-4"><div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="images/card-img.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a> </div>
      </div></div>
		  <div class="col-xl-4"> <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="images/card-img.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> </div>
      </div></div>
		  <div class="col-xl-4"> <div class="card col-md-4 col-xl-12"> <img class="card-img-top" src="images/card-img.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> </div>
      </div></div>
	  </div>

        
     

    </section>
  </div>
	
	<!-- Information Section -->
<section class="information-section">
  <div class="container">
      <div class="row">
          <!-- Connect Section -->
          <div class="col-md-4">
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
          <div class="col-md-4">
              <h5>PRODUCTS</h5>
              <ul class="product-list">
                  <li><a href="toys.html">Play Toys</a></li>
                  <li><a href="puzzles.html">Puzzles</a></li>
                  <li><a href="charts.html">Learning Charts</a></li>
                  <li><a href="preshool.html">Pre-school and Kindergarten</a></li>
                  <li><a href="speech.html">Speech and Language therapy Materials</a></li>
                  <li><a href="kids.html">Kids school bags</a></li>
                  <li><a href="Mutisensory">Multisensory Materials</a></li>
                  <li><a href="blocks.html">Blocks</a></li>
                  <li><a href="writing.html">Writing boards</a></li>
                  <li><a href="montessori.html">Montessori Materials</a></li>
                  <li><a href="occupational.html">Occupational therapy Materials</a></li>
              </ul>
          </div>

          <!-- Quick Links Section -->
          <div class="col-md-4">
              <h5>QUICK LINKS</h5>
              <ul class="quick-links">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Shopping by Category</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Contact</a></li>
              </ul>
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

	
	
</main>
<script>
    // Get the logout message element
    const logoutMessage = document.getElementById('logoutMessage');
    
    // Check if the logout message exists
    if (logoutMessage) {
        // Add an event listener to the document for any click
        document.addEventListener('click', function () {
            // Remove the logout message
            logoutMessage.style.display = 'none';
        });
    }
</script>

<script src="js/jquery-3.4.1.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.4.1.js"></script>
</body>
</html>
