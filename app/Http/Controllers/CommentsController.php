<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Models\post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($id)
    {
        request()->validate([
            'text' => ['required', 'min:3']
        ]);

        $comment = new Comment();
//        $post = post::all()[$id - 1];

        $comment->text = request('text');
        $comment->user_id = Auth::user()->id;
        $comment->post_id = $id;

        $comment->save();

        return redirect("/art" . $id);
    }
}
