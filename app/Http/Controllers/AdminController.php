<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Post;
use App\Models\Conf;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Models\User;

class AdminController extends Controller
{
    public function show()
    {
        return view("admin.admin");
    }

    public function getlogin()
    {
        return view("admin.adminLogin");
    }

    public function login(Request $request)
    {
        $user = Admin::where('email', $request->input('email'))->first();

        if ($user && $request->input('password') == $user->password) {
            return redirect()->route('admin.show');
        }
        echo "wrong password";
    }

    public function createPost(Request $request)
    {
        $post = new Post;
        $image = $request->file('file');
        $uploadedFileUrl = Cloudinary::upload($image->getRealPath(), ['folder' => 'newsportal'])->getSecurePath();
        $post->title = $request->input('headline');
        $post->author = $request->input('author');
        $post->url = $uploadedFileUrl;
        $post->description = $request->input('description');
        $post->content = $request->input('body');
        $post->source = $request->input('source');
        $post->location = $request->input('location');
        $post->type = $request->input('type');
        $post->save();
    }

    public function conf(Request $request)
    {
        $conf = new Conf;
        $image = $request->file('confile');
        $uploadedFileUrl = Cloudinary::upload($image->getRealPath(), ['folder' => 'newsportal'])->getSecurePath();
        $conf->title = $request->input('title');
        $conf->deadline = $request->input('deadline');
        $conf->date = $request->input('date');
        $conf->img_url = $uploadedFileUrl;
        $conf->descritpion = $request->input('description');
        $conf->location = $request->input('location');
        $conf->save();

        $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = User::whereNotNull('device_token')->pluck('device_token')->all();
        $serverKey = 'AAAAT6-NB7I:APA91bEet0BDgj-dwq5GHvaHrA7wjoD8rSGtdeY6brplrx-6QGYq1DWEU1qDQORVvEln7UU6lyFbpL_ZixLQLe80QgA0Pd9E3oCCUWnO__Qug_AjZcyEmZINSXxFwpw7AxZayZcXIw11';
        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => 'Upcoming new Conference',
                "body" => "A new Conference is add recently",
            ]
        ];
        $encodedData = json_encode($data);
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
        dd($result);
    }
}
