<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

$router->get('/', function () use ($router) {
    return 'hello world';
});

// 问题分类
$router->get('/question/questionCategory', ['as' => 'website.questionCategory', 'uses' => 'IndexController@questionCategory']);
// 问题列表
$router->get('/question/questionList', ['as' => 'website.questionList', 'uses' => 'IndexController@questionList']);

$router->group(['namespace' => 'Account'], function () use ($router) {
    $router->get('oauth/{type}/login', ['as' => 'auth.oauth.login', 'uses' => 'OauthController@login']);
    $router->get('oauth/{type}/callback', ['as' => 'auth.oauth.callback', 'uses' => 'OauthController@callback']);
});
