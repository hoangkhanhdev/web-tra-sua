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
          limit 4";
    //Bước 3
    $result = mysqli_query($conn, $sql);

?>
<style>
   .testimonial__thumb img{
    height:200px !important;
    width: 200px !important;
   }
h4{
    font-size:20px;
margin-top: 20px !important;
   }
   </style>
 <!-- Start Testimonial Area -->
 <section class="htc__testimonial__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="ht__testimonial__activation clearfix">
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 col-md-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="upload/a4.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#">Trà Sữa Khoai Môn</a></h4>
                                    <p>Nước ép cam rất giàu vitamin C, cung cấp khoảng 50-70 mg vitamin C/100 ml. Vitamin C là chất chống oxy hóa quan trọng, giúp tăng cường hệ miễn dịch.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 col-md-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="upload/a2.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#">Trà Sữa Dâu Tây</a></h4>
                                    <p>Nước ép lựu chứa nhiều vitamin C, khoáng chất và chất chống oxy hóa giúp tăng cường hệ miễn dịch, hỗ trợ cơ thể chống lại các bệnh nhiễm trùng và ốm vặt.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 col-md-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="upload/a6.png" alt="testimonial images">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#">Trà Sữa Đường Đen</a></h4>
                                    <p>Cà chua có chỉ số đường huyết thấp, giúp kiểm soát lượng đường trong máu và hỗ trợ điều trị bệnh tiểu đường.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                        <!-- Start Single Testimonial -->
                        <div class="col-lg-6 col-md-6 single__tes">
                            <div class="testimonial">
                                <div class="testimonial__thumb">
                                    <img src="upload/a7.png" alt="testimonial images" class="e">
                                </div>
                                <div class="testimonial__details">
                                    <h4><a href="#">Trà Sữa Nướng</a></h4>
                                    <p>Các chất như lycopene, vitamin C và vitamin E trong cà chua có tác dụng chống ung thư, đặc biệt là các loại ung thư như ung thư tuyến tiền liệt, ung thư phổi và ung thư dạ dày.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Testimonial -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Area -->
        <!-- Start Product Area -->
        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Sản Phẩm Bán Chạy Nhất</h2>
                            <p>Hãy Cùng Tôi Trải Nghiệm Nào</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__wrap clearfix">
                           <?php       $limit = 8; 
                            $count = 0; 
                            while ($row= mysqli_fetch_assoc($result)) { 
                                if ($count >= $limit) {
                                    break; 
                                }    
                        ?> 
                        <!-- Start Single Category -->
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
                    </div>
                </div>
            </div>
        </section>
        <script src="as/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="as/js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="as/js/plugins.js"></script>
    <script src="as/js/slick.min.js"></script>
    <script src="as/js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="as/s/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="as/js/main.js"></script>
