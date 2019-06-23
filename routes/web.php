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

Route::get("/",[
    "as" => "web.index",
    "uses" => "WebController@index"
]);

Route::get("/contacto",[
    "as" => "web.contacto",
    "uses" => "WebController@contacto"
]);

Route::get("/articulos",[
    "as" => "web.articulos",
    "uses" => "WebController@articulos"
]);

Route::get("/sucursales",[
    "as" => "web.sucursales",
    "uses" => "WebController@sucursales"
]);


Route::group(["prefix" => "panel"],function (){

    Route::get("/", [
       "as" => "panel.index",
       "uses" => "PanelController@index"
    ]);


    Route::group(["prefix" => "articulos"],function (){

        Route::get("/",[
            "as" => "articulos.index",
            "uses" => "ArticulosController@index"
        ]);


        Route::get("/create",[
            "as" => "articulos.create",
            "uses" => "ArticulosController@create"
        ]);


        Route::post("/store",[
            "as" => "articulos.store",
            "uses" => "ArticulosController@store"
        ]);


        Route::get("/{id}/edit",[
            "as" => "articulos.edit",
            "uses" => "ArticulosController@edit"
        ]);


        Route::put("/{id}/update",[
            "as" => "articulos.update",
            "uses" => "ArticulosController@update"
        ]);

        Route::delete("/{id}/destroy",[
            "as" => "articulos.destroy",
            "uses" => "ArticulosController@destroy"
        ]);


    });

});