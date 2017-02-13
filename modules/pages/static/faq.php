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
                    <h1 class="title-page">FAQ</h1>    
                </div>
                <div class="col-md-7">
                	<p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis excepturi dolore, recusandae voluptates qui enim nesciunt blanditiis, debitis libero optio et minima suscipit accusamus ullam error distinctio quo officiis? Molestias.   
                    </p>
                    <div class="box-faq">
                        <div class="list-faq">
                            <div class="title-faq">
                               <i class="zmdi zmdi-caret-right"></i>
                               <h4>Ut imperdiet feugiat libero?</h4>
                            </div>
                            <div class="content-faq">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere iure odit quis a quaerat ex expedita, quod autem sequi tempore. Delectus fuga at, tempora perferendis temporibus magnam modi obcaecati deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="list-faq">
                            <div class="title-faq">
                               <i class="zmdi zmdi-caret-right"></i>
                               <h4>Ut imperdiet feugiat libero?</h4>
                            </div>
                            <div class="content-faq">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere iure odit quis a quaerat ex expedita, quod autem sequi tempore. Delectus fuga at, tempora perferendis temporibus magnam modi obcaecati deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="list-faq">
                            <div class="title-faq">
                               <i class="zmdi zmdi-caret-right"></i>
                               <h4>Ut imperdiet feugiat libero?</h4>
                            </div>
                            <div class="content-faq">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere iure odit quis a quaerat ex expedita, quod autem sequi tempore. Delectus fuga at, tempora perferendis temporibus magnam modi obcaecati deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="list-faq">
                            <div class="title-faq">
                               <i class="zmdi zmdi-caret-right"></i>
                               <h4>Ut imperdiet feugiat libero?</h4>
                            </div>
                            <div class="content-faq">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere iure odit quis a quaerat ex expedita, quod autem sequi tempore. Delectus fuga at, tempora perferendis temporibus magnam modi obcaecati deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="list-faq">
                            <div class="title-faq">
                               <i class="zmdi zmdi-caret-right"></i>
                               <h4>Ut imperdiet feugiat libero?</h4>
                            </div>
                            <div class="content-faq">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere iure odit quis a quaerat ex expedita, quod autem sequi tempore. Delectus fuga at, tempora perferendis temporibus magnam modi obcaecati deserunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <p>
                        Cotton candy gingerbread pastry halvah oat cake. Candy canes apple pie tiramisu. Apple pie sweet roll chocolate bar. Muffin wafer brownie tootsie roll dragée candy. Cheesecake marshmallow lollipop sugar plum marshmallow candy. Sweet sugar plum cotton candy croissant powder sesame snaps danish. Oat cake jujubes chupa chups cheesecake jelly gummi bears dragée lollipop chocolate. Tootsie roll chupa chups oat cake cake bear claw chupa chups jujubes. Liquorice jujubes pudding tootsie roll bear claw gingerbread. Pastry macaroon jujubes. Topping cupcake pie halvah tootsie roll cookie. Bonbon oat cake pie sweet wafer pastry cake cotton candy.
                    </p>
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
            $('.title-faq').on('click', function () {
               $(this).toggleClass('in-active');
               $(this).next().toggleClass('content-show');
            })
        })
    </script>
 </body>
</html>