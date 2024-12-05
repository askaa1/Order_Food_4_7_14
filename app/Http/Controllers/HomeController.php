<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hal1() {
        $makanans = Makanan::all();
        return view ("hal1", compact('makanans'));
    }

    public function hal2() {
        return view ("hal2");
    }

    public function hal3() {
        return view ("hal3");
    }

    public function hal4() {
        $makanans = Makanan::all();

        return view ("hal4", compact('makanans'));
    }

    public function hal5() {
        return view ("hal5");
    }

    public function hal6() {
        return view ("hal6");
    }

    public function login() {
        return view ("login");
    }
}
