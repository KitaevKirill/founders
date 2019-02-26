<?php

namespace App\Http\Controllers;

use App\Jobs\MakeBrush;
use App\Jobs\SaveBrush;
use App\PostBufer;
use Illuminate\Http\Request;
use App\PostOptionBufer;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Post;
use App\PostOption;
use App\PostNew;
use App\Brush;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image as ImageInt;
use Illuminate\Support\Facades\Storage;


class PostsConsrtuctController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('author');
    }

    public function StepOne($id)
    {
        if ($id == 0) {
            return view('construct.stepOne');
        } else {
            $date = PostOption::where('post_id', $id)->first();
            return view('construct.stepOne', ['date' => $date]);
        }
    }

    public function StepOneStore($id)
    {
        if ($id == 0) {
            if (isset(PostOptionBufer::all()->last()->template)) {
                $date = PostOptionBufer::all()->last();

                $date->template = request()->template;

                $date->save();
                if (isset(PostOptionBufer::all()->last()->form)) {
                    return redirect('/fullpreview');
                } else {
                    return redirect('/postconstruct2/0');
                }
            } else {
                $date = new PostOptionBufer;

                $date->template = request()->template;

                $date->save();

                if (isset(PostOptionBufer::all()->last()->form)) {
                    return redirect('/fullpreview');
                } else {
                    return redirect('/postconstruct2/0');
                }
            }
        } else {
            $date = PostOption::where('post_id', $id)->first();

            $date->template = request()->template;

            $date->save();

            return redirect('/paper/' . $id . '/edit');
        }
    }

    public function StepTwo($id)
    {
        if ($id == 0) {
            if (isset(PostOptionBufer::all()->last()->template)) {
                $date = PostOptionBufer::all()->last();

                return view('construct.stepTwo', ['date' => $date]);
            } else {
                return redirect('/postconstruct1/0');
            }
        } else {
            $date = PostOption::where('post_id', $id)->first();
            return view('construct.stepTwo', ['date' => $date]);
        }
    }

    public function StepTwoStore($id)
    {
        if ($id == 0) {
            $date = PostOptionBufer::all()->last();

            $date->form = request()->form;
            $date->save();
            return redirect('/postconstruct2/0');

        } else {
            $date = PostOption::where('post_id', $id)->first();

            $date->form = request()->form;
            $date->save();
            return redirect('/postconstruct2/' . $id);

        }
    }

    public function uploadBrushStore($id)
    {
        $file = $_FILES['attachment'];

        $newFilePath = __DIR__ . "/../../../public/storage/brushes/$id/brush.jpg";

        move_uploaded_file($file['tmp_name'], $newFilePath);

        return redirect('/postconstruct2/' . $id);

    }

    public function generateImage($id)
    {

        if ($id == 0) {

            $direct = null;

            if (PostOptionBufer::all()->first()->template == 1) {
                $direct = 'Horizontal';
            } else {
                $direct = 'Vertical';
            }

            $idf = PostOptionBufer::all()->first()->form;
            $path1 = 'storage/brushes/0/brush.jpg';
            $path2 = "storage/brushes/0/";

            dispatch(new MakeBrush($direct, $idf, $path1, $path2));

            return redirect('/postconstruct3/0');

        } else {

            $direct = null;

            if (PostOption::where('post_id', $id)->first()->template == 1) {
                $direct = 'Horizontal';
            } else {
                $direct = 'Vertical';
            }

            $idf = PostOption::where('post_id', $id)->first()->form;

            $path1 = "storage/brushes/$id/brush.jpg";
            $path2 = "storage/brushes/$id/";

            dispatch(new MakeBrush($direct, $idf, $path1, $path2));

            return redirect('/postconstruct3/' . $id);
        }


    }

    public function StepThree($id)
    {
        if ($id == 0) {
            if (isset(PostOptionBufer::all()->last()->form)) {

                if (isset(PostBufer::all()->last()->title)) {

                    $post = PostBufer::all()->last();
                    return view('construct.stepThree', ['post' => $post]);
                }


                return view('construct.stepThree');
            } else {
                return redirect('/postconstruct2/0');
            }
        } else {
            $post = PostNew::findOrFail($id);

            return view('construct.stepThree', ['post' => $post]);
        }
    }

    public function StepThreeStore($id, Request $request)
    {
        request()->validate([
            'title' => 'required|min:3|max:100',
            'body' => 'required|min:15',
            'excerpt' => 'required|max:150'
        ]);

        if ($id == 0) {

            $post = PostBufer::firstOrNew(request(['id' => '1', 'category', 'title', 'seo_title', 'excerpt', 'body', 'slug', 'meta_description', 'meta_keywords', 'status']));
            $post->author_id = Auth::user()->id;
            $post->save();

            return redirect('/fullpreview');

//            if (isset(PostBufer::all()->last()->title)) {
//                $post = PostBufer::all()->last();
//
//                $post->author_id = Auth::user()->id;
//                $post->category = request()->category;
//                $post->title = request()->title;
//                $post->seo_title = request()->seo_title;
//                $post->excerpt = request()->excerpt;
//                $post->body = request()->body;
//                $post->slug = request()->slug;
//                $post->meta_description = request()->meta_description;
//                $post->meta_keywords = request()->meta_keywords;
//                $post->status = request()->status;
//
//                $post->save();
//
//                return redirect('/fullpreview');
//
//            } else {
//                $post = new PostBufer;
//
//                $post->author_id = Auth::user()->id;
//                $post->category = request()->category;
//                $post->title = request()->title;
//                $post->seo_title = request()->seo_title;
//                $post->excerpt = request()->excerpt;
//                $post->body = request()->body;
//                $post->slug = request()->slug;
//                $post->meta_description = request()->meta_description;
//                $post->meta_keywords = request()->meta_keywords;
//                $post->status = request()->status;
//
//                $post->save();
//
//                return redirect('/fullpreview');
//            }
        } else {

//           return request()->validate(['excerpt' => 'required']);
            $post = PostNew::findOrFail($id);


            $post->author_id = Auth::user()->id;
            $post->category = request()->category;
//            $post->title = request()->validate(['title' => 'required']);
            $post->title = request()->title;
            $post->seo_title = request()->seo_title;
//            $post->excerpt = request()->validate(['excerpt' => 'required']);
            $post->excerpt = request()->excerpt;
            $post->body = request()->body;
//            $post->body = request()->validate(['body' => 'required']);
            $post->slug = request()->slug;
            $post->meta_description = request()->meta_description;
            $post->meta_keywords = request()->meta_keywords;
            $post->status = request()->status;

            $post->save();

            return redirect('/paper/' . $id . '/edit');
        }
    }

    public function fullPreview()
    {
        if (isset(PostBufer::all()->last()->title)) {
            $post = PostBufer::all()->last();
            $date = PostOptionBufer::all()->last();

            return view('posts.postPrefab', ['post' => $post, 'date' => $date]);
        } else {
            return redirect('/postconstruct3/0');
        }
    }

    public function add()
    {
        $post = PostBufer::all()->last();

        $postNew = new PostNew;

        $postNew->author_id = Auth::user()->id;
        $postNew->category = $post->category;
        $postNew->title = $post->title;
        $postNew->seo_title = $post->seo_title;
        $postNew->excerpt = $post->excerpt;
        $postNew->body = $post->body;
        $postNew->slug = $post->slug;
        $postNew->meta_description = $post->meta_description;
        $postNew->meta_keywords = $post->meta_keywords;
        $postNew->status = $post->status;

        $postNew->save();

        $date = PostOptionBufer::all()->last();
        $dateNew = new PostOption;

//        $dateNew->id = $postNew->id;
        $dateNew->template = $date->template;
        $dateNew->form = $date->form;
        $dateNew->post_id = PostNew::all()->last()->id;

        $dateNew->save();

//        $manager = new ImageManager(array('driver' => 'gd'));
//        $fileOption = $manager->make('storage/temp/brush.jpg');
//        $fileName = $fileOption->filename . $dateNew->post_id . '.' . $fileOption->extension;

//        $dir = public_path() . "/storage/brushes/$dateNew->post_id";
        $dir = public_path("/storage/brushes/$dateNew->post_id");
//        dd($dir);
        mkdir($dir);//, $dateNew->post_id, true);

        $file = Storage::disk('local')->get('public/brushes/baseHorizontal.png');
        Storage::disk('local')->put('public/brushes/' . $dateNew->post_id . '/finBrushH.png', $file);

        $file = Storage::disk('local')->get('public/brushes/baseVertical.png');
        Storage::disk('local')->put('public/brushes/' . $dateNew->post_id . '/finBrushV.png', $file);

        if (file_exists(public_path() . '/storage/brushes/0/brush.jpg')) {
            $file = Storage::disk('local')->get('public/brushes/0/brush.jpg');
            Storage::disk('local')->put('public/brushes/' . $dateNew->post_id . '/brush.jpg', $file);
            Storage::disk('local')->put('public/brushes/' . $dateNew->post_id . '/fullBrush.png', $file);
            Storage::delete('public/brushes/0/brush.jpg');
        }

        if (file_exists(public_path() . '/storage/brushes/0/finBrush.png')) {
            $file = Storage::disk('local')->get('public/brushes/0/finBrush.png');
            Storage::disk('local')->put('public/brushes/' . $dateNew->post_id . '/finBrush.png', $file);
            Storage::delete('public/brushes/0/finBrush.png');
        }

        if (file_exists(public_path() . '/storage/brushes/0/square.png')) {
            $file = Storage::disk('local')->get('public/brushes/0/square.png');
            Storage::disk('local')->put('public/brushes/' . $dateNew->post_id . '/square.png', $file);
            Storage::delete('public/brushes/0/square.png');
        }

        dispatch(new SaveBrush($dateNew->post_id)); //->delay(now()->addMinutes(1));

//        Storage::copy(storage_path("/app/public/brushes/0/brush.jpg"), public_path() . "/storage/brushes/$dateNew->post_id/brush.jpg");
//        Storage::move(public_path() . "/storage/brushes/0/finBrush.png", public_path() . "/storage/brushes/$dateNew->post_id/finBrush.png");
//        Storage::move(public_path() . "/storage/brushes/0/squareBrush.png", public_path() . "/storage/brushes/$dateNew->post_id/squareBrush.png");
//        Storage::move(public_path() . "/storage/brushes/0/brush.jpg", public_path() . "/storage/brushes/$dateNew->post_id/fullBrush.png");
//        $file = Storage::disk('local')->get('public/brushes/temp.png');
//        Storage::disk('local')->put('public/brushes/finBrush' . $dateNew->post_id . '.png', $file);
//        $file = Storage::disk('local')->get('public/temp/brush.jpg');
//        Storage::disk('local')->put('public/brushes/fullBrush' . $dateNew->post_id . '.jpg', $file);
//        Storage::disk('local')->put('public/brushes/' . $fileName, $file);

        if ($date !== null) {
            $date->delete();
        }
        if ($post !== null) {
            $post->delete();
        }

        return redirect('/paper');
    }
}
