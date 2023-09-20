<?php
    if(isset($_SESSION['ss_user'])){
        unset($_SESSION['ss_user']);
    }
    header('location: ?controller=home');
?>