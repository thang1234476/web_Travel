<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function index() {
        return "home";
    }
    public function getNews() {
        return 'Danh sách tin tức';
    }
    public function getCategories($id) {
        return 'Chuyên mục' . $id;
    }
}
