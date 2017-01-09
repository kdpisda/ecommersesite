<?php
    require 'includes/common.php';
    if(!isset($_SESSION['email'])){
        header("Location: index.php");
    }
    if(isset($_POST['submit'])){
        $len = strlen($_POST['new_pass']);
        $len_chk = strlen($_POST['new_pass_rep']);
        if($len != $len_chk){
            $_SESSION['msg'] = 'New password does not match';
            header("Location: setting.php");
        } else {
            /* Code to update password in the database if the 
            old password matches from the database */
            header("Location: index.php");
            /* Directing user to index.php which will 
            automatically redirect to products.php */
        }
    }