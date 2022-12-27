<?php


require "vendor/autoload.php";
// use Eraasoft311\Mvc\Storage\StorageDash;
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
// use Eraasoft311\Mvc\Cookies\CookiesDash;
use Eraasoft311\Mvc\Env\EnvDash;

EnvDash::env("ww");
// use Eraasoft311\Mvc\Database\DB;
// $data = DB::table('category')->select()->all();

// CookiesDash::set("name","ahmed cookies");

// CookiesDash::destroy("name");

// print_r(CookiesDash::get("name"));

$storage = new StorageDash;
$storage->set("ww","ww",2323,"/");




