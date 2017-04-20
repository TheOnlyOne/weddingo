<?php

namespace App\Http\Controllers\master_client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DB;

class SmsGateway extends Controller
{
    public function __construct()
    {
        $this->middleware('client_auth');
    }

    public function test_send(Request $request) {
        $url = 'https://rest.nexmo.com/sms/json?' . http_build_query(
                [
                    'api_key' => '70a8642b',
                    'api_secret' => '264a195b976f6951',
                    'to' => '972525807517',
                    'from' => 'Weddingo',
                    'text' => 'היי! זה תמר ואוהד, אנחנו כל כך מתרגשים להזמין אותכם לחתונה שלנו שתיערך ב24.05.2017,
אתם מוזמנים לאשר הגעה בקישור: http://www.weddingo.co.il/w33x38. כבר מחכים בקוצר רוח!\n',
                    'type' => 'unicode'
                ]);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // only for development local server. please remove this if you are under production
        // thanks, dear Zohar
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        //echo curl_getinfo($ch);
        echo curl_errno($ch);
        echo curl_error($ch);

        die(var_dump($response));
    }

    public function index() {

        die('test_send');
        $guests = DB::table('wedding_invitations')->where('recv_invite', '=', 0)->get();
        return view("master-client-view.manage-sms-gateway", array("guests" => $guests));
    }

    public function send_invite_via_sms(Request $request) {
        try {
            $user_id = Auth::user()->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_id = $wedding_obj[0]->wedding_id;
            $is_group = 0;
            $phoneNumber = substr($request->phoneNumber, 1);
            $phoneNumber = "972" . $phoneNumber;
            $phone_exists = DB::table('wedding_invitations')->where([
                ['phone_number', '=', $phoneNumber],
                ['wedding_id', '=', $wedding_id],
            ])->get();
            if(count($request->phoneNumber) > 0) {
                $this->send_singular_sms($phoneNumber, $request->messageContent);
            }
        } catch(Exception $e){
            // do task when error
            // TODO: handle this while in production mode
            return $e->getMessage();   // insert query
        }
    }

    public function send_singular_sms($phone_number, $content) {
        $url = 'https://rest.nexmo.com/sms/json?' . http_build_query(
                [
                    'api_key' => '70a8642b',
                    'api_secret' => '264a195b976f6951',
                    'to' => $phone_number,
                    'from' => 'Weddingo',
                    'text' => $content,
                    'type' => 'unicode'
                ]);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // only for development local server. please remove this if you are under production
        // thanks, dear Zohar
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        die(var_dump($response));
        return true;
    }
}
