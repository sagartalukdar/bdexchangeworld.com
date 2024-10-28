
<?php
session_start();
if(empty($_SESSION['this_admin_id']) || $_SESSION['userType']!="admin"){
    header("location:adminLogin.php");
}
?>

<?php include('includeAdmin/head.php');?>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
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
        <main style="background-color:#eeeeee;height: 100vh;">
            
            <div class="container mt-5" >
                <h1 class="mb-4">Rate Management</h1>
                <form >
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="pb-4">
                                <label for="fromWhere">From Where</label>
                                <input type="text" class="form-control" id="fromWhere" placeholder="Money send from" required>
                            </div>
                            <div class="pb-4">
                                <label for="fromAmount">From Amount</label>
                                <input type="text" class="form-control" id="fromAmount" placeholder="Money send with amount" required>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="pb-4">
                                <label for="toWhere">To Where</label>
                                <input type="text" class="form-control" id="toWhere" placeholder="Money send to" required>
                            </div>
                            <div class="pb-4">
                                <label for="toAmount">To Amount</label>
                                <input type="text" class="form-control" id="toAmount" placeholder="Money get with amount" required>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                           <div class="pb-4" style="width: 50%;display: flex;margin: auto;flex-direction: column;">
                            <label for="reserve" >Reserve</label>
                                <input type="text" class="form-control" id="reserve" placeholder="Reserve" required>
                            </div>
                        </div>                        
                    </div>
                   
                    <p class="text-center text-danger formError"></p>

                    <div class="text-center">
                    <button type="submit" class=" btn btn-primary" id="submit">Submit</button>
                    </div>
                </form>
            </div>

        <script src="imports/script.js"></script>

        <script>
            curr_li= document.querySelector('#sidebar .side-menu.top li a[href="manageRate.php"]');
            curr_li.parentElement.classList.add('active');
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $('#submit').click(function (event) {
			var fromWhere = $('#fromWhere').val();
			var fromAmount = $('#fromAmount').val();
            var toWhere = $('#toWhere').val();
			var toAmount = $('#toAmount').val();
            var reserve = $('#reserve').val();

			if (!fromWhere || !fromAmount || !toWhere || !toAmount || !reserve) {
				event.preventDefault();
				$('.formError').html("please fill all details to continue !");
			} else {
				$('.formError').html("");
				event.preventDefault();
				var formData = new FormData();
				formData.append("fromWhere", fromWhere);
				formData.append("fromAmount", fromAmount);
                formData.append("toWhere", toWhere);
				formData.append("toAmount", toAmount);
				formData.append('reserve', reserve);
				formData.append('ajax', "ajax");

                    $.ajax({
                        type: "POST",
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json",
                        url: "../xhr/manageRate.php",
                        mimeType: 'multipart/form-data',
                        data: formData,
                        success: function (response) {
                            if (response.successMessage) {
                                // showSuccessMessage ();
                                // alert("DSA");
                                Swal.fire({
                                    title: "SuccessFull !",
                                    text: response.successMessage,
                                    icon: "success"
                                });
                                setTimeout(function () {
                                    window.location.reload();
                                }, 1500);

                            } else if (response.errorMessage) {
                                Swal.fire({
                                    title: "Error !",
                                    text: response.errorMessage,
                                    icon: "error"
                                });
                            }


                        },
                        error: function (error) {
                            Swal.fire({
                                title: "Error !",
                                text: "something went wrong !",
                                icon: "error"
                            });
                        }
                    })

                }

            })
        </script>

