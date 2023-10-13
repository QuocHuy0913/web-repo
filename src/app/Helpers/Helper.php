<?php
use App\Models\Brand;
use App\Models\Category;


function getAllCategory(){
    $categories = Category::all();
    return $categories;
}
function getAllBrand(){
    $brands = Brand::all();
    return $brands;
}

