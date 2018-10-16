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

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');
Route::get('post/{id}', function ($id) {
    if($id == 1){
        $post = [
            'title'=>'it is title with id 1',
            'content'=>'it is content with id 1'
        ];
    }else{
        $post = [
            'title'=>'it is title with difrent id',
            'content'=>'it is content with difrent id'
        ];
    }
    return view('blog.post',['post'=>$post]);
})->name('blog.post');
Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix'=>'admin'],function(){

    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');
    Route::get('create', function () {
        return view('admin.create');
    })->name('admin.create');
    Route::post('create', function (\Illuminate\Support\Facades\Request $request) {
        return view('admin.create');
    })->name('admin.create');
    Route::get('edit/{id}', function ($id) {
        if($id == 1){
            $post = [
                'title'=>'it is title with id 1',
                'content'=>'it is content with id 1'
            ];
        }else{
            $post = [
                'title'=>'it is title with difrent id',
                'content'=>'it is content with difrent id'
            ];
        }
        return view('admin.edit',['post'=>$post]);
    })->name('admin.edit');
    Route::post('edit', function (\Illuminate\Support\Facades\Request $request) {
        return view('admin.edit');
    })->name('admin.update');
});


