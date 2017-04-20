<?php

namespace App\Http\Controllers\master_client;

use App\TemplateSource;
use App\Wedding;
use App\WeddingInvitation;
use App\WeddingTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Route;
use DB;

class TemplateBuilder extends Controller
{
    public function __construct() {
        return $this->middleware('client_auth', ['except' => ['pull_latest_template_content', 'get_template']]);
    }

    public function index() {
        $user_id = Auth::user()->id;
        $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
        $wedding_prop = DB::table('weddings')->where('id', '=', $wedding_obj[0]->wedding_id)->get();
        $wedding_prop = json_decode($wedding_prop);
        $wedding_prop = array(
            "groom_name" => explode(" ", $wedding_prop[0]->groom_name)[0],
            "bride_name" => explode(" ", $wedding_prop[0]->bride_name)[0],
            "date" => $wedding_prop[0]->date
        );
        $template_sources = $this->pull_latest_template_content();
        $wedding = Wedding::where('id', $wedding_obj[0]->wedding_id)->get();
        $template = WeddingTemplate::where('id', $wedding[0]['template_id'])->get();
        $template_name = $template[0]['name'];
        return view('templates.' . $template_name . '.index', array("wedding_props" => $wedding_prop,
            "template_sources" => $template_sources, "edit_status" => 1));
    }

    public function pull_latest_template_content($wedding_id=0) {
        if($wedding_id == 0) {
            $user_id = Auth::user()->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_id = $wedding_obj[0]->wedding_id;
        }
        $wedding_obj = DB::table('weddings')->where('id', '=', $wedding_id)->get();
        $template_id = $wedding_obj[0]->template_id;

        $template_sources = DB::table('templates_sources')->where([
            ['wedding_id', '=', $wedding_id],
        ])->get();

        $data_arr = array();

        for($i = 0; $i < count($template_sources) - 1; $i++) {
            $element_id = $template_sources[$i]->element_id;
            $element = DB::table('templates_elements')->where('id','=',$element_id)->get();
            if(count($element) > 0) {
                $data_arr[$element[0]->name] = $template_sources[$i]->element_val;
            }
        }

        return $data_arr;
    }

    public function update_element(Request $request) {
        try {
            $element_key = $request->element_key;
            $element_val = $request->element_val;
            $template_id = $request->template_id;
            $user_id = Auth::user()->id;

            $element = DB::table('templates_elements')->where([
                ['name', '=', $element_key],
            ])->get();

            $element_id = $element[0]->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_id = $wedding_obj[0]->wedding_id;

            $curr_template_source = DB::table('templates_sources')->where([
                ['template_id', '=', $template_id],
                ['wedding_id', '=', $wedding_id],
                ['element_id', '=', $element_id],
            ])->get();

            if(count($curr_template_source) == 0) {
                $template_source = new TemplateSource;
                $template_source->template_id = $template_id;
                $template_source->wedding_id     = $wedding_id;
                $template_source->element_id  = $element_id;
                $template_source->element_val = $element_val;
                $template_source->save();
                return "thanks";
            } else {
                $template = TemplateSource::where('template_id', $template_id)->where('wedding_id', $wedding_id)
                    ->where('element_id', $element_id)->first();
                $template->element_val = $element_val;
                $template->save();
                return "200";
            }
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function pull_local_wedding_photos(Request $request) {
        $user_id = Auth::user()->id;
        $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
        $wedding_id = $wedding_obj[0]->wedding_id;

        $wedding_photos = DB::table('wedding_photos')->where('wedding_id', '=', $wedding_id)->get();
        return $wedding_photos;
    }

    public function get_template($wedding_id, $uid) {
        $wedding_guest = WeddingInvitation::where('guest_uid', $uid)->where('wedding_id', $wedding_id)
            ->first();
        if(count($wedding_guest) > 0) {
            $wedding = Wedding::where('id', $wedding_id)->get();
            $wedding_prop = json_decode($wedding);
            $wedding_prop = array(
                "groom_name" => explode(" ", $wedding[0]->groom_name)[0],
                "bride_name" => explode(" ", $wedding[0]->bride_name)[0],
                "date" => $wedding[0]->date
            );
            $template_sources = $this->pull_latest_template_content($wedding_id);
            $uid = Route::current()->getParameter('uid');
            $wedding_id  = Route::current()->getParameter('wedding_id');
            //die(var_dump($wedding[0]['template_id']));
            $template = WeddingTemplate::where('id', $wedding[0]['template_id'])->get();
            $template_name = $template[0]['name'];
            return view('templates.' . $template_name . '.index', array("wedding_props" => $wedding_prop,
                "template_sources" => $template_sources, "edit_status" => 0, "wedding_id" => $wedding_id,
                "uid" => $uid));
        } else {
            var_dump('you are joking, right?');
        }
    }
}
