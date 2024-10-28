
<?php session_start(); ?>

<div class="me-main-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-7">
                <div class="me-logo">
                    <a href="index.php"><img style="width: 170px;" src="assets/images/logo.png" alt="logo" class="img-fluid" /></a>
                </div>
            </div>
            <div class="col-sm-9 col-5">
                <div class="me-menu">
                    <ul>
                        <li><a href="index.php" class="me-active-menu">Exchange</a>
                        </li>
                        <li><a href="our-rate.php">Rates</a></li>
                        <li><a href="service.php">Service</a></li>
                        <li><a href="faq.php">Faq</a></li>
                        
                        <!-- <li class="me-menu-children"><a href="javascript:;">Review</a>
                            <ul class="me-sub-menu">
                                <li><a href="blog.html">Blog Grid</a></li>
                                <li><a href="blog-single.html">Blog Detail</a></li>
                            </ul>
                        </li> -->
                        <li><a href="contact.php">Contact</a></li>
                        
                        
                         <li>
                            <?php
                            if(empty($_SESSION['username'])){
                                echo '<a href="javascript:;" class="error me-login-menu"  data-bs-toggle="modal" data-bs-target="#meSignup">Register</a>';
                            }
                            ?>

                            <?php
                            if(isset($_SESSION['username'])){
                                echo '<a href="xhr/logout.php" class="error me-login-menu">Logout</a>';
                            }else{
                                echo'<a href="javascript:;" class="success me-login-menu" data-bs-toggle="modal" data-bs-target="#meLogin">Login</a>';
                            }
                            ?>
                        </li>
                        
                        
                    </ul>
                    <div class="me-toggle-nav">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    

                </div>
            </div>
        </div>
    </div>
</div>