<?php
if (!function_exists('settings')) {
    function settings()
    {
    //    $root = "http://localhost/round_53/project/electro_master/"; 
       $root = "http://localhost/phpmysql-project/electro_master%20(3)/electro_master/"; 
        return [
            'companyname'=> 'Electro Master',
            'logo'=>$root."admin/assets/img/logo.svg",
            'homepage'=> $root,
            'adminpage'=>$root.'admin/',
            'hostname'=> 'localhost',
            'user'=> 'root',
            'password'=> '',
            'database'=> 'electro_master'
        ];
    }
}
if (!function_exists('testfunc')) {
    function testfunc()
    {
        return "<h3>testing common functions</h3>";
    }
}
