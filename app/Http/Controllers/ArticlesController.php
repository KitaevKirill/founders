<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 09.12.2018
 * Time: 20:14
 */

namespace App\Http\Controllers;

use App\PostNew;
use App\PostOption;
use App\User;


class ArticlesController extends Controller
{
    public function view($id)
    {
//        if ($id < 6 && $id > 0) {
//            return view("posts.post$id");
//        } else {
            $post = PostNew::findOrFail($id);
            $data = PostOption::where('post_id', $id)->first(); //where('post_id', $id)->first();
            $author = User::where('id', $post->author_id)->first();
            $square = PostNew::all()->random(3);

            if ($data->template == 1) {
                return view('posts.postHorizontal', ['post' => $post, 'data' => $data, 'author' => $author, 'square' => $square]);
            }
            else {
                return view('posts.postVertical', ['post' => $post, 'data' => $data, 'author' => $author, 'square' => $square]);
            }

    }

    public function newPost1Controller()
    {
        return view('posts.1'//, ['wat' => '13wat']
        );
    }

    public function newPost2Controller()
    {
        return view('posts.2'//, ['wat' => '13wat']
        );
    }

    public function newPost3Controller()
    {
        return view('posts.3'//, ['wat' => '13wat']
        );
    }

    public function newPost4Controller()
    {
        return view('posts.4'//, ['wat' => '13wat']
        );
    }

    public function newPost5Controller()
    {
        return view('posts.5'//, ['wat' => '13wat']
        );
    }

//    public function post1Controller()
//    {
//        return view('posts.post001'//, ['wat' => '13wat']
//        );
//    }
//
//    public function post2Controller()
//    {
//        return view('posts.post002'//, ['wat' => '13wat']
//        );
//    }
//
//    public function post3Controller()
//    {
//        return view('posts.post003'//, ['wat' => '13wat']
//        );
//    }
//
//    public function post4Controller()
//    {
//        return view('posts.post004'//, ['wat' => '13wat']
//        );
//    }
//
//    public function post5Controller()
//    {
//        return view('posts.post005'//, ['wat' => '13wat']
//        );
//    }

    public function offerController()
    {
        return view('offer'//, ['wat' => '13wat']
        );
    }
}