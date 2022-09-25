<?php

use App\Services\Router;
use App\Controllers\Product;
use App\Controllers\Category;

Router::page('/main','main');
Router::page('/categories','categories');

Router::page('/products','products');
Router::page('/product_new','product_new');
Router::page('/product', 'product');

Router::post('/product/create', Product::class,'createProduct' , true);
Router::post('/product/delete', Product::class,'deleteProducts' , true);
Router::post('/category/create', Category::class,'createCategories' , true);

Router::enable();





