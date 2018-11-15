<?php
include("../dataAccess/dbConnect.php");
include("../dataAccess/orderDAO.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Signup Form */
if (!empty($_POST['orderSubmit'])) {
    $discID = $_POST['discID'];
    $email = $_POST['email'];
    $discPrice = $_POST['discPrice'];
    $name = $_POST['name'];
    /* Regular expression check */
    $name_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $name);
    $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);

    if ($name_check && $email_check && strlen(trim($name)) > 0) {
        $db = getDB();
        $orderDAO = new orderDAO($db);
        $order = $orderDAO->addOrder($discID, $discPrice, $name, $email);
        echo $order;
        session_start();
        if ($order) {
            $_SESSION['order']=array('name'=>$name);
            $url = BASE_URL . 'index.php';
            header("Location: $url"); // Page redirecting to home.php 
        } else {
          
            $_SESSION['error']= "order already exists";
            $url = BASE_URL . 'registerOrder.php';
        }
    }
    else {
        echo "Error en datos";
        $_SESSION['error']= "Error in data";
        $url = BASE_URL . 'registerOrder.php';
    }
}
?>
