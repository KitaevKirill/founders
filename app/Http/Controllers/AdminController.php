<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function uploadAvatar()
    {
        $file = $_FILES['avatar'];
        $newFilePath = __DIR__ . "/../../../public/storage/avatar/temp.jpg";
        move_uploaded_file($file['tmp_name'], $newFilePath);
        $img = Image::make('storage/avatar/temp.jpg');
        $img->resize(280, 280)->mask('storage/avatar/round.png');
        $img->save( public_path("storage/avatar/" . Auth::user()->id . "/Max.png"));
        $img->resize(100, 100)->mask('storage/avatar/round.png');
        $img->save( public_path("storage/avatar/" . Auth::user()->id . "/Medium.png"));
        $img->resize(27, 27);
        $img->save( public_path("storage/avatar/" . Auth::user()->id . "/Min.png"));


//        $file = $_FILES['avatar'];
//
//        $newFilePath = __DIR__ . "/../../../public/storage/avatar/" . Auth::user()->id . ".jpg";
//
//        move_uploaded_file($file['tmp_name'], $newFilePath);
//
//        $avatar = User::find(Auth::user()->id);
//
//        $avatar->avatar = Auth::user()->id . '.jpg';
//
//        $avatar->save();
//
//        $circle = Image::make(asset('storage/avatar/round.png'));
//        $img = Image::make('storage/avatar/4.jpg');
//
//
//        $img->mask('storage/avatar/round.png');
//        $img->save( public_path("storage/avatar/222.png"));
//
////        $img->insert($circle, 'top-left', 190, 175);
////        dd($circle);

        return redirect('/usersettings');
    }

    public function userSettings()
    {
        return view('auth.adminPanel');
    }

    public function checkCategory($idc)
    {
//        return request();

        $sub = Subscription::firstOrNew(['user_id' => Auth::user()->id]);

        if ($idc == 1) {
            $sub->category1 = 'off';
        } elseif ($idc == 2) {
            $sub->category2 = 'off';
        } elseif ($idc == 3) {
            $sub->category3 = 'off';
        } elseif ($idc == 4) {
            $sub->category4 = 'off';
        } else {
            $sub->category5 = 'off';
        }

//        return $sub;

        foreach (request()->except('_token', '_method') as $key => $part) {


            $sub->$key = request()->$key;

//            return $sub;
        }

        $sub->save();

        return redirect('/usersettings');
    }
}
