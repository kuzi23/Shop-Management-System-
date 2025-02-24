<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<!-- Header -->
<header class="bg-red text-white py-3">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
            <!-- Logo -->
            <!-- <div class="mb-3 mb-md-0">
                <img src="images/logo.png" alt="Logo" class="logo">
            </div> -->
            <!-- Search Form -->
            <form class="form-inline mx-auto search-form mb-3 mb-md-0">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search product" aria-label="Search">
                    <!-- <select class="custom-select" id="inputGroupSelect04" style="border: none;">
                        <option selected>Choose category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                    </select> -->
                    <div class="input-group-append">
                        <button class="btn btn-outline-light text-red" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Login/Signup and Cart -->
            <div>
                <a href="./login.php" class="btn btn-outline-light mr-2"><i class="fas fa-lock"></i> Login/Signup</a>
                <!-- <button class="btn btn-outline-light"><i class="fas fa-shopping-cart"></i> Cart (0)</button> -->
            </div>
        </div>
    </div>
</header>

  <!-- Navbar -->
  <div class="container">
 <nav class="navbar navbar-expand-lg navbar-light bg-light menu">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">HOME</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#">SHOP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ACCESSORIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">WATCHES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SMARTPHONE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">GAMING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">NEWS LETTER</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ABOUT US</a>
            </li> -->
        </ul>
        <!-- Contact Info -->
        <div class="contact-info d-none d-lg-block" style="text-align: right;">
            <p><i class="fas fa-phone-alt"></i> +250 07888888</p>
        </div>
    </div>
</nav>
</div>

<!-- Main Content -->
<div class="container mt-4">
    <div class="row">
        <!-- Category Sidebar -->
        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action bg-red text-white">Categories</a>
                <a href="#" class="list-group-item list-group-item-action">Product </a>
                <a href="#" class="list-group-item list-group-item-action">Accessories</a>
                
            </div>
        </div>
        
        <!-- Product Carousel -->
        <div class="col-md-6">
            <div class="slideshow-container">

                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="img/1.jpg" style="width:100%">
                  <div class="text">Product1</div>
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="img/2.jpg" style="width:100%">
                  <div class="text">Product 2</div>
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="img/3.jpg" style="width:100%">
                  <div class="text">Product3</div>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
                
                <script>
                let slideIndex = 0;
                showSlides();
                
                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }
                
                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }
                
                function showSlides() {
                  let i;
                  let slides = document.getElementsByClassName("mySlides");
                  let dots = document.getElementsByClassName("dot");
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
                  setTimeout(showSlides, 3000); // Change image every 3 seconds
                }
                </script>
            <br>
            <div class="notice p-2 mt-1">
            <p style="color: white;">New Products Available For You</p>
            <button style="float: right; margin-top: -30px; background-color: white; border: none;
            border-radius: 4px;" class="order">Order now</button>
        </div>
        </div>
        
        <!-- Contact Numbers -->
        <div class="col-md-3">
            <div class="contact bg-red text-white p-3">
                <h5>Contact Us</h5>
                <p><i class="fas fa-phone-alt"></i> Phone: +250 7888888</p>
                <p><i class="fas fa-envelope"></i> Email: blessedworries@gmail.com</p>
            </div>
        </div>
    </div>
    
</div>
<br>


    <!-- Latest Products Section -->
    <div class="container mt-4">
        <h2 class="text-left mb-4">Latest Products</h2>

        <div class="row">
            <!-- Search Box -->
            <div class="col-md-3">
                <form class="form-inline mb-4">
                    <input class="form-control mr-2" type="search" placeholder="Search latest products" aria-label="Search">
                    <button class="btn btn-outline-" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>

            <!-- Product Image Scroller -->
            <div class="col-md-6">
                <div id="latestProductScroller" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active bg-light">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="img/4.jpg" class="d-block w-100" alt="Latest Product 1">
                                    <p class="text-center">Product 1<br><strong>10000 Rwf</strong></p>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/5.jpg" class="d-block w-100" alt="Latest Product 2">
                                    <p class="text-center">Product 2<br><strong>15000 Rwf</strong></p>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/6.jpg" class="d-block w-100" alt="Latest Product 3">
                                    <p class="text-center">Product 3<br><strong>12000 Rwf</strong></p>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/7.jpg" class="d-block w-100" alt="Latest Product 4">
                                    <p class="text-center">Product 4<br><strong>12000 Rwf</strong></p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item bg-light">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="img/8.jpg" class="d-block w-100" alt="Latest Product 5">
                                    <p class="text-center">Product 5<br><strong>10000 Rwf</strong></p>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/9.jpg" class="d-block w-100" alt="Latest Product 6">
                                    <p class="text-center">Product 6<br><strong>15000 Rwf</strong></p>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/10.jpg" class="d-block w-100" alt="Latest Product 7">
                                    <p class="text-center">Product 7<br><strong>12000 Rwf</strong></p>
                                </div>
                                <div class="col-md-3">
                                    <img src="img/11.jpg" class="d-block w-100" alt="Latest Product 8">
                                    <p class="text-center">Product 8<br><strong>12000 Rwf</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#latestProductScroller" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#latestProductScroller" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!-- Ads Section -->
            <div class="col-md-3">
                <div class="ad-section text-white p-3">
                    <h5>Advertisement</h5>
                    <p>Place your ad here</p>
                    <!--place the ads here-->
                </div>
            </div>
        </div>
    </div>


