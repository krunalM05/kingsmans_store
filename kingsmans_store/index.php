<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome |  Kingsman's Laptop Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->
            <!--Item categories listing-->
            <div class="container-fluid" style="margin-top: 15px;">
            <div class="row" id="hp">
                
                    <div class="col-xs-4 col-sm-4  home-feature">
                     <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop1</h3>
                         </div>
                        <div class="thumbnail" style="border-bottom: none">
                        <img src="images/hp1.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Hp 15q core i3 7th Gen</h4>
                            <h4>DOS</h4>
                            <p>Price: Rs. 31,990.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        
                         </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop2</h3>
                         </div>
                        <div class="thumbnail" style="border-bottom: none">
                        <img src="images/hp2.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Hp spectre x360 core i7 8th Gen</h4>
                            <h4>Windows 10 Pro</h4>
                            <p>Price: Rs.1,49,490.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop3</h3>
                         </div>
                        <div class="thumbnail" style="border-bottom: none">
                        <img src="images/hp4.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Hp 14q core i5 8th Gen</h4>
                            <h4>Windows 10 Home</h4>
                            <p>Price: Rs. 41,490.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Nowt</a></p>                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="row" id="dell">
                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop4</h3>
                         </div>
                        <div class="thumbnail" style="border-bottom: none">
                        <img src="images/dell1.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Dell Inspiron 15 3000 i3 7th Gen</h4>
                            <h4>Windows 10 Home</h4>
                            <p>Price: Rs. 29,890.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop5</h3>
                         </div>
                    <div class="thumbnail" style="border-bottom: none">
                        <img src="images/dell2.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Dell Inspiron 13 5000 i3 7th Gen</h4>
                            <h4>Windows 10 Home</h4>
                            <p>Price: Rs. 41,490.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop6</h3>
                         </div>
                    <div class="thumbnail" style="border-bottom: none">
                        <img src="images/dell3.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Dell XPS 15 core i9 9th Gen</h4>
                            <h4>windows 10 Home</h4>
                            <p>Price: Rs. 2,48,490.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
                    </div>
            
              <div class="row" id="lenovo">
                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop7</h3>
                         </div>
                    <div class="thumbnail" style="border-bottom: none">
                        <img src="images/lenovo1.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Lenovo Ideapad L340 i5 8th Gen</h4>
                            <h4>Windows 10 Home</h4>
                            <p>Price: Rs. 64,049.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop8</h3>
                         </div>
                    <div class="thumbnail" style="border-bottom: none">
                        <img src="images/lenovo2.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Lenovo Ideapad 130 core i3 7th Gen</h4>
                            <h4>Windows 10 Home</h4>
                            <p>Price: Rs. 37,000.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop9</h3>
                         </div>
                    <div class="thumbnail" style="border-bottom: none">
                        <img src="images/lenovo3.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Lenovo Ideapad 330s i3 7th Gen</h4>
                            <h4>Windows 10 Home</h4>
                            <p>Price: Rs. 42,309.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
              </div>
         
            
            <div class="row" id="apple">
                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop10</h3>
                         </div>
                    <div class="thumbnail" style="border-bottom: none">
                        <img src="images/apple1.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Apple MacBook Air core i5 8th Gen</h4>
                            <h4>Mac OS sierra</h4>
                            <p>Price: Rs. 65,990.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop11</h3>
                         </div>
                    <div class="thumbnail" style="border-bottom: none">
                        <img src="images/apple2.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Apple MacBOOk Pro i7 9th Gen</h4>
                            <h4>Mac Os Mojave</h4>
                            <p>Price: Rs. 1,89,990.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                </div>

                <div class="col-xs-4 col-sm-4  home-feature">
                    <div class='panel panel-default'>
                         <div class='panel-heading'>
                             <h3>Laptop12</h3>
                         </div>
                    <div class="thumbnail" style="border-bottom: none">
                        <img src="images/apple3.jpeg" alt="" style="height: 180px;">
                        <div class="caption text-center">
                            <h4>Apple MacBook Air i5 8th Gen</h4>
                            <h4>Mac OS Mojave</h4>
                            <p>Price: Rs. 1,14,990.00 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="#" data-toggle="modal" data-target="#loginmodal" class="btn btn-primary btn-block">Order Now</a></p>                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>