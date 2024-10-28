
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
                <h1 class="mb-4">Money Exchange Management</h1>
                <form >
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="pb-4">
                                <label for="fromWhere">Send Method</label>
                                <input type="text" class="form-control" id="fromWhere" placeholder="Money send from" required>
                            </div>
                            <div class="pb-4 row ">
                               <div class="col-12 d-flex">
                                    <div class="col-6">
                                        <label for="send-image">Send Method Image</label>
                                        <input type="file" class="form-control-file" id="send-image" required>
                                    </div>
                                    <div class="col-6">
                                        <img id="send-chosen-image" style="width: 100px;height: 100px;" src="" alt="">
                                    </div>
                               </div>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="pb-4">
                                <label for="toWhere">Receive Method</label>
                                <input type="text" class="form-control" id="toWhere" placeholder="Money send to" required>
                            </div>
                            <div class="pb-4 row ">
                               <div class="col-12 d-flex">
                                    <div class="col-6">
                                        <label for="receive-image">Receive Method Image</label>
                                        <input type="file" class="form-control-file" id="receive-image" required>
                                    </div>
                                    <div class="col-6">
                                        <img id="receive-chosen-image" style="width: 100px;height: 100px;" src="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="message">Exchange Message</label>
                            <div class="form-floating ">
                                <textarea class="form-control" placeholder="Add a Exchange Message" id="message" style="height: 100px"></textarea>
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
            curr_li= document.querySelector('#sidebar .side-menu.top li a[href="exchangeMoney.php"]');
            curr_li.parentElement.classList.add('active');

            let sendImage = document.getElementById("send-image");
            let receiveImage = document.getElementById("receive-image");

            let sendChoosenImage = document.getElementById("send-chosen-image");
            let receiveChoosenImage = document.getElementById("receive-chosen-image");

            sendImage.onchange = () => {
                let reader = new FileReader();
                reader.readAsDataURL(sendImage.files[0]);
                reader.onload = () => {
                    sendChoosenImage.setAttribute("src", reader.result);
                }
                fileName.textContent = sendImage.files[0].name;
            }

            receiveImage.onchange = () => {
                let reader = new FileReader();
                reader.readAsDataURL(receiveImage.files[0]);
                reader.onload = () => {
                    receiveChoosenImage.setAttribute("src", reader.result);
                }
                fileName.textContent = receiveImage.files[0].name;
            }

        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $('#submit').click(function (event) {
			var sendMethodImage = sendImage.files[0];
            var receiveMethodImage = receiveImage.files[0]; 
			var fromWhere = $('#fromWhere').val();
            var toWhere = $('#toWhere').val();
            var message = $('#message').val();

			if (!sendMethodImage || !receiveMethodImage || !fromWhere || !toWhere || !message) {
				event.preventDefault();
				$('.formError').html("please fill all details to  continue !");
			} else {
				$('.formError').html("");
				event.preventDefault();
				var formData = new FormData();
				formData.append("sendMethodImage", sendMethodImage);
				formData.append("receiveMethodImage", receiveMethodImage);
                formData.append("fromWhere", fromWhere);
				formData.append("toWhere", toWhere);
                formData.append("message", message);
		
				formData.append('ajax', "ajax");

                    $.ajax({
                        type: "POST",
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json",
                        url: "../xhr/exchangeMoney.php",
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
