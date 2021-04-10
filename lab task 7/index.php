<?php

session_start();

$status = "";

// add to session
if (isset($_POST['code']) && $_POST['code'] != "") {
    $code = $_POST['code'];

    $name = $_POST['name'];
    $id = $_POST['id'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];

    $cartArray = array(
        $code => array(

            'id' => $id,
            'name' => $name,
            'code' => $code,
            'price' => $price,
            'quantity' => 1,
            'image' => $image
        )
    );
    if ($quantity > 0) {
        if (empty($_SESSION["shopping_cart"])) {
            $_SESSION["shopping_cart"] = $cartArray;
            $status = "<div class='box'>Product is added to your cart!</div>";
        } else {
            $array_keys = array_keys($_SESSION["shopping_cart"]);
            if (in_array($code, $array_keys)) {
                $status = "<div class='box' style='color:red;'>
            Product is already added to your cart!</div>";
            } else {
                $_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"], $cartArray);
                $status = "<div class='box'>Product is added to your cart!</div>";
            }
        }
    } else {
        $status = "<div class='box' style='color:red;'>Out Of Stock!</div>";
    }
}

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!-- zoom in animantion css -->
        <link href="./css/aos.min.css" rel="stylesheet">
        <!-- google font css-->
        <link href="./css/poppinsfont.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/exofont.min.css">
        <!-- iconfont css -->
        <link rel="stylesheet" href="./css/icofont/icofont.min.css">
        <!-- icons css css-->
        <link rel="stylesheet" href="./css/all.min.css">

        <!-- carousel css -->
        <link rel="stylesheet" href="./css/owl.carousel.min.css">
        <link rel="stylesheet" href="./css/owl.theme.default.min.css">
        <!-- magnatic popup -->
        <link rel="stylesheet" href="./Magnific-Popup/dist/magnific-popup.min.css">
        <!-- variable css -->
        <link rel="stylesheet" href="./css/variable1.min.css">

        <!-- sidebar css -->
        <link rel="stylesheet" href="./css/sidebar1.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="./css/style.min.css">
        <!-- resposive css -->
        <link rel="stylesheet" href="./css/responsive.min.css">
    </head>

    <body>

        <!-- side bar -->

        <section>
            <div class="container d-flex align-items-center justify-content-around">

                <nav class="nav-menu d-none d-lg-block">
                    <div class="logo text-center">
                        <img src="./img/cart.png" alt="" class="img-fluid"><span></span>
                    </div>
                    <hr>
                    <?php
                include "./sidebar.php";
                ?>

                </nav>

            </div>




            <!-- main body -->
            <main class="site-main main">
                <!-- incharge info area -->
                <div class="container info text-right">
                    <div>
                        <p>

                            <a class="test-popup-link" href="./img/person.png"><img src="./img/person.png" /></a>

                            Welcome
                        </p>

                        <hr>
                    </div>
                </div>


                <!-- cart -->



        </section>
        <section class="main">

            <div class="container">
                <!-- <div style="clear:both;"></div> -->
                <!-- mesaage box -->
                <div class="message_box">
                    <?php echo $status; ?>
                </div>
                <!-- cout at cart -->
                <?php
            $cart_count = 0;
            if (!empty($_SESSION["shopping_cart"])) {

                $cart_count = count(array_keys($_SESSION["shopping_cart"]));
            }
            ?>
                    <div class="row my-2">
                        <div class="col-lg-12 col-md-12">
                            <div class="cart_div">
                                <a href="./cart.php"><img src="./img/cart-icon.png" /> Cart
                                    <span><?php echo $cart_count; ?></span></a>
                            </div>
                        </div>

                    </div>


                    <!-- show product -->
                    <div class="row">
                        <?php
               
                
                    echo '<div class="col-lg-2 col-md-2 text-center product_wrapper mr-lg-3 mr-md-3 my-1">
                <form method="post" action="">
                <input type="hidden" name="code" value="1" />
                <input type="hidden" name="id" value="1" />
                <input type="hidden" name="name" value="Book" />
                <input type="hidden" name="price" value="200" />
                <input type="hidden" name="quantity" value="20" />
                <input type="hidden" name="image" value="./img/book.png" />
                <div class="image"><img src="./img/book.png"
                        class="img-fluid" />
                    <div class="name text-capitalize">Book</div>
                    <div class="price">&#2547; 200</div>
                    <div class="price"><span class="name">Quantity - </span>20</div>
                    <button type="submit" class="buy btn btn-warning text-capitalize">add to cart</button>
                </div>
            </form>
        </div>';
                    echo '<div class="col-lg-2 col-md-2 text-center product_wrapper mr-lg-3 mr-md-3 my-1">
                <form method="post" action="">
                <input type="hidden" name="code" value="2" />
                <input type="hidden" name="id" value="2" />
                <input type="hidden" name="name" value="laptop" />
                <input type="hidden" name="price" value="20000" />
                <input type="hidden" name="quantity" value="10" />
                <input type="hidden" name="image" value="./img/n41.png" />
                <div class="image"><img src="./img/n41.png"
                        class="img-fluid" />
                    <div class="name text-capitalize">laptop</div>
                    <div class="price">&#2547; 20000</div>
                    <div class="price"><span class="name">Quantity - </span>10</div>
                    <button type="submit" class="buy btn btn-warning text-capitalize">add to cart</button>
                </div>
            </form>
        </div>';
                    echo '<div class="col-lg-2 col-md-2 text-center product_wrapper mr-lg-3 mr-md-3 my-1">
                <form method="post" action="">
                <input type="hidden" name="code" value="3" />
                <input type="hidden" name="id" value="3" />
                <input type="hidden" name="name" value="tv" />
                <input type="hidden" name="price" value="30000" />
                <input type="hidden" name="quantity" value="20" />
                <input type="hidden" name="image" value="./img/giant_110167.jpg" />
                <div class="image"><img src="./img/giant_110167.jpg"
                        class="img-fluid" />
                    <div class="name text-capitalize">Tv</div>
                    <div class="price">&#2547; 30000</div>
                    <div class="price"><span class="name">Quantity - </span>20</div>
                    <button type="submit" class="buy btn btn-warning text-capitalize">add to cart</button>
                </div>
            </form>
        </div>';
              
                ?>
                    </div>

            </div>
        </section>

        </main>
       

            <!-- gotop -->
            <div class="container-fluid"><a class="gotop" href="#"><i class="fas fa-level-up-alt"></i></a></div>

            <script src="./js/jquery-3.5.1.min.js"></script>
            <script src="./js/popper.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
            <script src="./js/jquery.easing.min.js"></script>
            <script type="text/javascript">
                windo
                w.addEventListener("scroll", function() {
                    // var header = document.querySelector("section");
                    // header.classList.toggle("sticky", window.scrollY > 0);
                    var gotop = document.querySelector(".gotop");
                    gotop.classList.toggle("gotopbutton", window.scrollY > 0);
                });
                $(function() {

                    $('[data-toggle="tooltip"]').tooltip()
                });
            </script>
            <script src="./js/aos.min.js"></script>
            <script>
                AOS.init();
            </script>
            <script src="./js/owl.carousel.min.js"></script>
            <script src="./Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
            <script src="./js/header.min.js"></script>
            <script src="./js/alert.min.js"></script>
            <script src="./js/index.js"></script>
    </body>

    </html>