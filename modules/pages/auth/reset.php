<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>

</head>
<body class="body-pages">
	<div class="nav-pages">
   		<?php require 'modules/components/nav.php'; ?>
   	</div>
    <section class="section section-pages">
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
    
    
    
 </body>
</html>