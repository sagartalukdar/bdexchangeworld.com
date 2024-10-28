
<?php include('include/header.php'); ?>

<?php
session_start();
if (isset($_SESSION['this_admin_id'])){
  header("location:index.php");
}
?>

</head>

<body class="bg-g">
    <div class="me-main-wraper">

       <style>
        .border-dark{
            border: 1px solid rgb(231, 216, 216);
            border-radius: 20px;
        }
        .ele-center{
            display: flex;
            align-items: center;      
            justify-content: center;
            margin: auto;
        }
        .bg-g{
            background-color: rgb(235, 240, 244);
        }
        @media only screen and (min-width: 800px) {
            .ele-center{
                width: 60%;
            } 
        }

        .errorLogin{
            color: red;
            font-size: large;
        }
       </style>

        <!-- about -->
        <div class="me-about me-about-single">
            <div class="container">
                <div class="row ele-center" >
                    <h1 class="me-login-title">Admin Login</h1>
                    <p class="errorLogin text-center">
                        <?php if (isset($_SESSION['errorLogin'])) {
                            echo $_SESSION['errorLogin'];
                            unset($_SESSION['errorLogin']);
                        }                             
                        ?>
                    </p>
                    <form action="session/session.php" method="post">
                        <div class="me-login-form">
                            <input class="border-dark" name="email" type="text" placeholder="email" />
                            <input class="border-dark" name="password" type="password" placeholder="Password" />
                            
                            <div class="d-flex">
                                <div class="me-login-btn ele-center">
                                    <button class="me-btn">Login</button>
                                </div>

                               
                                <a href="../index.php">
                                <p>Go To Main Website</p>                   
                                </a>
                              
                            </div>
                            
                        </div>
                    </form>
                    <div class="me-login-with-social">                  
                        <p>Enter email and password to Login and access the dashboard</p>                   
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include('include/scripts.php'); ?>

</body>


</html>