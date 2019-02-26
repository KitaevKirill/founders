<?php

namespace App\Http\Controllers;

use App\PostNew;
use App\PostOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewPostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('author');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = PostNew::paginate(10);

        return view('papers.index', ['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostNew  $postNew
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = PostNew::findOrFail($id);
        $date =  PostOption::where('post_id', $id)->first();

        return view('posts.view1', ['post' => $post, 'date' => $date]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostNew  $postNew
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = PostNew::findOrFail($id);
        $date =  PostOption::where('post_id', $id)->first();

        return view('posts.postPrefab', ['post' => $post, 'date' => $date]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostNew  $postNew
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $post = PostNew::findOrFail($id);
        $date =  PostOption::where('post_id', $id)->first();

        $post->save();
        $date->save();

        return redirect('/paper');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostNew  $postNew
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = PostNew::find($id);
        $date =  PostOption::where('post_id', $id)->first();

        if ($date !== null) {
            $date->delete();
        }
        if ($post !== null) {
            $post->delete();
        }
//        Storage::delete('public/brushes/brush'.$id.'jpg||png');

        return redirect('/paper');
    }
}
