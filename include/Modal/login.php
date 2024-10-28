


<div class="modal fade me-login-model" id="meLogin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close me-team-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
            <div class="modal-body">
                <h1 class="me-login-title">Login</h1>
                <form method="post">
                    <div class="me-login-form">
                  
                        <label for="loginEmail">Email</label>
                        <input class="border-int" type="email" placeholder="Email" id="loginEmail"/>
                        <p class="error loginEmailError"></p>

                        <label for="loginPassword">Password</label>
                        <input class="border-int" type="password" placeholder="Password" id="loginPassword"/>

                        <div class="me-login-btn">
                            <button class="me-btn" id="login">Submit</button>
                            <p>Don't have an account? <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#meSignup" data-bs-dismiss="modal" aria-label="Close">Register</a></p>
                        </div>
                        <p class="text-center error loginFormError"></p>
                    </div>
                </form>
                <div class="me-login-with-social">
                    
                </div>
            </div>
        </div>
    </div>
</div>


<script>    
    $('#login').click(function(event){	
        event.preventDefault();		
        var email=$('#loginEmail').val();
        var password=$('#loginPassword').val();

        if( !email || !password){
            event.preventDefault();
            $('.loginFormError').html("please fill all details to continue !");
        }else{
            $('.loginFormError').html("");            
            event.preventDefault();

            function isValidEmail(email) {
                // Regular expression for validating email
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                
                // Test the email against the pattern and return the result
                return emailPattern.test(email);
            }

            if(!isValidEmail(email)){
                $('.loginEmailError').html("please enter a valid email address"); 
                $('#loginEmail').focus();
            }else{
                $('.loginEmailError').html(""); 
                $('.loginFormError').html("");  
                var formData=new FormData();	
                formData.append("email",email);
                formData.append("password",password);					

                $.ajax({
                    type: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    url: "xhr/login.php",
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
                            },2500);

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

        }

    })

</script>