<?php

$url_web =str_replace("&", "&amp", "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);


  define('BASE_URL',"app\Http\Controllers");
  define('URL_WEB',$url_web);

