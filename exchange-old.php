
<?php include('include/header.php'); ?>

<style>
    .border-int{
        border:1.5px solid rgb(231, 221, 221);
    }
    .error{
        color: red;
        font-size: large;
        margin-right:8px;
    }
    .success{
        color:rgb(9, 89, 9);
        margin-right:8px;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <div class="me-main-wraper">

        <!-- top header -->
        <?php include('include/Navbar/top-header-nav.php'); ?>

        <!-- main header -->
        <?php include('include/Navbar/main-header-nav.php'); ?>
        <!-- Contact -->

        <h1 class="text-center">Exchange</h1>

        <div class="me-contact ">
            <div class="container">
               
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                <div>
                Sorry!!! This direction of exchange is currently unavailable 
                </div>
                </div>


                <div class="row" style="margin-bottom: 150px;">
                                    <div class="col-12" style="border: 1px solid rgb(176, 170, 170); border-radius: 10px; padding: 25px;">

                                    <p class=" text-center" style="font-weight: 900; font-size: large;">
                                        We accept all Indian online and banking transaction methods such as Paytm, UPI, PhonePe, and more. Whether you prefer using digital wallets, UPI apps, or traditional banking channels, we've got you covered. Enjoy the convenience and flexibility of choosing your preferred payment method for seamless transactions.
                                    </p>

                                    <p class=" text-center" style="font-weight: 900; font-size: large;">
                                            If you prefer to make a transaction manually, please contact us via WhatsApp. Our team is ready to assist you with offline payments.
                                            
                                            <a href="https://wa.me/916026151356" style="text-decoration: none;      color: rgb(37, 231, 46);">
                                                <br>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="width: 24px; height: 24px; vertical-align: middle;">
                                                <path d="M16 1c-8.3 0-15 6.7-15 15 0 2.6 0.7 5.1 2.1 7.4l-1.4 5.2 5.3-1.4c2.2 1.3 4.8 2 7.4 2 8.3 0 15-6.7 15-15s-6.7-15-15-15zM16 26.5c-2.3 0-4.6-0.6-6.5-1.8l-0.5-0.3-3.2 0.8 0.9-3.1-0.3-0.5c-1.2-1.9-1.8-4.2-1.8-6.5 0-7.1 5.8-13 13-13s13 5.8 13 13-5.8 13-13 13zM21.7 19.5c-0.3-0.2-1.7-0.8-2-0.9-0.3-0.1-0.5-0.2-0.7 0.2s-0.8 0.9-1 1.1-0.4 0.3-0.7 0.1c-0.3-0.2-1.3-0.5-2.4-1.4-0.9-0.8-1.5-1.7-1.7-2s-0.0-0.4 0.1-0.5c0.1-0.1 0.3-0.3 0.4-0.4 0.1-0.1 0.2-0.2 0.3-0.4 0.1-0.2 0.1-0.3 0.1-0.5s-0.2-0.4-0.3-0.6-0.7-0.9-1-1.2c-0.3-0.3-0.7-0.3-0.9-0.3-0.2 0-0.5 0-0.7 0s-0.5 0.1-0.8 0.3c-0.3 0.2-1 0.8-1 1.9s1 2.1 1.1 2.2c0.1 0.1 2 3.1 4.9 4.3 0.7 0.3 1.2 0.5 1.6 0.6 0.7 0.2 1.3 0.2 1.8 0.1 0.6-0.1 1.7-0.7 2-1.5s0.2-1.4 0.1-1.5c-0.1-0.2-0.3-0.2-0.5-0.3z"></path>
                                            </svg>

                                                <span style="margin-left: 8px;">Contact us on WhatsApp: 6026151356</span>
                                                </a>
                                        </p>
                                    </div>
                                

                                </div>

            </div>
        </div> 
        <!-- Footer -->
        <?php include('include/footer.php'); ?>

        <!-- Copyright Footer -->
        <?php include('include/copyright-footer.php'); ?>
        
         <!-- call Button -->
        <?php include('include/footercall.php'); ?>

        <!-- whatsapp -->
        <?php include('include/footer-whatsapp.php'); ?>

        

        <!-- Rate -->
        <?php include('include/footer-marque.php'); ?>

        <!-- Login Modal -->
        <?php include('include/Modal/login.php'); ?>

        <!-- Signup Modal -->
        <?php include('include/Modal/signUp.php'); ?>

        <!-- Forgot Modal -->
        <?php include('include/Modal/forgot.php'); ?>

    </div>


    <?php include('include/scripts.php'); ?>

</body>


</html>