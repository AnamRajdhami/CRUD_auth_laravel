<?php

namespace App\Repository;
use App\Models\Product;

class ProductRepository implements IProductRepository{

    public function getAllProducts()
    {
        return Product::all();
    }
    public function createProduct(array $data)
    {
        // Product::insert([
        //     'title' => $data['title'],
        //     'price' => $data['price'],
        // ]);

        $product = new Product();
        $product->title = $data['title'];
        $product->price = $data['price'];


        $product->save();

    }

    public function getSingleProduct($id)
    {
        return Product::find($id);
    }

    public function editProduct($id)
    {
        return Product::find($id);
    }

    public function updateProduct($id, array $data)
    {
        Product::find($id)->update([
            'title' => $data['title'],
            'price' => $data['price'],
        ]);
    }
}


?>