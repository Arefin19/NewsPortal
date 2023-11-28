<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\User;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
class ProfileController extends Controller
{
    public function profile()
    {
        $userId = auth()->id();
        $user = User::where('id', $userId)->first();

        return view('home.profile', with(['user' => $user]));
    }

    public function edit(Request $request)
    {

        $categories = $request->input('categories', []);
        $categories = array_map('intval', $categories);
        $newsletter = $request->input('news-check') ? $request->input('news-check') : '0';

        $userId = auth()->id();

        User::where('id', $userId)->update(['cat_pref' => json_encode($categories)]);
        User::where('id', $userId)->update(['name' => $request->input('name')]);
        User::where('id', $userId)->update(['email' => $request->input('email')]);
        User::where('id', $userId)->update(['newsletter' => $newsletter]);

        return redirect()->back();
    }

    public function changeDp(Request $request)
    {
        echo "hei";
        $userId = auth()->id();
        $image = $request->file('file');
        $uploadedFileUrl = Cloudinary::upload($image->getRealPath(), ['folder' => 'newsportal'])->getSecurePath();
        User::where('id', $userId)->update(['image_url' => $uploadedFileUrl]);

        return redirect()->back();
    }
}
