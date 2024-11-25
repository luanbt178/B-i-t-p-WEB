<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home_page.css">
    <link rel="stylesheet" href="../icon/themify-icons/themify-icons.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <img src="../img/R (1).jfif" class="back_ground">
        <header>
            <nav>
                <ul class="home">
                <a href="../pages/log_reg.php">Đăng nhập / Đăng ký</a>
                <a href="../pages/cart.php">Giỏ hàng</a>
                    <p class="logo">ICONIC</p>
                        <li>
                            <a href="#">HOME</a>
                        </li>
                        <li>
                            <a href="#">SHOES</a>
                            <ul id="sub_nav">
                                <li><a href="#">Adidas</a></li>
                                <li><a href="#">Nike</a></li>
                                <li><a href="#">Bitis</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    <div>
                        <i class="ti-search"></i>
                    </div>
                    <div>
                        <!-- <i class="ti-shopping-cart"></i> -->
                        <a href="cart.php" class="ti-shopping-cart"></a>
                    </div>
                    <div>
                           <!-- <i class="ti-user"></i> -->
                        <a href="../pages/user_infor.php" class="ti-user"></a>
                    </div>
                </ul>
            </nav>
        </header>

        <main>
            <section class="nike_row">
                <table>
                    <caption>Bestseller <br>
                    <p>Most Favourite & Sale off</p>
                    </caption>
                    <tr>
                        <td class="img_row_1"><img src="../img/NIKE+BLAZER+MID+'77+(GS).png" alt="" onclick="infor_Prod(1)"></td>
                        <td class="img_row_1"><img src="../img/NIKE+AIR+MAX+90+LTR+(GS).png" alt="" onclick="infor_Prod(2)"></td>
                        <td class="img_row_1"><img src="../img/NIKE+AIR+MAX+SC.png" alt="" onclick="infor_Prod(3)"></td>
                    </tr>
                    <tr>
                        <td><h1>Nike Blazer Mid '77</h1></td>
                        <td><h1>Nike Air Max 90 LTR</h1></td>
                        <td><h1>Nike Ait Max SC</h1> </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Men's / Women's Shoes</p>
                            <p class=" price">1.700.000 VND <span>1.850.000 VND</span></p>
                            <br>
                            <p class="percent_off">8,1% off</p>
                        </td>
                        <td>
                            <p>Men's / Women's Shoes</p>
                            <p class=" price">2.400.000 VND <span>2.510.000 VND</span></p>
                            <br>
                            <p class="percent_off">4,3% off</p>
                        </td>
                        <td>
                            <p>Men's / Women's Shoes</p>
                            <p class=" price">2.000.000 VND <span>2.100.000 VND</span></p>
                            <br>
                            <p class="percent_off">4,7% off</p>
                        </td>
                    </tr>
                    <tr>
                            <td class="free_ship">Free ship <i class="ti-truck"></i></td>
                            <td class="free_ship">Free ship <i class="ti-truck"></i></td>
                            <td class="free_ship">Free ship <i class="ti-truck"></i></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit">Mua ngay <i class="ti-money"></i></button>
                        </td>
                        <td>
                            <button type="submit">Mua ngay <i class="ti-money"></i></button>
                        </td>
                        <td>
                            <button type="submit">Mua ngay <i class="ti-money"></i></button>
                        </td>
                    </tr>
                </table>
            </section>

            <section class="product">
                <div class="carousel">
                    <div id="product_descr">
                        <h1>New Styles<i class="ti-angle-double-right"></i></h1>
                    </div>
                    <div class="carousel-container">
                        <div class="carousel-item">
                            <div class="img_container">
                                <img src="../img/BitisIcon.jfif" alt="" onclick="infor_Prod(5)">
                                <p class="hover_text">Biti's Hunter Bloomin' Central <br>
                                    <span>840.000 VND</span>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img_container">
                                <img src="../img/IconAdidas.jfif" alt="" onclick="infor_Prod(6)">
                                <p class="hover_text">Zapatillas Campus 00s <br>
                                    <span>840.000 VND</span>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img_container">
                                <img src="../img/IconNike.jfif" alt="" onclick="infor_Prod(7)">
                                <p class="hover_text">Nike Dunk High <br>
                                    <span>840.000 VND</span>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img_container">
                                <img src="../img/IconNike2.jfif" alt="" onclick="infor_Prod(11)">
                                <p class="hover_text">Biti's Hunter Street Mid Americano<br>
                                    <span>700,120 VND</span>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img_container">
                                <img src="../img/Bitis2.webp" alt="" onclick="infor_Prod(9)">
                                <p class="hover_text">Biti's Hunter Running 2.0 <br>
                                    <span>752,000 VND</span>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img_container">
                                <img src="../img/Bitis3.webp" alt="" onclick="infor_Prod(8)">
                                <p class="hover_text">Nike Dunk Low <br>
                                    <span>840.000 VND</span>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img_container">
                                <img src="../img/Adidas2.webp" alt="" onclick="infor_Prod(10)">
                                <p class="hover_text">Adidas Ultraboost DNA  <br>
                                    <span>2,389,225.80 VND</span>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="img_container">
                                <img src="../img/Nike3.png" alt="" onclick="infor_Prod(12)">
                                <p class="hover_text">Nike Elevate 3 <br>
                                    <span>1,879,199 VND</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <button class="prev-btn"><i class="ti-angle-left"></i></button>
                    <button class="next-btn"><i class="ti-angle-right"></i></button>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer_container">
                <p class="logo_footer">ICONIC <span>shoe's</span></p>
                <div class="about_us">
                    <div class="about"> About us </div>
                    <p>Discover your perfect pair at ICONIC! We offer a wide range of stylish and comfortable footwear for every occasion. Step into fashion and embrace your unique style with us. Follow us on social media for the latest updates and exclusive offers!</p>
                </div>
            </div>
            <div class="in4">
                    <p>Follow us</p>
                    <div class="icon_soci">
                        <i class="ti-instagram"></i>
                        <i class="ti-facebook"></i>
                        <i class="ti-twitter-alt"></i>
                    </div>
            </div>
        </footer>
    </div>
    <script src="../js/home_page.js"></script>

</body>
</html>