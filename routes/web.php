<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/authors', 'AuthorController@index')->name('authors.index');
Route::get('/authors/create', 'AuthorController@create')->name('authors.create');
Route::post('/authors', 'AuthorController@store')->name('authors.store');
Route::get('/authors/{book}', 'AuthorController@show')->name('authors.show');
Route::get('/authors/{book}/edit', 'AuthorController@edit')->name('authors.edit');
Route::put('/authors/{book}', 'AuthorController@update')->name('authors.update');
Route::delete('/authors/{book}', 'AuthorController@destroy')->name('authors.destroy');

Route::resource('tags', 'TagController');
Route::resource('books', 'BookController');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
# View all books
/*
Route::get('/books', function() {

})->name('books.index');

# Display form to add a new book
Route::get('/books/create', function() {

})->name('books.create');

# Process form to add a new book
Route::post('/books', function() {

})->name('books.store');

# Display an individual book
Route::get('/books/{book}', function($book) {

})->name('books.show');

# Display form to edit an individual book
Route::get('/books/{book}/edit', function($book) {

})->name('books.edit');

# Process form to save edits to an individual book
Route::put('/books/{book}', function($book) {

})->name('books.update');

# Delete an individual book
Route::delete('/books/{book}', function($book) {

})->name('books.destroy');
*/