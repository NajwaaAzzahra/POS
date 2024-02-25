<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Transaction; 
class WebController extends Controller
{
        public function home(){
            return view('hello')
            ->with('name','Toko Najwa');
        }

        public function category(){
            $products = ['Food Beverage', 'Beauty Health', 'Home Care', 'Baby Kid']; 
            return view('products', ['category' => 'Kategori Produk', 'products' => $products]);
        }
    
        public function foodBeverage(){
            $products = ['Milkshake Vanilla', 'Vanilla Cromboloni', 'Butter Croissant']; 
            return view('products', ['category' => 'Food & Beverage', 'products' => $products]);
        }
    
        public function beautyHealth(){
            $products = ['Exfoliating Toner', 'SPF 50++ Protection', 'Body Butter']; 
            return view('products', ['category' => 'Beauty & Health', 'products' => $products]);
        }
    
        public function homeCare(){
            $products = ['Jasmine Scented Candle', 'Strawberry Handsoap', 'Handsanitizer']; 
            return view('products', ['category' => 'Home Care', 'products' => $products]);
        }
    
        public function babyKid(){
            $products = ['Baby Playpen', 'Kid Hair Body Cologne', 'Baby Pampers size L']; 
            return view('products', ['category' => 'Baby & Kid', 'products' => $products]);
        }

        public function user($id, $name) {
        return view('user', ['id' => $id, 'name' => $name]);
        }

        public function transaksi() {
        $transaksi = [
        ['id' => 'na1', 'date' => '01-01-2024', 'category' => 'Baby & Kid', 'product_name' => 'Baby Pampers size L', 'quantity' => 2, 'price' => 60000],
        ['id' => 'na2', 'date' => '01-01-2024', 'category' => 'Home Care', 'product_name' => 'Jasmine Scented Candle', 'quantity' => 1, 'price' => 45000],
        ['id' => 'na3', 'date' => '01-01-2024', 'category' => 'Food & Beverage', 'product_name' => 'Vanilla Cromboloni', 'quantity' => 4, 'price' => 23000],
        ['id' => 'na5', 'date' => '02-01-2024', 'category' => 'Beauty & Health', 'product_name' => 'Exfoliating Toner', 'quantity' => 1, 'price' => 160000],
        ['id' => 'na6', 'date' => '02-01-2024', 'category' => 'Beauty & Health', 'product_name' => 'Body Butter', 'quantity' => 2, 'price' => 55000],
        ['id' => 'na7', 'date' => '02-01-2024', 'category' => 'Baby & Kid', 'product_name' => 'Baby Playpen', 'quantity' => 1, 'price' => 96000],
        ['id' => 'na8', 'date' => '03-01-2024', 'category' => 'Home Care', 'product_name' => 'Strawberry Handsoap', 'quantity' => 5, 'price' => 35000],
        ['id' => 'na9', 'date' => '03-01-2024', 'category' => 'Food & Beverage', 'product_name' => 'Milkshake Vanilla', 'quantity' => 7, 'price' => 22000],
        ];
        return view('transaksi', ['transactions' => $transaksi]);
        }
}
