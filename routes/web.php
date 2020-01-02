<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// バリデーション
Route::pattern('newsId', '[0-9]+');
Route::pattern('concertId', '[0-9]+');

// トップページ
Route::get('/', 'TopController@index');

// プロフィールページ
Route::get('/profile/', 'Contents\ProfileController@index');

// お知らせ一覧ページ
Route::get('/news/', 'Contents\NewsController@index');
// お知らせ詳細ページ
//Route::get('/news/{newsId}/', 'Contents\NewsController@detail');
// レイアウト確認用
Route::get('/news/sample/', 'Contents\NewsController@detail');

// コンサート一覧ページ
Route::get('/concert/', 'Contents\ConcertController@index');
// コンサート詳細ページ
//Route::get('/concert/{concertId}/', 'Contents\ConcertController@detail');
// レイアウト確認用
Route::get('/concert/sample/', 'Contents\ConcertController@detail');

// リンクページ
Route::get('/links/', 'Contents\LinksController@index');