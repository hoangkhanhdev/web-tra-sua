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
        $sql = "SELECT * 
        FROM sanpham1
       
        order by rand()
          limit 8";
    //Bước 3
    $result = mysqli_query($conn, $sql);

?>

    <style>
 
.ht__cat__thumb img{
height:250px !important;
width: 250px !important;
}
.fr__product__inner h4{
    text-align:center !important;
}
.fr__product__inner h4{
    margin-top:20px !important;
    text-transform: uppercase;
}
li{
    margin-top:4px !important;
margin-bottom:10px !important;
    font-size: 20px;
  font-weight: bold;
  background-image: linear-gradient(to right, #ff6b6b, #ffa500);
  -webkit-background-clip: text;

  text-align:center !important;
}
    </style>
<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>Trà Sữa</h2>
                                        <h1>Thơm Béo Vị Sữa, Đậm Vị Trà</h1>
                                        <div class="cr__btn">
                                            <a href="fullsp.php">Mua Ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="upload/a4.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                        <h2>Trà Sữa</h2>
                                        <h1>Thơm Béo Vị Sữa, Đậm Vị Trà</h1>
                                        <div class="cr__btn">
                                            <a href="fullsp.php">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="upload/a5.png" alt="slider images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Sản Phẩm Hot</h2>
                            <p>Trai Nghiệm Ngay Để Mang Về Những Ưu Đãi Không Đâu Có</p>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                          
                        <div class="product__list clearfix mt--30">
                            <!-- Start Single Category -->
                        <?php       $limit = 8; 
                            $count = 0; 
                            while ($row= mysqli_fetch_assoc($result)) { 
                                if ($count >= $limit) {
                                    break; 
                                }    
                        ?>   
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                                
                           
                                <div class="category">
                            
                                    <div class="ht__cat__thumb">
                          
                                    <a  onclick="window.location.href='chitiet.php?masp=<?php echo $row["masp"] ?>';">
                                        <img src="upload/<?php echo $row["img1"] ?>" alt="product images" class="a">
                                        </a>
                                    </div>
                                    <!-- <div class="fr__hover__info">
                                        <ul class="product__action">
                                           
                                            <li><a href="cart.php"><i class="icon-handbag icons">Giỏ Hàng</i></a></li>

                                          
                                        </ul>
                                    </div> -->
                                    <div class="fr__product__inner">
                                        <h4><?php echo $row["tensp"] ?></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"></li>
                                            <li><?php echo $row["dongiamoi"] ?> 000 VNĐ</li>
                                        
                                        </ul>
                                    </div>
                                </div>
                            
                            </div>  
                              <?php 
                            $count++;    
                            } 
                        ?>
                            <!-- End Single Category -->
                           
                            <!-- End Single Category -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
