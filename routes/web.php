<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('Home');
});
Route::get("/produits/{cat}",function($cat){
  $produits=[];
  if($cat == 'pizza'){
    $produits=array(
        array(
            "nom"=>"Marguerita",
            "prix"=>29.00,
            'image'=>"p2.jpg"

        ),
        array(
            "nom"=>"Regina",
            "prix"=>39.00,
            'image'=>"p1.png"

        ),
        array(
            "nom"=>"Pizza Nature VH",
            "prix"=>39.00,
            'image'=>"p3.jpg"

        ),
        array(
            "nom"=>"Campione Pizza",
            "prix"=>60,
            'image'=>"p4.png"

        ),
        array(
            "nom"=>"4 Fromages",
            "prix"=>60,
            'image'=>"p5.png"

        ),
        array(
            "nom"=>"Pizza figurent",
            "prix"=>60,
            'image'=>"p6.jpg"

        ),
    );
}
else if($cat == "Shawarma"){
    $produits=array(
      array(
          "nom"=>"Beef Shawarma",
          "prix"=>29.00,
          'image'=>"S1.png"
      
      ),
      array(
          "nom"=>"Chicken Shawarma with Sweet Potato Fries",
          "prix"=>39.00,
          'image'=>"S2.png"
      
      ),
      array(
          "nom"=>"Chicken Shawarma",
          "prix"=>39.00,
          'image'=>"S4.png"
      
      ),
      array(
          "nom"=>"Doner kebab a shawarma in a pit of fresh",
          "prix"=>60,
          'image'=>"S3.png"
      
      ),
      array(
          "nom"=>"DIY Shawarma",
          "prix"=>60,
          'image'=>"S5.jpg"
      
      ),
      array(
          "nom"=>"Chicken Shawarma Bowl",
          "prix"=>60,
          'image'=>"S6.jpg"
      
      )
      );
  }
  return view('Produits',[
    'products' => $produits,
    "categorie" => $cat
  ]);
});