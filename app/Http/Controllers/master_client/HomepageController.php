<?php

namespace App\Http\Controllers\master_client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Wedding;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    private $user_id;
    private $wedding_obj;
    private $wedding_id;

    public function __construct()
    {
        $this->middleware('client_auth');
    }

    public function index() {
        $this->user_id = Auth::user()->id;
        $this->wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $this->user_id)->get();
        if ($this->wedding_obj) {
            $this->wedding_id = $this->wedding_obj[0]->wedding_id;
        }
        return view("master-client-view/index", array("invited_guests" => $this->count_invited_guests(), "approval_guests" => $this->count_approval_guests(),
            "cancelled_guests" => $this->count_cancelled_guests(), "images_count" => $this->count_uploaded_images(), "statistical_guests" => $this->count_statistical_guests(),
            "current_pricing_package" => $this->get_current_pricing_package()));
    }

    private function count_invited_guests() {
        $wedding_guest = DB::table('wedding_invitations')->where([
            ['wedding_id', '=', $this->wedding_id],
        ])->get();
        return count($wedding_guest);
    }

    private function count_approval_guests() {
        $wedding_guest = DB::table('wedding_invitations')->where([
            ['wedding_id', '=', $this->wedding_id],
            ['is_coming', '=', '1'],
        ])->get();
        return count($wedding_guest);
    }

    private function count_cancelled_guests() {
        $wedding_guest = DB::table('wedding_invitations')->where([
            ['wedding_id', '=', $this->wedding_id],
            ['is_coming', '=', '2'],
        ])->get();
        return count($wedding_guest);
    }

    private function count_statistical_guests() {
        $wedding_guest = DB::table('wedding_invitations')->where([
            ['wedding_id', '=', $this->wedding_id],
            ['is_coming', '=', '1'],
        ])->get();
        return count($wedding_guest);
    }

    private function count_uploaded_images() {
        $wedding_media = DB::table('wedding_media')->where([
            ['wedding_id', '=', $this->wedding_id],
        ])->get();
        return count($wedding_media);
    }

    private function get_current_pricing_package() {
        $max_pricing_package = DB::table('buying_invitations_history')->where([
            ['wedding_id', '=', $this->wedding_id],
            ['user_id', '=', $this->user_id],
        ])->max('total_price');
        $pricing_package = DB::table('buying_invitations_history')->where([
            ['wedding_id', '=', $this->wedding_id],
            ['user_id', '=', $this->user_id],
            ['total_price', '=', $max_pricing_package],
        ])->get();
        $pricing_package_name = DB::table('pricing_packages')->where([
            ['id', '=', $pricing_package[0]->pricing_package_id],
        ])->get();
        return $pricing_package_name[0]->name;
    }

    private function get_current_pricing_package_by_id() {
        $max_pricing_package = DB::table('buying_invitations_history')->where([
            ['wedding_id', '=', $this->wedding_id],
            ['user_id', '=', $this->user_id],
        ])->max('total_price');
        $pricing_package = DB::table('buying_invitations_history')->where([
            ['wedding_id', '=', $this->wedding_id],
            ['user_id', '=', $this->user_id],
            ['total_price', '=', $max_pricing_package],
        ])->get();
        $pricing_package_name = DB::table('pricing_packages')->where([
            ['id', '=', $pricing_package[0]->pricing_package_id],
        ])->get();
        return $pricing_package_name[0]->id;
    }

    public function get_wedding_hall_name() {
        /* פונקציה המחזירה את שם אולם האירועים של הזוג */
    }

    public function get_wedding_date() {
        /* פונקציה המחזירה את תאריך החתונה של הזוג */
    }

    public function get_wedding_start_date() {
        /* פונקציה המחזירה את השעה של קבלת האורחים באירוע של הזוג */
    }

    public function get_total_potential_upload() {
        /* פונקציה המחזירה את כמות התמונות הפוטנציאלית להעלאה שהזוג יכול להעלות */
    }

    public function get_total_potiential_contacts() {
        /* פונקציה המחזירה את כמות אנשי הקשר הפוטנציאלית להזמנה בחבילה של הזוג */
    }


}
