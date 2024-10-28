
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

     <!-- top header -->
     <?php include('include/Navbar/top-header-nav.php'); ?>

    <!-- main header -->
    <?php include('include/Navbar/main-header-nav.php'); ?>


        <div class="me-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="me-breadcrumb-box">
                            <h1>Faq</h1>
                            <p><a href="index.php">Home</a>Faq</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faq single -->
        <div class="me-faq-single me-padder-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="me-faq-box">
                            <div class="accordion" id="accordionExample">

                                <div class="me-faq-list">
                                        <p class="me-faq-head" data-bs-toggle="collapse" data-bs-target="#me-faq-four">
                                        What legal services do you offer?<button><span></span></button></p>
                                        <div id="me-faq-four" class="collapse" data-parent="#accordionExample">
                                            <div class="card-body">
                                            We provide comprehensive legal services covering cross-border transactions, dispute resolution, legal compliance, and more.
                                            </div>
                                        </div>
                                 </div>

                                <div class="me-faq-list">
                                    <p class="me-faq-head me-faq-open" data-bs-toggle="collapse" data-bs-target="#me-faq-one">
                                    How do you ensure confidentiality and security of client information?<button><span></span></button></p>
                                    <div id="me-faq-one" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                       
                                        We maintain strict confidentiality protocols and use secure channels to safeguard your sensitive information throughout our legal engagements. Your privacy and security are paramount to us
                                    </div>
                                    </div>
                                </div>
                                <div class="me-faq-list">
                                    <p class="me-faq-head" data-bs-toggle="collapse" data-bs-target="#me-faq-two">What is your approach to client service?<button><span></span></button></p>
                                    <div id="me-faq-two" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                        We prioritize client satisfaction through transparent communication, timely responsiveness, and proactive legal guidance.
                                        </div>
                                    </div>
                                </div>
                                <div class="me-faq-list">
                                    <p class="me-faq-head" data-bs-toggle="collapse" data-bs-target="#me-faq-three">
                                    Why should I choose your firm for my legal needs between India and Bangladesh?<button><span></span></button></p>
                                    <div id="me-faq-three" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                        Our experienced team specializes in navigating the complexities of international law, ensuring personalized solutions that protect your interests.
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
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