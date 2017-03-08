<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>
</head>
<body>
   <?php require 'modules/components/nav.php'; ?>
   
    <header class="header-section">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <h1>Justo Amet Lorem</h1>
                    <div class="clearfix"></div>
                    <?php require 'modules/pages/homepage/form.php'; ?>
                </div>
            </div>
        </div>
    </header>
    <section class="section section-stories">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="heading">Fusce pretium sagittis</h2>    
                    <div class="list-stories">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="sub-heading">Suspendisse eu justo</h3>
                            </div>
                            <div class="col-md-8">
                                <figure class="cover-stories">
                                    <a href="">
                                        <img src="dist/images/stories.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <div class="box-stories">
                                    <a href="" class="link-stories">Mauris nibh quam</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet inventore, rerum dicta quod dolor est fuga ratione provident maiores aperiam, non illo error autem nisi minus in, facilis. Incidunt, eum.</p>
                                    <a href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-stories">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="sub-heading">Suspendisse eu justo</h3>
                            </div>
                            <div class="col-md-8">
                                <figure class="cover-stories">
                                    <a href="">
                                        <img src="dist/images/stories.jpg" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <div class="box-stories">
                                    <a href="" class="link-stories">Mauris nibh quam</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet inventore, rerum dicta quod dolor est fuga ratione provident maiores aperiam, non illo error autem nisi minus in, facilis. Incidunt, eum.</p>
                                    <a href="">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn-primary-o btn-big">See all stories</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-destination">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <h2 class="heading">Mauris nec augue</h2> 
                </div>
                <div class="col-md-12">
                    <div class="catalogue-destination">
                        <div class="bg-dark big-destination">
                            <a href="" class="big-font">
                             <img src="dist/images/destination/big-pict.jpg" alt="" class="img-cover">
                             <label>
                                london
                                <span class="btn-white-o">explore</span>   
                             </label>
                            </a>
                        </div>
                        <div class="box-landspace-destination">
                            <div class="bg-dark landscape-destination">
                                <a href="" class="big-font">
                                    <img src="dist/images/destination/landscape-pict.jpg" alt="" class="img-cover">
                                    <label>
                                        france
                                        <span class="btn-white-o">explore</span>   
                                    </label>
                                </a>
                            </div>
                            <div class="bg-dark landscape-destination">
                                <a href="" class="big-font">
                                    <img src="dist/images/destination/landscape-pict.jpg" alt="" class="img-cover">
                                    <label>
                                        US
                                        <span class="btn-white-o">explore</span>
                                    </label>   
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="bg-dark square-destination">
                            <a href="">
                                <img src="dist/images/destination/square-pict.jpg" alt="" class="img-cover">
                                <label>
                                    Indonesia
                                    <span class="btn-white-o">explore</span>
                                </label>   
                            </a>
                        </div>
                        <div class="bg-dark square-destination">
                            <a href="">
                                <img src="dist/images/destination/square-pict.jpg" alt="" class="img-cover">
                                <label>
                                    Brazil
                                    <span class="btn-white-o">explore</span>  
                                </label> 
                            </a>
                        </div>
                        <div class="bg-dark square-destination">
                            <a href="">
                                <img src="dist/images/destination/square-pict.jpg" alt="" class="img-cover">
                                <label>
                                    Italy
                                    <span class="btn-white-o">explore</span>
                                </label>   
                            </a>
                        </div>
                        <div class="bg-dark more">
                            <a href="">
                                <img src="https://images.pexels.com/photos/27954/pexels-photo-27954.jpg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-cover">
                                <label class="btn-white-o">See more</label>   
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require 'modules/components/footer.php'; ?>
    <?php require 'modules/components/modal-register.php'; ?>
    <?php require 'modules/components/modal-subscribe.php'; ?>

    <div class="destination-drop">
    <a href="#" class="close-drop"><i class="zmdi zmdi-close-circle"></i></a>
    <table>
        <tr>
            <td>
                <span class="group-title">DKI Jakarta</span>
                <a class="destination" data-value="Jakarta Barat">Jakarta Barat</a>
                <a class="destination" data-value="Jakarta Pusat">Jakarta Pusat</a>
                <a class="destination" data-value="Jakarta Timur">Jakarta Timur</a>
                <a class="destination" data-value="Jakarta Selatan">Jakarta Selatan</a>
                <a class="destination" data-value="Jakarta Utara">Jakarta Utara</a>
                <br>
                <span class="group-title">Bali</span>
                <a class="destination" data-value="Denpasar">Denpasar</a>
                <a class="destination" data-value="Jimbaran">Jimbaran</a>
                <a class="destination" data-value="Kuta">Kuta</a>
                
            </td>
            <td>
                <span class="group-title">Yogyakarta</span>
                <a class="destination" data-value="Yogyakarta">Yogyakarta</a>
                <span class="group-title">Jawa Barat</span>
                <a class="destination" data-value="Bandung">Bandung</a>
                <a class="destination" data-value="Bekasi">Bekasi</a>
                <a class="destination" data-value="Bogor">Bogor</a>
                <span class="group-title">Jawa Timur</span>
                <a class="destination" data-value="Malang">Malang</a>
             </td>
         </tr>
    </div>
</div>
    
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="dist/js/vendor/jquery.daterangepicker.min.js"></script>
    <script type="text/javascript" src="dist/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // var heightHeader = $('header.header-section').outerHeight() - 100;
            $(window).scroll(function () {
                var scolling  =  $(window).scrollTop();
                if(scolling > 150){
                    $('nav.navigation').addClass('navigation-block');
                }else {
                    $('nav.navigation').removeClass('navigation-block');
                }
            });

            $('#dateRange').dateRangePicker(
            {
                stickyMonths: true,
                autoclose: true,
                separator : ' to ',
                customArrowPrevSymbol: '<i class="zmdi zmdi-arrow-left"></i>',
                customArrowNextSymbol: '<i class="zmdi zmdi-arrow-right"></i>',
                getValue: function()
                {
                    if ($('#date-form').val() && $('#date-to').val() )
                        return $('#date-form').val() + ' to ' + $('#date-to').val();
                    else
                        return '';
                },
                setValue: function(s,s1,s2)
                {
                    $('#date-form').val(s1);
                    $('#date-to').val(s2);
                }
            });
            

            $("#where").on( "click", function(){
                var pos = $(this).offset();

                $("#where.active").removeClass("active");
                $(this).addClass("active");
                $(".destination-drop").css({
                    "display": "block",
                    "left": pos.left,
                    "top": pos.top + $(this).innerHeight()
                });

                el = $(this);
                // $(".destination-drop a").hover(function(){
                //     var dataVal = $(this).data("value");
                //     $("#where.active").val( dataVal );
                // });
                $(".destination-drop a").click(function(){
                    var dataVal = $(this).data("value");
                    $("#where.active").val( dataVal );
                    $(".destination-drop").hide();
                });

            });
            $(".destination-drop a").on("click", function(){
                $(".destination-drop").hide();
            })
            
            $('.destination-drop').on('mouseleave',function(){
                $(this).hide()
            });
        })
    </script>
</body>
</html>