<!-- Shop with Categories Section -->
<div class="container mt-4">
    <h4 class="text-left mb-4">Shop by Categories</h4>
    <div class="row">
        <!-- Category 1 -->
        <div class="col-md-3 mb-4">
            <div class="category-card">
                <img src="img/12.jpg" class="card-img-top" alt="Category 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Category 1</h5>
                </div>
            </div>
        </div>
        <!-- Category 2 -->
        <div class="col-md-3 mb-4">
            <div class="category-card">
                <img src="img/13.jpg" class="card-img-top" alt="Category 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Category 2</h5>
                </div>
            </div>
        </div>
        <!-- Category 3 -->
        <div class="col-md-3 mb-4">
            <div class="category-card">
                <img src="img/14.jpg" class="card-img-top" alt="Category 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Category 3</h5>
                </div>
            </div>
        </div>
        <!-- Category 4 -->
        <div class="col-md-3 mb-4">
            <div class="category-card">
                <img src="img/15.jpg" class="card-img-top" alt="Category 4">
                <div class="card-body text-center">
                    <h5 class="card-title">Category 4</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Featured Products Section -->
<div class="container mt-4">
    <h2 class="text-left mb-4">Featured Products</h2>
    <div class="row">
        <!-- Product 1 -->
        <div class="col-md-4 mb-4">
            <div class="product-card card">
                <img src="img/16.jpg" class="card-img-top img-fluid" alt="Featured Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product Name 1</h5>
                    <p class="card-text">Price: 46700 RWF</p>
                </div>
            </div>
        </div>
        <!-- Product 2 -->
        <div class="col-md-4 mb-4">
            <div class="product-card card">
                <img src="img/17.jpg" class="card-img-top img-fluid" alt="Featured Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product Name 2</h5>
                    <p class="card-text">Price: 35000 RWF</p>
                </div>
            </div>
        </div>
        <!-- Product 3 -->
        <div class="col-md-4 mb-4">
            <div class="product-card card">
                <img src="img/19.jpg" class="card-img-top img-fluid" alt="Featured Product 3">
                <div class="card-body">
                    <h5 class="card-title">Product Name 3</h5>
                    <p class="card-text">Price: 5000 RWF</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class="bg-red text-white pt-4 pb-3">
    <div class="container">
        <div class="row">
            <!-- Left: Logo -->
            <!-- <div class="col-md-4 mb-3">
                <img src="images/logo.png" alt="Logo" class="footer-logo">
            </div> -->

            <!-- Center: Privacy Links and Quickly Shop with Us -->
            <div class="col-md-4 mb-3 text-center">
                <h5>Privacy Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Privacy Policy</a></li>
                    <li><a href="#" class="text-white">Terms of Service</a></li>
                </ul>
                <h5 class="mt-4">Quickly Shop with Us</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Product</a></li>
                    <li><a href="#" class="text-white">Accessories</a></li>
                </ul>
            </div>

            <!-- Right: Contact Details -->
            <div class="col-md-4 mb-3">
                <h5>Contact Details</h5>
                <p>Phone: +250 7888888888</p>
                <p>Email: blessedworries@gmail.com</p>
                <p>Address: Rwanda, Kigali</p>
            </div>
        </div>
    </div>
    <!-- Bottom: Copyright Notice -->
    <div class="bg-dark text-white text-center py-2">
        <p class="mb-0">&copy; 2024 blessedworries All rights reserved.</p>
    </div>
</footer>

    <!-- Scroll to Top Button -->
<a href="#" class="scroll-to-top">
    <i class="fas fa-arrow-up"></i>
</a>
    <script>
    window.addEventListener('scroll', function() {
        const scrollToTopButton = document.querySelector('.scroll-to-top');
        if (window.scrollY > 300) { // Show button if scrolled more than 300px
            scrollToTopButton.classList.add('show');
        } else {
            scrollToTopButton.classList.remove('show');
        }
    });
    document.querySelector('.scroll-to-top').addEventListener('click', function(event) {
        event.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>




<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/cbf3a36d83.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
