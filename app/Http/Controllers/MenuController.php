<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display the Kopibro landing page with grouped menu data.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $coffee = Menu::category('kopi')->get();
        $nonCoffee = Menu::category('non_kopi')->get();
        $food = Menu::category('makanan')->get();

        // Signature product: first item in the coffee category
        $signature = $coffee->first();

        return view('home', compact('coffee', 'nonCoffee', 'food', 'signature'));
    }
}
