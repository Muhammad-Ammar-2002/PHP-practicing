<?php

//var_dump(apache_get_modules());

// echo $_SERVER['REQUEST_URI']."<br>";


route_get(public_path(),'home');
route_get(public_path().'/lang','controllers.set_lang');
route_post('/practice/public/index.php/upload','controllers.upload');

// route_get('/practice/index.php/try','test');
// route_get("/practice/index.php/test",'layout/header');
//  route_post("/practice/index.php/user",'create_user');




