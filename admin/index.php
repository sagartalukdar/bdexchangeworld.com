<?php
session_start();
if(empty($_SESSION['this_admin_id']) || $_SESSION['userType']!="admin"){
    header("location:adminLogin.php");
}
?>

<?php include('includeAdmin/head.php');?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
<script src="cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

<script>
    let table = new DataTable('#myTable');
</script>

</head>
<?php
    include 'classes/Crud.php';
    $crud = new Crud();
?>
<body>
   
    <!-- SIDEBAR -->
    <?php include('includeAdmin/sidebar.php');?>
    <!-- SIDEBAR -->


    <!-- content -->
     <section id="content">

        <!-- navbar -->
        <?php include('includeAdmin/navbar.php');?>
        <!-- navbar -->

        <!-- main -->
        <main>

            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevrons-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
                <a href="" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Management</span>
                </a>
            </div>

            <ul class="box-info">
              <li id="offer">
                <i class='bx bxs-badge-check'></i>
                <span class="text">
                    <h3>Logged</h3>
                    <p> into dashboard</p>
                </span>
              </li>
              <li>
                <i class='bx bx-group'></i>
                <span class="text">
                    <h3>Manage</h3>
                    <p>updates</p>
                </span>
              </li>
              <li>
                <i class='bx bx-gift'></i>
                <span class="text">
                    <h3>website</h3>
                    <p>check</p>
                </span>
              </li>
            </ul>

            <div class="card-body pb-0">
                  <h5 class="card-title">View Users <span>| Details</span></h5>

                  <?php
                     $readUsers=$crud->Read("users","1 order by id desc");
                  ?>

                  <table class="table myTable">
                    <thead>
                      <tr>
                        <th scope="col">Sl no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date of Register</th>                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                          if ($readUsers) {
                            $n=0;
                            foreach ($readUsers as $user) { 
                      ?>
                      <tr>
                        <td><?php echo ++$n ;?></td>
                        <td><?php echo $user['name'] ;?></td>
                        <td><?php echo $user['email'] ;?></td>
                        <td><?php echo $user['phone'] ;?></td>
                        <td><?php echo $user['address'] ;?></td>
                        <td><?php echo $user['date'] ;?></td>                      
                      </tr>
                    <?php }}?>
                      
                    </tbody>

                    <tfoot>
                      <tr>
                        <th scope="col">Sl no.</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date of Register</th>                        
                      </tr>
                    </tfoot>
                  </table>

                </div>

        </main>
        <!-- main -->

     </section>
    <!-- content -->


    <script src="imports/script.js"></script>

    <script>
        curr_li= document.querySelector('#sidebar .side-menu.top li a[href="index.php"]');
        curr_li.parentElement.classList.add('active');
    </script>

    <script>
        $('#offer').on('click',function(e){
            // window.location.href="addOffer.php";

        })
    </script>

</body>
</html>