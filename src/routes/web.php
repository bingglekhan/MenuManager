<?php

Route::middleware(['web', 'auth', 'core'])
    ->namespace('LaravelEnso\MenuManager\app\Http\Controllers')
    ->group(function () {
        Route::prefix('system')->as('system.')
            ->group(function () {
                Route::prefix('menus')->as('menus.')
                    ->group(function () {
                        Route::get('initTable', 'MenuTableController@initTable')
                            ->name('initTable');
                        Route::get('getTableData', 'MenuTableController@getTableData')
                            ->name('getTableData');
                        Route::get('exportExcel', 'MenuTableController@exportExcel')
                            ->name('exportExcel');
                    });

                Route::resource('menus', 'MenuController', ['except' => ['show', 'index']]);
            });
    });
