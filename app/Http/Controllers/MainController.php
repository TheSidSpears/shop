<?php

namespace App\Http\Controllers;

use App\Repositories\Products;
use App\ViewModels\ProductViewModel;

class MainController extends Controller
{
    public function index()
    {
        $limit = 20;

        $newArrivals = Products::newArrivals($limit);
        $onSale =  Products::onSale($limit);
        $bestsellers = Products::bestsellers($limit);

        return (new ProductViewModel($newArrivals,$onSale,$bestsellers))
            ->view('main.index');
    }
}
