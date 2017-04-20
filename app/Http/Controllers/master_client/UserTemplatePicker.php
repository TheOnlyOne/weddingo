<?php

namespace App\Http\Controllers\master_client;

use App\TemplateSource;
use App\Wedding;
use App\WeddingInvitation;
use App\WeddingTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Validator;
use Response;
use Illuminate\Support\Facades\Auth;

class UserTemplatePicker extends Controller
{
    public function __construct()
    {
        $this->middleware('client_auth', ['except' => ['confirmGuestAttending']]);
    }

    public function index() {
        $user_id = Auth::user()->id;
        $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
        $wedding_obj = DB::table('weddings')->where('id', '=', $wedding_obj[0]->wedding_id)->get();
        $template_id = $wedding_obj[0]->template_id;
        $wedding_templates = WeddingTemplate::all();
        return view("master-client-view.user-template-pick", array("wedding_templates" => $wedding_templates, "template_id" => $template_id));
    }

    public function updateUserTemplate(Request $request) {
        try {
            $template_id = $request->id;
            $user_id = Auth::user()->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_id = $wedding_obj[0]->wedding_id;
            $wedding = Wedding::find($wedding_id);
            $wedding->template_id = $template_id;
            $wedding->save();

            $template_sources = DB::table('templates_sources')->where('wedding_id', '=', $wedding_id)->get();
            if(count($template_sources) == 0) {
                for($i = 0; $i < 50; $i++) {
                    $template_src = new TemplateSource;
                    $template_src->template_id = $template_id;
                    $template_src->wedding_id = $wedding_id;
                    $template_src->element_id = $i;
                    $template_src->element_val = "תוכן";
                    $template_src->save();
                }
            }
            return "success";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }


    public function confirmGuestAttending(Request $request) {
        $wedding_id = $request->wedding_id;
        $uid = $request->uid;
        $guestsCount = $request->guestsCount;
        $confirmStatus = $request->attendingConfirmation;

        $check_guest = WeddingInvitation::where('wedding_id', $wedding_id)->where('guest_uid', $uid)
            ->first();

        if(count($check_guest) > 0) {
            $wedding_guest = WeddingInvitation::where('wedding_id', $wedding_id)->where('guest_uid', $uid)
                ->first();
            print_r($wedding_guest);
            $wedding_guest->guests_num = $guestsCount;
            die(var_dump('done'));
            if($confirmStatus)
                $wedding_guest->is_coming = 1;
            else
                $wedding_guest->is_coming = 0;
            $wedding_guest->is_filled = 1;
            $wedding_guest->save();
        } else {
            die(var_dump($wedding_id));
            die(var_dump('you are joking, right?'));
        }
    }
}
