<div class="modal fade me-login-model" id="meSignup">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close me-team-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
            <div class="modal-body">
                <h1 class="me-login-title">Register</h1>
                <form method="post">
                    <div class="me-login-form">
                        <label for="name">Full Name</label>
                        <input class="border-int" type="text" placeholder="Full Name" id="name"/>

                        <label for="email">Email</label>
                        <input class="border-int" type="email" placeholder="Email" id="email"/>
                        <p class="error emailError"></p>

                        <label for="phone">Phone Number</label>
                        <input class="border-int" type="text" placeholder="phone number" id="phone"/>
                        <p class="error phoneError"></p>

                        <label for="password">Password</label>
                        <input class="border-int" type="password" placeholder="Password" id="password"/>

                        <label for="address">Address</label>
                        <input class="border-int" type="text" placeholder="Address" id="address"/>

                        <div class="me-login-btn">
                            <button class="me-btn" id="submit">Submit</button>
                            <p>Already have an account? <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#meLogin" data-bs-dismiss="modal" aria-label="Close">Login</a></p>
                        </div>
                        <p class="text-center error formError"></p>
                    </div>
                </form>
                <div class="me-login-with-social">                 
                    
                </div>
            </div>
        </div>
    </div>
</div>


<script>    
    $('#submit').click(function(event){	
        event.preventDefault();		
        var name=$('#name').val();
        var email=$('#email').val();
        var phone=$('#phone').val();
        var password=$('#password').val();
        var address=$('#address').val();

    if(!name || !email || !phone || !password || !address){
            event.preventDefault();
            $('.formError').html("please fill all details to continue !");
        }else{
            $('.formError').html("");            
            event.preventDefault();

            function isValidEmail(email) {
                // Regular expression for validating email
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                
                // Test the email against the pattern and return the result
                return emailPattern.test(email);
            }

            function isValidPhone(phone) {
                // Regular expression for validating phonePattern
                var phonePattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
                
                // Test the phonePattern against the pattern and return the result
                return phonePattern.test(phone);
            }

            if(!isValidEmail(email)){
                $('.emailError').html("please enter a valid email address"); 
                $('#email').focus();
            }else{
                $('.emailError').html("");  
            }

            if(!isValidPhone(phone)){
                $('.phoneError').html("please enter a valid Phone Number "); 
                $('#phone').focus();
            }else{
                $('.phoneError').html("");  
            }
            
            if(isValidEmail(email) && isValidPhone(phone)){
                $('.emailError').html(""); 
                $('.formError').html("");  
                $('.phoneError').html("");  
                var formData=new FormData();
                formData.append("name",name);	
                formData.append("email",email);
                formData.append("phone",phone);
                formData.append("password",password);			
                formData.append("address",address);		

                $.ajax({
                    type: "POST",
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    url: "xhr/register.php",
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