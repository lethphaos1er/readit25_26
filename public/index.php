<?php

require_once '../core/init.php';

//ROUTE des posts
if(isset($_GET['posts'])):
    require_once '../app/routers/post.php';
else:
    require_once '../app/routers/index.php';
endif;