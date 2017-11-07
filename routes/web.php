<?php
/**
 * Created by PhpStorm.
 * User: eledi
 * Date: 07/11/2017
 * Time: 15:58
 */

/**
 * Translations
 */
Route::group(['prefix' => 'translations', 'middleware' => ['web', 'auth', 'role:admin']], function() {
    Route::get('/', '\Edyrkaj\TranslationManager\Controller@getIndex');
    Route::get('view/{group}', '\Edyrkaj\TranslationManager\Controller@getIndex')->where('group', '[A-Za-z]+');
    Route::post('edit/menu/{group}', '\Edyrkaj\TranslationManager\Controller@postEdit')->where('group', '[A-Za-z]+');
});
