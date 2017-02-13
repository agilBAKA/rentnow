<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>

</head>
<body class="body-pages">
	<?php require 'modules/components/nav-after-login.php'; ?>
    <section class="section section-pages">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="title-page">Contact Us</h1>    
                </div>
                <div class="col-md-7">
                	 <form action="" class="default-form">
                	 	<div class="field">
                	 		<input type="text" placeholder="Name">
                	 	</div>
                	 	<div class="field">
                	 		<input type="email" placeholder="Email">
                	 	</div>
                	 	<div class="field">
                	 		<input type="text" placeholder="Subject">
                	 	</div>
                	 	<div class="field">
                	 		<textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                	 	</div>
                	 	<div class="field">
                	 		<input type="submit" value="Send" class="btn-primary">
                	 	</div>
                	 </form>
                </div>

            </div>
        </div>
    </section>
    
    <?php require 'modules/components/footer.php'; ?>
    <?php require 'modules/components/modal-subscribe.php'; ?>
    
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script type="text/javascript" src="dist/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var heightHeader = $('header.header-section').outerHeight() - 100;
            $(window).scroll(function () {
                var scolling  =  $(window).scrollTop();
                if(scolling > heightHeader){
                    $('nav.navigation').addClass('navigation-block');
                }else {
                    $('nav.navigation').removeClass('navigation-block');
                }
            })
        })
    </script>
</body>
</html>