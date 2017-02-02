<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
</head>
<body class="body-pages">
	<div class="nav-pages">
   		<?php require 'modules/components/nav.php'; ?>
   	</div>
    <section class="section section-pages">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="title-page">Register</h1>    
                </div>
                <div class="col-md-5">
                    <form action="" class="default-form">
                        <div class="field">
                            <input type="text" name="FirstName" placeholder="First name" required>
                        </div>
                        <div class="field">
                            <input type="text" name="LastName" placeholder="Last name" required>
                        </div>
                        <div class="field">
                            <input type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="field">
                            <input type="email" name="confirm_email" placeholder="Confrim email" required>
                        </div>
                         <div class="field">
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="field">
                            <input type="password" name="confirm_password" placeholder="Confrim password" required>
                        </div>
                        <div class="field">
                            <input type="text" name="birthdate" id="birthdate" placeholder="Birthdate" required>
                        </div>
                        <div class="field bg-input gender">
                            <label>Gender</label>
                            <div class="box-radio">
                                <div class="style-radio">
                                    <input id="male" name="gender" type="radio">
                                    <label>Male</label>
                                </div>
                                <div class="style-radio">
                                    <input id="female" name="gender" type="radio">
                                    <label >female</label>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="phone" placeholder="Phone number" required>
                        </div>
                        <div class="drop-photo">
                            
                        </div>
                        <div class="field register">
                            
                            <a href="" class="link-color">View terms &amp; conditions agreements</a>
                            <div class="style-check">
                                <input id="female" name="sex" type="checkbox">
                                <label >I agree</label>
                            </div>
                            <input type="submit" value="Register" class="btn-primary">
                            
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <?php require 'modules/components/footer.php'; ?>


    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
             $('#birthdate').datepicker({
                 autoclose: true
             });
        })
    </script>
    
 </body>
</html>