
<?php 	  session_start();
//   if(isset($_SESSION)){

//   }
 
 
 ?>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webtrasua";

    //B1: Create connetion
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //check connection
    
    if (!$conn) {
        die("connection failer" . mysqli_connect_error());
    }
    //B2:
    $sql_nhom = "SELECT * FROM `sanpham_nhom` ";
   ;
    //Bước 3
    $result_nhom = mysqli_query($conn, $sql_nhom);
   
    $addToCartClicked = isset($_POST['addcart']);

    if ($addToCartClicked && !isset($_SESSION['user'])) {
        // Người dùng chưa đăng nhập và đã nhấn nút "Thêm vào giỏ hàng"
        // Chuyển hướng đến trang login.php
        header("Location: login.php");
        exit();
    }

   
    ?>	
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Asbab - eCommerce HTML5 Templatee</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="as/images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="as/css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="as/css/owl.carousel.min.css">
    <link rel="stylesheet" href="as/css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="as/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="as/css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="as/css/shortcode/header.css">
    <!-- Theme main style -->
    <!-- <link rel="stylesheet" href="as/css/style.css"> -->
    <!-- Responsive css -->
    <link rel="stylesheet" href="as/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="as/css/custom.css">


    <!-- Modernizr JS -->
    <script src="as/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <a href="index.php"><img src="as/images/logo/logo.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.php">Trang Chủ</a></li>
                                       
                                        
                                        <li class="drop"><a href="#">Product</a>
                                            <ul class="dropdown">
                                               
                                                <?php while ($row_nhom = mysqli_fetch_assoc($result_nhom)) { ?>
                       <li>     <a href="cat.php?nhom_id=<?php echo $row_nhom["id"]?>"><?php echo  $row_nhom["tennhom"] ?></a></li>
                            <?php } ?>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="tintuc.php">Tin Tức</a></li>
                                        <li><a href="lienhe.php">Liên Hệ</a></li>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="cart.html">Cart page</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                    <li><a href="product-grid.html">product grid</a></li>
                                                    <li><a href="product-details.html">product details</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>  
                            </div>
                        
                        
                    </form>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                      <div class="header__search search search__open">
                                       
                                    </div>
                                <?php if(isset($_SESSION['user'])){ ?>
                                  
                                    <div class="header__account">
                                        <a href="#"><?php echo $_SESSION['user']; ?></a>
                                    </div>
                                    <div class="header__account">
                                        <a href="logout.php">Logout</a>
                                    </div>
                                   
                            <div class="htc__shopping__cart">
                            <a class="cart__menu" href="cart.php"><i class="icon-handbag icons"></i>
                            <a href="cart.php"><span class="htc__qua"><?php echo isset($_SESSION['giohang']) ? count($_SESSION['giohang']) : 0; ?></span></a>
                      
			
                                    <?php } else { ?>
                                       
                                        <div class="header__account">
                                        <a href="login.php">Login</a>
                                    </div>
                                    <div class="header__account">
                                        <a href="dangki.php">Register</a>
                                    </div>
                                     <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="cart.php"><i class="icon-handbag icons"></i></a>
                                        <a href="#"><span class="htc__qua">0</span></a>
                                    </div>
                                    <?php } ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
            </header>
            <!-- End Header Area -->
            

        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                    <form action="timkiemsp.php" method="GET">
                                    <input placeholder="Tìm kiếm... " type="text" value="<?php if(isset($_GET['timkiem'])) 
                        {
                            echo $_GET['timkiem'];} ?> " >
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->