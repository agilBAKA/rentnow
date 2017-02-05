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
                <div class="col-md-12">
                    <header>
                        <h1 class="title-page">Recommended for you</h1>
                    </header>
                </div>
             </div>
        </div>
    </section>
    <?php require 'modules/pages/recommended/destination.php'; ?>
    <?php require 'modules/pages/recommended/activity.php'; ?>
    <?php require 'modules/pages/recommended/gear.php'; ?>
    
    


    <?php require 'modules/components/footer.php'; ?>


    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 </body>
</html>