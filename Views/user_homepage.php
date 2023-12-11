<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- https://cocoshop.vn/ -->
<!-- http://mauweb.monamedia.net/vanihome/ -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Font roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Icon fontanwesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Reset css & grid sytem -->
    <link rel="stylesheet" href="./assets/css/library.css">
    <link href="./assets/owlCarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- Layout -->
    <link rel="stylesheet" href="./assets/css/common.css">
    <!-- index -->
    <link href="./assets/css/home.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Owl caroucel Js-->
    <script src="./assets/owlCarousel/owl.carousel.min.js"></script>

</head>

<body>
    <?php
    require('header.php');
    ?>
    <div class="main">
        <!-- Slider -->
        <div class="main__slice">
            <div class="slider">
                <div class="slide active" style="background-image:url(./assets/img/slider/slide-6.jpg)">
                    <div class="container">
                        <div class="caption">
                            <h1>Five Study - Học mọi lúc mọi nơi</h1>
                            <p>Khám phá ngay các khóa học của chúng tôi</p>
                            <a href="user_listProduct.html" class="btn btn--default">Xem ngay</a>

                        </div>
                    </div>
                </div>
                <div class="slide active" style="background-image:url(./assets/img/slider/slide-4.jpg)">
                    <div class="container">
                        <div class="caption">
                            <h1>Five Study - Học mọi lúc mọi nơi</h1>
                            <p>Khám phá ngay các khóa học của chúng tôi</p>
                            <a href="user_listProduct.html" class="btn btn--default">Xem ngay</a>

                        </div>
                    </div>
                </div>
                <div class="slide active" style="background-image:url(./assets/img/slider/slide-5.jpg)">
                    <div class="container">
                        <div class="caption">
                            <h1>Five Study - Học mọi lúc mọi nơi</h1>
                            <p>Khám phá ngay các khóa học của chúng tôi</p>
                            <a href="user_listProduct.html" class="btn btn--default">Xem ngay</a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- controls  -->
            <div class="controls">
                <div class="prev">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div class="next">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <!-- indicators -->
            <div class="indicator">
            </div>
        </div>
        <!--Product Category -->
        <div class="main__tabnine">
            <div class="grid wide">
                <!-- Tab items -->
                <div class="tabs">
                    <div class="tab-item active">
                        Tất cả khóa học
                    </div>
                    <div class="tab-item">
                        Đề xuất 
                    </div>
                    <div class="tab-item">
                        Mới 
                    </div>
                    <div class="line"></div>
                </div>
                <!-- Tab content -->
                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product1.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Đại Số 10</h3>
                                        <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                        <div class="product__price">
                                            <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                        </div>
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                    
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product5.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Hình Học 10</h3>
                                        <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                        <div class="product__price">
                                            <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                        </div>
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                               
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product2.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Giải Tích 11</h3>
                                        <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                        <div class="product__price">
                                           
                                            <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                        </div>
                                       
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                  
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product3.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Hình Học 11</h3>
                                        <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                        <div class="product__price">
                                            
                                            <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                        </div>
                                       
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                            
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product6.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Giải Tích 12</h3>
                                        <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                        <div class="product__price">
                                            
                                            <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                        </div>
                                       
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                  
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product4.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Hình Học 12</h3>
                                        <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                        <div class="product__price">
                                            
                                            <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                        </div>
                                     
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                    
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product7.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Tiếng Anh 10</h3>
                                        <h3 class="teacher__name">Cô Trang Anh</h3>
                                        <div class="product__price">
                                            
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                     
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                           
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product8.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Tiếng Anh 11</h3>
                                        <h3 class="teacher__name">Cô Trang Anh</h3>
                                        <div class="product__price">
                                            
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                        
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                    
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product9.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Tiếng Anh 12</h3>
                                        <h3 class="teacher__name">Cô Trang Anh</h3>
                                        <div class="product__price">
                                           
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                      
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                   
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product10.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Ngữ Văn 10</h3>
                                        <h3 class="teacher__name">Cô Lệ Quyên</h3>
                                        <div class="product__price">
                                            
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                      
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                  
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product11.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Ngữ Văn 11</h3>
                                        <h3 class="teacher__name">Cô Lệ Quyên</h3>
                                        <div class="product__price">
                                            
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                       
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                  
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product12.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Ngữ Văn 12</h3>
                                        <h3 class="teacher__name">Cô Lệ Quyên</h3>
                                        <div class="product__price">
                                            
                                            <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                        </div>
                                       
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                    
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product13.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Vật Lý 11</h3>
                                        <h3 class="teacher__name">Thầy Lại Đắc Hợp</h3>
                                        <div class="product__price">
                                           
                                            <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                                        </div>
                                        
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                   
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product14.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Vật Lý 12</h3>
                                        <h3 class="teacher__name">Thầy Lại Đắc Hợp</h3>
                                        <div class="product__price">
                                            
                                            <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                                        </div>
                                       
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                            
            
                                </div> 
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product15.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Hóa Học 11</h3>
                                        <h3 class="teacher__name">Thầy Đặng Duy Hữu</h3>
                                        <div class="product__price">
                                           
                                            <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                                        </div>
                                        
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                    
            
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product16.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Hóa Học 12</h3>
                                        <h3 class="teacher__name">Thầy Đặng Duy Hữu</h3>
                                        <div class="product__price">
                                         
                                            <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                                        </div>
                                       
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                   
            
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product17.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Sinh Học 12</h3>
                                        <h3 class="teacher__name">Thầy Phan Khắc Nghệ</h3>
                                        <div class="product__price">
                                           
                                            <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                                        </div>
                                      
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                   
            
                                </div>  
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product18.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Lịch Sử 12</h3>
                                        <h3 class="teacher__name">Thầy Bùi Hữu Bến</h3>
                                        <div class="product__price">
                                           
                                            <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                                        </div>
                                      
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                               
            
                                </div>
                            </div>
                            <div class="col l-2 m-4 s-6">
                                <div class="product">
                                    <div class="product__avt" style="background-image: url(./assets/img/product/product19.jpg);">
                                    </div>
                                    <div class="product__info">
                                        <h3 class="product__name">Địa Lý 12</h3>
                                        <h3 class="teacher__name">Cô Hồng Thúy</h3>
                                        <div class="product__price">
                                            
                                            <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                                        </div>
                                        
                                    </div>
                                    <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                   
            
                                </div>
                            </div>


                        </div>
                    </div>
                        <div class="tab-pane">
                            <div class="row">
                                <div class="col l-2 m-4 s-6">
                                    <div class="product">
                                        <div class="product__avt" style="background-image: url(./assets/img/product/product1.jpg);">
                                        </div>
                                        <div class="product__info">
                                            <h3 class="product__name">Đại Số 10</h3>
                                            <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                            <div class="product__price">
                                              
                                                <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                            </div>
                                            
                                        </div>
                                        <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                    
                                    </div>
                                </div>
                                <div class="col l-2 m-4 s-6">
                                    <div class="product">
                                        <div class="product__avt" style="background-image: url(./assets/img/product/product5.jpg);">
                                        </div>
                                        <div class="product__info">
                                            <h3 class="product__name">Hình Học 10</h3>
                                            <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                            <div class="product__price">
                                               
                                                <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                            </div>
                                         
                                        </div>
                                        <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                    
                                    </div>
                                </div>
                                <div class="col l-2 m-4 s-6">
                                    <div class="product">
                                        <div class="product__avt" style="background-image: url(./assets/img/product/product2.jpg);">
                                        </div>
                                        <div class="product__info">
                                            <h3 class="product__name">Giải Tích 11</h3>
                                            <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                            <div class="product__price">
                                                
                                                <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                            </div>
                                           
                                        </div>
                                        <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                       
                                    </div>
                                </div>
                                <div class="col l-2 m-4 s-6">
                                    <div class="product">
                                        <div class="product__avt" style="background-image: url(./assets/img/product/product3.jpg);">
                                        </div>
                                        <div class="product__info">
                                            <h3 class="product__name">Hình Học 11</h3>
                                            <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                            <div class="product__price">
                                                
                                                <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                            </div>
                                            
                                        </div>
                                        <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                       
                                    </div>
                                </div>
                                <div class="col l-2 m-4 s-6">
                                    <div class="product">
                                        <div class="product__avt" style="background-image: url(./assets/img/product/product6.jpg);">
                                        </div>
                                        <div class="product__info">
                                            <h3 class="product__name">Giải Tích 12</h3>
                                            <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                            <div class="product__price">
                                              
                                                <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                            </div>
                                           
                                        </div>
                                        <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                        
                                    </div>
                                </div>
                                <div class="col l-2 m-4 s-6">
                                    <div class="product">
                                        <div class="product__avt" style="background-image: url(./assets/img/product/product4.jpg);">
                                        </div>
                                        <div class="product__info">
                                            <h3 class="product__name">Hình Học 12</h3>
                                            <h3 class="teacher__name">Thầy Lê Văn Tuấn</h3>
                                            <div class="product__price">
                                                
                                                <div class="price__new">210.000 <span class="price__unit">đ</span></div>
                                            </div>
                                         
                                        </div>
                                        <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                       
                            <div class="tab-pane">
                                <div class="row">
                                    
                                    <div class="col l-2 m-4 s-6">
                                        <div class="product">
                                            <div class="product__avt" style="background-image: url(./assets/img/product/product7.jpg);">
                                            </div>
                                            <div class="product__info">
                                                <h3 class="product__name">Tiếng Anh 10</h3>
                                                <h3 class="teacher__name">Cô Trang Anh</h3>
                                                <div class="product__price">
                                                   
                                                    <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                                </div>
                                              
                                            </div>
                                            <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                            
                                        </div>
                                    </div>
                                    <div class="col l-2 m-4 s-6">
                                        <div class="product">
                                            <div class="product__avt" style="background-image: url(./assets/img/product/product8.jpg);">
                                            </div>
                                            <div class="product__info">
                                                <h3 class="product__name">Tiếng Anh 11</h3>
                                                <h3 class="teacher__name">Cô Trang Anh</h3>
                                                <div class="product__price">
                                                    
                                                    <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                                </div>
                                               
                                            </div>
                                            <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                           
                                        </div>
                                    </div>
                                    <div class="col l-2 m-4 s-6">
                                        <div class="product">
                                            <div class="product__avt" style="background-image: url(./assets/img/product/product9.jpg);">
                                            </div>
                                            <div class="product__info">
                                                <h3 class="product__name">Tiếng Anh 12</h3>
                                                <h3 class="teacher__name">Cô Trang Anh</h3>
                                                <div class="product__price">
                                                    
                                                    <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                                </div>
                                               
                                            </div>
                                            <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                       
                                        </div>
                                    </div>
                                    <div class="col l-2 m-4 s-6">
                                        <div class="product">
                                            <div class="product__avt" style="background-image: url(./assets/img/product/product10.jpg);">
                                            </div>
                                            <div class="product__info">
                                                <h3 class="product__name">Ngữ Văn 10</h3>
                                                <h3 class="teacher__name">Cô Lệ Quyên</h3>
                                                <div class="product__price">
                                                   
                                                    <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                                </div>
                                    
                                            </div>
                                            <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                           
                                        </div>
                                    </div>
                                    <div class="col l-2 m-4 s-6">
                                        <div class="product">
                                            <div class="product__avt" style="background-image: url(./assets/img/product/product11.jpg);">
                                            </div>
                                            <div class="product__info">
                                                <h3 class="product__name">Ngữ Văn 11</h3>
                                                <h3 class="teacher__name">Cô Lệ Quyên</h3>
                                                <div class="product__price">
                                                   
                                                    <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                                </div>
                                               
                                            </div>
                                            <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                           
                                        </div>
                                    </div>
                                    <div class="col l-2 m-4 s-6">
                                        <div class="product">
                                            <div class="product__avt" style="background-image: url(./assets/img/product/product12.jpg);">
                                            </div>
                                            <div class="product__info">
                                                <h3 class="product__name">Ngữ Văn 12</h3>
                                                <h3 class="teacher__name">Cô Lệ Quyên</h3>
                                                <div class="product__price">
                                                    
                                                    <div class="price__new">200.000 <span class="price__unit">đ</span></div>
                                                </div>
                                                
                                            </div>
                                            <a href="user_product.html" class="viewDetail">Xem chi tiết</a>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
        <!-- HightLight  -->
        <div class="main__frame">
            <div class="grid wide">
               
                <h3 class="category__heading">KHÓA HỌC NỔI BẬT</h3>
                <div class="owl-carousel hight owl-theme">
                    <div class="product">
                        <div class="product__avt" style="background-image: url(./assets/img/product/product13.jpg);">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name">Vật Lý 11</h3>
                            <h3 class="teacher__name">Thầy Lại Đắc Hợp</h3>
                            <div class="product__price">
                               
                                <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                            </div>
                           
                        </div>
                        <a href="product.html" class="viewDetail">Xem chi tiết</a>
                       
                    </div>
                    <div class="product">
                        <div class="product__avt" style="background-image: url(./assets/img/product/product14.jpg);">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name">Vật Lý 12</h3>
                            <h3 class="teacher__name">Thầy Lại Đắc Hợp</h3>
                            <div class="product__price">
                               
                                <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                            </div>
                           
                        </div>
                        <a href="product.html" class="viewDetail">Xem chi tiết</a>
                       

                    </div>
                    <div class="product">
                        <div class="product__avt" style="background-image: url(./assets/img/product/product15.jpg);">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name">Hóa Học 11</h3>
                            <h3 class="teacher__name">Thầy Đặng Duy Hữu</h3>
                            <div class="product__price">
                               
                                <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                            </div>
                            
                        </div>
                        <a href="product.html" class="viewDetail">Xem chi tiết</a>
                       

                    </div>
                    <div class="product">
                        <div class="product__avt" style="background-image: url(./assets/img/product/product16.jpg);">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name">Hóa Học 12</h3>
                            <h3 class="teacher__name">Thầy Đặng Duy Hữu</h3>
                            <div class="product__price">
                                
                                <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                            </div>
                          
                        </div>
                        <a href="product.html" class="viewDetail">Xem chi tiết</a>
                       

                    </div>
                    <div class="product">
                        <div class="product__avt" style="background-image: url(./assets/img/product/product17.jpg);">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name">Sinh Học 12</h3>
                            <h3 class="teacher__name">Thầy Phan Khắc Nghệ</h3>
                            <div class="product__price">
                               
                                <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                            </div>
                          
                        </div>
                        <a href="product.html" class="viewDetail">Xem chi tiết</a>
                        

                    </div>
                    <div class="product">
                        <div class="product__avt" style="background-image: url(./assets/img/product/product18.jpg);">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name">Lịch Sử 12</h3>
                            <h3 class="teacher__name">Thầy Bùi Hữu Bến</h3>
                            <div class="product__price">
                                
                                <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                            </div>
                            
                        </div>
                        <a href="product.html" class="viewDetail">Xem chi tiết</a>
                       

                    </div>
                    <div class="product">
                        <div class="product__avt" style="background-image: url(./assets/img/product/product19.jpg);">
                        </div>
                        <div class="product__info">
                            <h3 class="product__name">Địa Lý 12</h3>
                            <h3 class="teacher__name">Cô Hồng Thúy</h3>
                            <div class="product__price">
                              
                                <div class="price__new"> 200.000<span class="price__unit">đ</span></div>
                            </div>
                          
                        </div>
                        <a href="product.html" class="viewDetail">Xem chi tiết</a>
                      

                    </div>
                </div>
            </div>
        </div>
        <!-- Sales Policy -->
        <div class="main__policy">
            <div class="row">
                <div class="col l-3 m-6">
                    <div class="policy bg-1">
                        <img src="./assets/img/policy/policy1.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">TIẾT KIỆM THỜI GIAN</h3>
                            <p class="policy__description">Học nhanh kiến thức</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-2">
                        <img src="./assets/img/policy/policy2.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">CHI PHÍ HỢP LÝ</h3>
                            <p class="policy__description">Nhiều ưu đãi</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-1">
                        <img src="./assets/img/policy/policy3.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">KHÓA HỌC HÀNG ĐẦU</h3>
                            <p class="policy__description">Cam kết chất lượng</p>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-6">
                    <div class="policy bg-2">
                        <img src="./assets/img/policy/policy4.png" class="policy__img"></img>
                        <div class="policy__info">
                            <h3 class="policy__title">TƯ VẤN 24/24</h3>
                            <p class="policy__description">Giải đáp mọi thắc mắc</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
      

        <div class="main__bands">
            <div class="grid wide">
                <h3 class="category__heading">Giải thưởng</h3>
                <div class="owl-carousel bands">
                    <a href="user_listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band1.png)"></a>
                    <a href="user_listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band2.png)"></a>
                    <a href="user_listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band3.png)"></a>
                    <a href="user_listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band4.png)"></a>
                    <a href="user_listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band5.png)"></a>
                    <a href="user_listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band6.png)"></a>
                    <a href="user_listProduct.html" class="band__item" style="background-image: url(./assets/img/band/band7.png)"></a>
                </div>
            </div>
        </div>

    </div>

    <div class="footer">
        <div class="grid wide">
            <div class="row">
                <div class="col l-3 m-6 s-12">
                    <a href="user_homepage.html" class="header__logo">
                        <img src="./assets/logoamban.png" alt="">
                    </a>
                    <h3 class="footer__slogan">Five Study - Nâng tầm tri thức</h3>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Menu</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <a href="user_homepage.html" class="footer__link">Trang chủ</a>
                        </li>
                        <li class="footer__item">
                            <a href="user_about.html" class="footer__link">Giới thiệu</a>
                        </li>
                        <li class="footer__item">
                            <a href="user_listProduct.html" class="footer__link">Khóa học</a>
                        </li>
                      
                        <li class="footer__item">
                            <a href="user_contact.html" class="footer__link">Liên hệ</a>
                        </li>
                    </ul>
                </div>
              
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Liên hệ</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <span class="footer__text">
                                    <i class="fas fa-map-marked-alt"></i> 79 Hồ Tùng Mậu, Cầu Giấy, Hà Nội
                                </span>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                <i class="fas fa-phone"></i> 0123 456 789
                            </a>
                        </li>
                        <li class="footer__item">
                            <a href="#" class="footer__link">
                                <i class="fas fa-envelope"></i> nhom5@gmail.com
                            </a>
                        </li>
                        <li class="footer__item">
                            <div class="social-group">
                                <a href="https://www.facebook.com/thuongmaiuniversity" class="social-item"><i class="fab fa-facebook-f"></i>
                                </a>
                            <a href="https://www.instagram.com/thuongmaiuniversity/" class="social-item"><i class="fab fa-instagram"></i>
                                </a>
                            <a href="https://twitter.com/ThuongmaiU" class="social-item"><i class="fab fa-twitter"></i>
                                </a>
                            <a href="https://www.youtube.com/@ThuongmaiUniversityOfficial" class="social-item"><i class="fab fa-youtube"></i>  
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col l-3 m-6 s-12">
                    <h3 class="footer__title">Đăng kí</h3>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <span class="footer__text">Đăng ký để nhận được được thông tin ưu đãi mới nhất từ chúng tôi.</span>
                        </li>
                      
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span class="footer__text"> &copy Bản quyền thuộc về <a class="footer__link" href="#"> Nhóm 5</a></span>
        </div>
    </div>

    <script>
        $('.owl-carousel.hight').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
        $('.owl-carousel.news').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        })
        $('.owl-carousel.bands').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>
    <!-- Script common -->
    <script src="./assets/js/homeScript.js"></script>
    <script src="./assets/js/commonscript.js"></script>
</body>

</html>