<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function convertEuroToDollar($amount)
    {
        return $amount * 1.10;
    }

    public function convertDollarToEuro($amount)
    {
        return $amount * 0.90;
    }

    public function calculateDiscount($price, $discountPercentage)
    {
        if ($discountPercentage < 0 || $discountPercentage > 100) {
            return $price;
        }

        $discountAmount = $price * ($discountPercentage / 100);
        return $price - $discountAmount;
    }
}