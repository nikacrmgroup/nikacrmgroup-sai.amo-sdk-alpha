<?php

/*Настройки приложения*/
return [
  'app_name'        => 'SAI Партнеры 🤖',
  'debug'           => true,  //режим дебага, системная опция
  'profiling'       => false,  //режим профилирования, системная опция
  'dummy_request'   => true,  //режим запроса из заглушки
  'dummy_file_name' => 'form.json',
  'script_folder'   => 'integra',

  'request_resource' => 'shop.partners', //
  'database'         => [

    'name'     => 'admin_autoclav_integra',
    'username' => 'admin_autoclav_integra',
    'password' => 'RCx3g5Ha',
    //'connection' => 'mysql:host=127.0.0.1',


  ],

  'refresh_timeout' => 5,


];