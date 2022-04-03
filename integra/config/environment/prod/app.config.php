<?php

/*Настройки приложения*/
return [

  'app_name'        => 'SAI Партнеры 🤖',
  'debug'           => true,  //режим дебага, системная опция
  'profiling'       => false,  //режим профилирования, системная опция
  'dummy_request'   => false,  //режим запроса из заглушки
  'dummy_file_name' => 'form.json',
  'script_folder'   => 'integra',

  'request_resource' => 'shop.partners', //
  'database'         => [

    'name'     => 'test',
    'username' => 'test',
    'password' => 'lH8oZ6uA',
  ],

  'refresh_timeout' => 5,


];