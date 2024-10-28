
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
                <h1 class="mb-4">Add New Offer</h1>
                <form >
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="pb-4">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter title" required>
                            </div>
                            <div class="pb-2">
                                <label for="upload-image">Add Image</label>
                                <input type="file" class="form-control-file" id="upload-image" required>
                            </div>
                        </div>

                        <div class="form-group col-md-6 mt-3 text-center">
                            <figure class="image-container">
                                <img id="chosen-image" class="image-style" style="height: 200px;width: 200px;border: 1px solid gray;border-radius: 6px;">
                            </figure>
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
            curr_li= document.querySelector('#sidebar .side-menu.top li a[href="addOffer.php"]');
            curr_li.parentElement.classList.add('active');

            let uploadImage = document.getElementById("upload-image");
            let chosenImage = document.getElementById("chosen-image");

            uploadImage.onchange = () => {
                let reader = new FileReader();
                reader.readAsDataURL(uploadImage.files[0]);
                reader.onload = () => {
                    chosenImage.setAttribute("src", reader.result);
                }
                fileName.textContent = uploadImage.files[0].name;
            }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $('#submit').click(function (event) {
			var image = uploadImage.files[0]
			var title = $('#title').val();

			if (!image) {
				event.preventDefault();
				$('.formError').html("please select any image !");
                $('#upload-image').focus();
			} else {
				$('.formError').html("");
				event.preventDefault();
				var formData = new FormData();
				formData.append("image", image);
				formData.append("title", title);
				formData.append('ajax', "ajax");

                    $.ajax({
                        type: "POST",
                        processData: false,
                        contentType: false,
                        cache: false,
                        dataType: "json",
                        url: "../xhr/add-offer.php",
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

