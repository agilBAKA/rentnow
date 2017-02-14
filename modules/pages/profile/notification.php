<!DOCTYPE html>
<html lang="en">
<head>
     <?php require 'modules/components/head.php'; ?>

</head>
<body class="body-pages">
	<?php require 'modules/components/nav-after-login.php'; ?>
    <section class="section section-profile">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-menu">
                        <ul>
                            <li>
                                <a href="message.php">Message</a>
                            </li>
                            <li>
                                <a href="notification.php" class="profile-active">Notification (3) <span class="bullet-notif"></span></a>
                            </li>
                            <li>
                                <a href="setting.php">Setting</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <ul class="list-notification">
                        <li class="unread">
                            <span class="bullet-notif"></span>
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="unread">
                            <span class="bullet-notif"></span>
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="unread">
                            <span class="bullet-notif"></span>
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="read">
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="read">
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="read">
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        <li class="read">
                            <label>New Order From Azmi Aziz</label>
                        </li>
                        
                    </ul>
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
            $('.unread').on('click', function(){
                $(this).removeClass('unread').removeAttr('span').addClass('read');
            })
        })
    </script>
    
</body>
</html>