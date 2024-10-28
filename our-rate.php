
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

<?php
 $rates=$crud->Read("rate_management","1 order by `id` desc")
?>

<body>
    <div class="me-main-wraper">

        <!-- top header -->
        <?php include('include/Navbar/top-header-nav.php'); ?>

        <!-- main header -->
        <?php include('include/Navbar/main-header-nav.php'); ?>

    

        <!-- Our Rates -->
        <div class="me-feature">

        <div class="me-transaction  me-padder-bottom">
            <div class="container">
                <div class="me-heading2">
                    <h4>BD Exchange World Transfer your money securely </h4>
                    <h1>Transaction Rates</h1>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="me-transaction-box">
                            <div class="table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th> <i class="fas fa-paper-plane"></i> <span style="margin-left: 6px;">Send Amount</span></th>
                                            <th>  <span style="margin-left: 6px;">Receive Amount</span> <i class="fas fa-reply"></th>
                                            <th> <i class="fas fa-check"></i> Our Reserve</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($rates){
                                            foreach($rates as $rate){
                                            ?>
                                            <tr style="background-color: wheat;">                                           
                                                <th> <?= $rate['from_where'] ?> </th>
                                                <th> To  <?= $rate['to_where'] ?>  <i class="fas fa-reply"></th>
                                                <th> Reserve amount </th>
                                            </tr>  

                                            <?php
                                                for($i=0;$i<3;$i++){
                                            ?>                                            
                                            <tr>
                                                <td><?= $rate['from_amount'] ?></td>
                                                <td> <?= $rate['to_amount'] ?></td>
                                                <td> <?= $rate['reserve'] ?></td>                                            
                                            </tr>
                                            <?php
                                                }                                          
                                            ?>
                                            
                                            <?php
                                            }
                                        }else{
                                        ?>
                                        
                                        <tr style="background-color: wheat;">
                                           
                                           <th> Bangladesh Mobile Banking  </th>
                                           <th> To India <i class="fas fa-reply"></th>
                                       </tr>

                                       <tr>
                                           <td>100 BDT</td>
                                           <td>65 INR</td>
                                           <td>12,546,25 INR</td>
                                           
                                       </tr>
                                       <tr>
                                           <td>100 BDT</td>
                                           <td>65 INR</td>
                                           <td>12,546,25 INR</td>
                                          
                                       </tr>
                                       

                                       <tr style="background-color: wheat;">
                                          
                                           <th>Bangladesh Bank Transaction  </th>
                                           <th> To India <i class="fas fa-reply"></th>
                                       </tr>

                                       <tr>
                                           <td>100 BDT</td>
                                           <td>65 INR</td>
                                           <td>12,546,25 INR</td>
                                           
                                       </tr>
                                       <tr>
                                           <td>100 BDT</td>
                                           <td>65 INR</td>
                                           <td>12,546,25 INR</td>
                                          
                                       </tr>
                                       

                                       <tr style="background-color: wheat;">
                                          
                                           <th>Bank Transaction India  </th>
                                           <th> To Bangladesh </th>
                                       </tr>

                                       <tr>
                                           <td>100 INR</td>
                                           <td>120 BDT</td>
                                           <td>546,25 BDT</td>
                                           
                                       </tr>
                                       <tr>
                                           <td>100 INR</td>
                                           <td>120 BDT</td>
                                           <td>546,25 BDT</td>
                                           
                                       </tr>
                                       <tr>
                                           <td>100 INR</td>
                                           <td>120 BDT</td>
                                           <td>546,25 BDT</td>
                                           
                                       </tr>

                                       <tr style="background-color: wheat;">
                                          
                                           <th>India Paytm Wallet </th>
                                           <th> To Bangladesh </th>
                                       </tr>

                                       <tr>
                                           <td>100 INR</td>
                                           <td>120 BDT</td>
                                           <td>546,25 BDT</td>
                                           
                                       </tr>
                                       <tr>
                                           <td>100 INR</td>
                                           <td>120 BDT</td>
                                           <td>546,25 BDT</td>
                                           
                                       </tr>
                                       <tr>
                                           <td>100 INR</td>
                                           <td>120 BDT</td>
                                           <td>546,25 BDT</td>
                                           
                                       </tr>
                                       <tr>
                                           <td>100 INR</td>
                                           <td>120 BDT</td>
                                           <td>546,25 BDT</td>
                                           
                                       </tr>

                                       <tr style="background-color: wheat;">
                                          
                                           <th> UPI Payment India</th>
                                           <th> To Bangladesh </th>
                                       </tr>

                                       <tr>
                                           <td>03 January 2020</td>
                                           <td>02:41:09</td>
                                           <td>$12,546,25.00</td>
                                           
                                       </tr>

                                       <tr style="background-color: wheat;">
                                          
                                           <th>India Google Pay </th>
                                           <th> To Bangladesh </th>
                                       </tr>

                                       <tr>
                                           <td>03 January 2020</td>
                                           <td>02:41:09</td>
                                           <td>$12,546,25.00</td>
                                          
                                       </tr>

                                       <tr style="background-color: wheat;">
                                          
                                           <th>India Amazon Pay  </th>
                                           <th> To Bangladesh </th>
                                       </tr>

                                       

                                       <tr>
                                           <td>31 December 2019</td>
                                           <td>11:32:15</td>
                                           <td>$12,546,25.00</td>
                                          
                                       </tr>
                                       <tr>
                                           <td>01 January 2020</td>
                                           <td>01:12:20</td>
                                           <td>$12,546,25.00</td>
                                          
                                       </tr>
                                       <tr>
                                           <td>02 January 2020</td>
                                           <td>12:52:55</td>
                                           <td>$12,546,25.00</td>
                                           
                                       </tr>
                                       <tr>
                                           <td>03 January 2020</td>
                                           <td>02:41:09</td>
                                           <td>$12,546,25.00</td>
                                           
                                       </tr>

                                        <?php
                                           }
                                        ?> 
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="team-modal-one" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close me-team-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                        <div class="me-modal-body">
                            <div class="me-modal-team-img">
                                <img src="assets/images/team11.jpg" class="img-fluid" alt="image" />
                                <p class="me-team-designation">Team leader</p>
                            </div>
                            <div class="me-modal-team-data">
                                <h4>John doe</h4>
                                <p>Team leader</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <ul>
                                    <li>
                                        <h4>Skills</h4>
                                    </li>
                                    <li>Web Designer</li>
                                    <li>HTML</li>
                                    <li>PHP</li>
                                    <li>Larval</li>
                                    <li>.NET</li>
                                    <li>WordPress</li>
                                    <li>Phptoshop</li>
                                    <li>Android</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="team-modal-two" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close me-team-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                        <div class="me-modal-body">
                            <div class="me-modal-team-img">
                                <img src="assets/images/team22.jpg" class="img-fluid" alt="image" />
                                <p class="me-team-designation">Team leader</p>
                            </div>
                            <div class="me-modal-team-data">
                                <h4>Nancy Martin</h4>
                                <p>Team leader</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <ul>
                                    <li>
                                        <h4>Skills</h4>
                                    </li>
                                    <li>Web Designer</li>
                                    <li>HTML</li>
                                    <li>PHP</li>
                                    <li>Larval</li>
                                    <li>.NET</li>
                                    <li>WordPress</li>
                                    <li>Phptoshop</li>
                                    <li>Android</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="team-modal-three" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close me-team-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                        <div class="me-modal-body">
                            <div class="me-modal-team-img">
                                <img src="assets/images/team33.jpg" class="img-fluid" alt="image" />
                                <p class="me-team-designation">Team leader</p>
                            </div>
                            <div class="me-modal-team-data">
                                <h4>Maurice Victor</h4>
                                <p>Team leader</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <ul>
                                    <li>
                                        <h4>Skills</h4>
                                    </li>
                                    <li>Web Designer</li>
                                    <li>HTML</li>
                                    <li>PHP</li>
                                    <li>Larval</li>
                                    <li>.NET</li>
                                    <li>WordPress</li>
                                    <li>Phptoshop</li>
                                    <li>Android</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="team-modal-four" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close me-team-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                        <div class="me-modal-body">
                            <div class="me-modal-team-img">
                                <img src="assets/images/team44.jpg" class="img-fluid" alt="image" />
                                <p class="me-team-designation">Team leader</p>
                            </div>
                            <div class="me-modal-team-data">
                                <h4>Joolie Desuza</h4>
                                <p>Team leader</p>
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <ul>
                                    <li>
                                        <h4>Skills</h4>
                                    </li>
                                    <li>Web Designer</li>
                                    <li>HTML</li>
                                    <li>PHP</li>
                                    <li>Larval</li>
                                    <li>.NET</li>
                                    <li>WordPress</li>
                                    <li>Phptoshop</li>
                                    <li>Android</li>
                                </ul>
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