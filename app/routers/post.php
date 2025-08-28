<?php
use \App\Controllers\PostController;

include_once '../app/controllers/PostController.php';

switch ($_GET['posts']):
    case 'show':
        PostController\showAction($conn, $_GET['id']);
    default:
        PostController\indexAction($conn);
        break;
endswitch;