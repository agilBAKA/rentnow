<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>

</head>
<body class="body-pages">
	<?php require 'modules/components/nav-after-login.php'; ?>
    <section class="section section-pages section-auth">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="title-page">Verify Email</h1>    
                </div>
                <div class="col-md-5">
                    <p>
                        Pellentesque nec ullamcorper turpis. Nulla non finibus metus, sit amet interdum ex. Nullam non dolor a turpis faucibus dapibus
                    </p>
                    <div class="box-password">
                    	 <div class="icon-pass">
                              <i class="zmdi zmdi-lock-outline"></i>  
                         </div>
                         <form action="" class="default-line">
                             <div class="field">
                                 <input type="text" placeholder="code verification">
                             </div>
                              
                             <div class="field">
                                 <input type="submit" value="verify">
                             </div>
                             <a href="" class="btn-black full">Resend Verification Code</a>
                         </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <?php require 'modules/components/footer.php'; ?>
    <?php require 'modules/components/modal-subscribe.php'; ?>
    
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/js/main.js"></script>
 </body>
</html>