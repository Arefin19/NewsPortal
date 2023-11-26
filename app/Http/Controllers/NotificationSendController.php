<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
class NotificationSendController extends Controller
{
    public function updateDeviceToken(Request $request)
    {
        $deviceToken =  $request->token;
        User::where('id', auth()->id())->update(['device_token' => $deviceToken]);
        return response()->json(['Token successfully stored.']);
    }

    public function sendNotification(Request $request)
    {
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
