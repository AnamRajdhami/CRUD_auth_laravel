<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Request $request, $id)
    {
        Comment::create([
            'product_id' => $id,
            'comment' => $request->comment,
        ]);

        $data =  Comment::insert([
            'product_id' => $id,
            'comment' => $request->comment,
        ]);
  
        return redirect('/products');
    }
}
