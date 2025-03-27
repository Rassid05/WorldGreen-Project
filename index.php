<?php 
include 'template/header.php'; 

$page = isset($_GET['page']) ? $_GET['page'] : "home";

function loadpage($page) {
    switch($page) {
        case 'home':
            include 'src/landingpage.php';
            break;

        case 'login':
            include 'src/login.php';
            break;

        case 'register':
            include 'src/register.php';
            break;

        case 'product':
            include 'src/produk.php';
            break;


        case 'product-detail':
            include 'src/produk-detail.php';
            break;


        default:
            include 'src/404.php'; 
            break;
    }
}
loadpage($page);
?>
