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
    <section class="section section-profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-menu">
                        <ul>
                            <li>
                                <a href="">Message</a>
                            </li>
                            <li>
                                <a href="">Notification</a>
                            </li>
                            <li>
                                <a href="" class="profile-active">Setting</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-4">
                            <h3 class="title-setting">Edit your personal info</h3>
                        </div>
                        <div class="col-md-7">
                            <form action="" class="default-form">
                                <div class="field">
                                    <input type="text" value="Devi">
                                </div>
                                <div class="field">
                                    <input type="text" value="Krisdiansyah" placeholder="Last name">
                                </div>
                                <div class="field">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="field">
                                    <input type="email" placeholder="Confrim email">
                                </div>
                                <div class="field">
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="field">
                                    <input type="password" placeholder="Confrim password">
                                </div>
                                <div class="field bg-input gender">
                                    <label>Gender</label>
                                    <div class="box-radio">
                                        <div class="style-radio">    
                                            <input id="male" name="gender" type="radio" checked>
                                            <label>Male</label>
                                        </div>
                                        <div class="style-radio">
                                            <input id="female" name="gender" type="radio">
                                            <label >female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <input type="text" name="birthdate" id="birthdate" placeholder="Birthdate">
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Phone number">
                                </div>
                                <div class="field bg-input style-select">
                                    <label>Preferred Language</label>
                                    <div class="box-select">
                                         <select name="" id="">
                                             <option value="" selected>English</option>
                                             <option value="">Bahasa</option>
                                         </select>
                                    </div>
                                </div>
                                <div class="field bg-input style-select">
                                    <label>Preferred Currency</label>
                                    <div class="box-select">
                                         <select name="" id="">
                                             <option value="" selected>IDR</option>
                                             <option value="">USD</option>
                                         </select>
                                    </div>
                                </div>
                                <div class="field bg-input style-select">
                                    <label>Where You Live</label>
                                    <div class="box-select">
                                         <select name="" id="">
                                             <option value="" selected>Jakarta Barat</option>
                                             <option value="">Jakarta Selatan</option>
                                         </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <button type="submit" class="btn-primary full">save</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php require 'modules/components/footer.php'; ?>
    <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="dist/js/vendor/droparea.js"></script>
    <script type="text/javascript" src="dist/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
             $('#birthdate').datepicker({
                 autoclose: true
             });

             $('.style-select select').each(function(){
                var $this = $(this), numberOfOptions = $(this).children('option').length;
              
                $this.addClass('select-hidden'); 
                $this.wrap('<div class="select"></div>');
                $this.after('<div class="select-styled"></div>');

                var $styledSelect = $this.next('div.select-styled');
                $styledSelect.text($this.children('option').eq(0).text());
              
                var $list = $('<ul />', {
                    'class': 'select-options'
                }).insertAfter($styledSelect);
              
                for (var i = 0; i < numberOfOptions; i++) {
                    $('<li />', {
                        text: $this.children('option').eq(i).text(),
                        rel: $this.children('option').eq(i).val()
                    }).appendTo($list);
                }
              
                var $listItems = $list.children('li');
              
                $styledSelect.click(function(e) {
                    e.stopPropagation();
                    $('div.select-styled.active').not(this).each(function(){
                        $(this).removeClass('active').next('ul.select-options').hide();
                    });
                    $(this).toggleClass('active').next('ul.select-options').toggle();
                });
              
                $listItems.click(function(e) {
                    e.stopPropagation();
                    $styledSelect.text($(this).text()).removeClass('active');
                    $this.val($(this).attr('rel'));
                    $list.hide();
                    //console.log($this.val());
                });
              
                $(document).click(function() {
                    $styledSelect.removeClass('active');
                    $list.hide();
                });

            });
        })
    </script>
    
</body>
</html>