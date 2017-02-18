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
                <div class="col-md-12">
                <form action="" class="box-search">
                    <div class="field">
                        <input type="text" placeholder="Type what you are searching for">
                    </div>
                    <div class="field" id="searchRange">
                        <div class="field-search">
                            <div class="content-search">
                                <label for="search-form">Form</label>
                                <input type="text" id="search-form" placeholder="select here">
                            </div>
                        </div>
                        <div class="field-search">
                            <div class="content-search">
                                <label for="search-to">To</label>
                                <input type="text" id="search-to" placeholder="select here">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <button><i class="zmdi zmdi-search"></i></button>
                    </div>
                </form>

                </div>
                <div class="col-md-12">
                    <ul class="tabs">
                        <li class="active">Destination</li>
                        <li>Activity</li>
                        <li>Gear</li>
                    </ul>

                    <ul class="tab__content">
                        <li class="active">
                            <div class="content__wrapper">
                                <?php require 'modules/pages/search/result.php'; ?> 
                            </div>
                        </li>
                        <li>
                            <div class="content__wrapper">
                                <?php require 'modules/pages/search/result.php'; ?>
                            </div>
                        </li>
                        <li>
                            <div class="content__wrapper">
                                <?php require 'modules/pages/search/result.php'; ?>
                            </div>
                        </li>
                    </ul>
                    
                </div>
             </div>
        </div>
    </section>
 
    


    <?php require 'modules/components/footer.php'; ?>
    <?php require 'modules/components/modal-subscribe.php'; ?>

    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="dist/js/vendor/jquery.daterangepicker.min.js"></script>
    <script type="text/javascript" src="dist/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).ready(function(){
    
                // Variables
                var clickedTab = $(".tabs > .active");
                var tabWrapper = $(".tab__content");
                var activeTab = tabWrapper.find(".active");
                var activeTabHeight = activeTab.outerHeight();
                
                // Show tab on page load
                activeTab.show();
                
                // Set height of wrapper on page load
                tabWrapper.height(activeTabHeight);
                
                $(".tabs > li").on("click", function() {
                    
                    // Remove class from active tab
                    $(".tabs > li").removeClass("active");
                    
                    // Add class active to clicked tab
                    $(this).addClass("active");
                    
                    // Update clickedTab variable
                    clickedTab = $(".tabs .active");
                    
                    // fade out active tab
                    activeTab.fadeOut(250, function() {
                        
                        // Remove active class all tabs
                        $(".tab__content > li").removeClass("active");
                        
                        // Get index of clicked tab
                        var clickedTabIndex = clickedTab.index();

                        // Add class active to corresponding tab
                        $(".tab__content > li").eq(clickedTabIndex).addClass("active");
                        
                        // update new active tab
                        activeTab = $(".tab__content > .active");
                        
                        // Update variable
                        activeTabHeight = activeTab.outerHeight();
                        
                        // Animate height of wrapper to new tab height
                        tabWrapper.stop().delay(50).animate({
                            height: activeTabHeight
                        }, 500, function() {
                            
                            // Fade in active tab
                            activeTab.delay(50).fadeIn(250);
                            
                        });
                    });
                });
                

                // search range
                $('#searchRange').dateRangePicker(   
                {
                    stickyMonths: true,
                    autoclose: true,
                    separator : ' to ',
                    autoApply:true,
                    customArrowPrevSymbol: '<i class="zmdi zmdi-arrow-left"></i>',
                    customArrowNextSymbol: '<i class="zmdi zmdi-arrow-right"></i>',
                    getValue: function()
                    {
                        if ($('#search-form').val() && $('#search-to').val() )
                            return $('#search-form').val() + ' to ' + $('#search-to').val();
                        else
                            return '';
                    },
                    setValue: function(s,s1,s2)
                    {
                        $('#search-form').val(s1);
                        $('#search-to').val(s2);
                    }
                });
                 
            });
        })
    </script>
 </body>
</html>