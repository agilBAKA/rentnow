<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
</head>
<body class="body-pages">
  	<?php require 'modules/components/nav.php'; ?>
    <section class="section section-pages section-auth">
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
                             <input type="file" class="droparea avatar" name="xfile" data-post="modules/components/upload.php" data-width="364" data-height="214" data-crop="true"/>
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
    <?php require 'modules/components/modal-subscribe.php'; ?>

    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="dist/js/vendor/droparea.js"></script>
    <script type="text/javascript" src="dist/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
             $('nav.navigation').addClass('navigation-block');
             $('#birthdate').datepicker({
                 autoclose: true
             });

             $('.droparea').droparea({
                'instructions': '',
                'init' : function(result){
                    //console.log('custom init',result);
                },
                'start' : function(area){
                    area.find('.error').remove(); 
                },
                'error' : function(result, input, area){
                    $('<div class="error">').html(result.error).prependTo(area); 
                    return 0;
                    //console.log('custom error',result.error);
                },
                'complete' : function(result, file, input, area){
                    if((/image/i).test(file.type)){
                        area.find('img').remove();
                        //area.data('value',result.filename);
                        area.append($('<img>',{
                            'src': result.path + result.filename + '?' + Math.random(),
                            'class' : 'img-cover'
                        }));
                    } 
                    //console.log('custom complete',result);
                }
            });
        })
    </script>
    
 </body>
</html>