<?php

Route::get('{any}', function(){
        return view('landing');
         })->where('any', '.*');

        //  Route::get('{any}', function () {
        //         return view('app');
        //     })->where('any', '.*');

        // Route::get('/vue/{vue_capture?}', function () {
        //         return view('vue.index');
        //        })->where('vue_capture', '[\/\w\.-]*');

       