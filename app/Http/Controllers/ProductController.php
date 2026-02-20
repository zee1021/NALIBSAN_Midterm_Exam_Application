<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'CyberWatch Ultra',
                'price' => '$399',
                'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&q=80&w=400',
                'desc' => 'Next-gen titanium casing with 72-hour battery.'
            ],
            [
                'name' => 'Sonic Buds Pro',
                'price' => '$199',
                'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&q=80&w=400',
                'desc' => 'Spatial audio with active noise cancellation.'
            ],
            [
                'name' => 'Nebula Tablet',
                'price' => '$899',
                'image' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?auto=format&fit=crop&q=80&w=400',
                'desc' => 'Ultra-thin 14-inch OLED display for creators.'
            ]
        ];

        return view('gadgets.index', compact('products'));
    }
}