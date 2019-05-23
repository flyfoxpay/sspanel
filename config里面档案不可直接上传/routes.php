<?php

//新增在$app->post('/telegram_callback', 'App\Controllers\HomeController:telegram');底下
$app->post('/flyfoxpay_back/{type}', 'App\Services\Payment:notify');
$app->get('/flyfoxpay_back/{type}', 'App\Services\Payment:notify');

