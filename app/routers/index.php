<?php

//route par defaut
//PATERN: /
//CTRL:postsController
//ACTION:index

include_once '../app/controllers/postController.php';
\App\Controllers\PostsController\indexAction($conn);
