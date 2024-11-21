<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index()
    {
        return view('Admin.list_bill');
    }

    public function show_detail_bill()
    {
        return view('Admin.detail_bill');
    }
}
