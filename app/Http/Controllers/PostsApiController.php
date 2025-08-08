<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsApiController extends Controller
{
    public function index(){

$Posts = Post::get();
$array = [

'data'=> $Posts,
'message'=> 'ok',
'status'=> 200

];
return response($array);
}

}
