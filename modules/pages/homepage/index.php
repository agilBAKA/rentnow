<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>

</head>
<body> 
   <?php require 'modules/components/nav.php'; ?>
   <?php require 'modules/components/modal-register.php'; ?>
   <?php require 'modules/components/modal-subscribe.php'; ?>
   
    <header class="header-section">
        <div class="header-content">
            <h1>Justo Amet Lorem</h1>
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
                                        <img src="https://images.pexels.com/photos/175979/pexels-photo-175979.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="">
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
                                        <img src="https://images.pexels.com/photos/6553/person-holiday-vacation-woman.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="">
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
    <section class="section section-cities">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   <h2 class="heading">Mauris nec augue</h2> 
                </div>
                <div class="col-md-12">
                    <div class="catalogue-cities">
                        <div class="bg-dark big-city">
                            <a href="" class="big-font">
                             <img src="https://images.pexels.com/photos/50632/pexels-photo-50632.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="" class="img-cover">
                             <label>
                                london
                                <span class="btn-white-o">explore</span>   
                             </label>
                            </a>
                        </div>
                        <div class="box-landspace-cities">
                            <div class="bg-dark landscape-city">
                                <a href="" class="big-font">
                                    <img src="https://images.pexels.com/photos/5463/people-eiffel-tower-france-landmark.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="" class="img-cover">
                                    <label>
                                        france
                                        <span class="btn-white-o">explore</span>   
                                    </label>
                                </a>
                            </div>
                            <div class="bg-dark landscape-city">
                                <a href="" class="big-font">
                                    <img src="https://images.pexels.com/photos/2324/skyline-buildings-new-york-skyscrapers.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="" class="img-cover">
                                    <label>
                                        US
                                        <span class="btn-white-o">explore</span>
                                    </label>   
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="bg-dark square-city">
                            <a href="">
                                <img src="https://images.pexels.com/photos/709/nature-mountain-volcano-asia.jpg?w=940&h=650&auto=compress&cs=tinysrgb" alt="" class="img-cover">
                                <label>
                                    Indonesia
                                    <span class="btn-white-o">explore</span>
                                </label>   
                            </a>
                        </div>
                        <div class="bg-dark square-city">
                            <a href="">
                                <img src="https://cache-graphicslib.viator.com/graphicslib/thumbs674x446/2484/SITours/corcovado-mountain-and-christ-redeemer-statue-half-day-tour-in-rio-de-janeiro-128058.jpg" alt="" class="img-cover">
                                <label>
                                    Brazil
                                    <span class="btn-white-o">explore</span>  
                                </label> 
                            </a>
                        </div>
                        <div class="bg-dark square-city">
                            <a href="">
                                <img src="https://images.pexels.com/photos/27954/pexels-photo-27954.jpg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-cover">
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
    
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
            });

            $('#register').on('click', function(){
                $('#modal-register').addClass('modal-show');
                $('body').addClass('no-scroll');
            });

            $('#btn-subscribe').on('click', function(e){
                e.preventDefault();
                $('#modal-subscribe').addClass('modal-show');
                $('body').addClass('no-scroll');
                return false;
            });

            $('.overlay').on('click', function(){
                $('#modal-register').removeClass('modal-show');
                $('body').removeClass('no-scroll');
            });
        })
    </script>
</body>
</html>