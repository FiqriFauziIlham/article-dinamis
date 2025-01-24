<?php
use App\Models\Menu;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $menus = Menu::all();
    $articles = Article::all();
    return view('pages.article.index', compact('menus', 'articles'));
});

Route::get('/about', function () {
    return view('pages.about.index');
});