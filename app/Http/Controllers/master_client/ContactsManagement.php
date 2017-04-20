<?php

namespace App\Http\Controllers\master_client;

use App\Http\Controllers\Controller;
use App\User;
use App\Wedding;
use Illuminate\Http\Request;
use App\CategoryInvitation;
use App\WeddingInvitation;
use League\Flysystem\Exception;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;
use Response;
use Uuid;

class ContactsManagement extends Controller
{
    public function __construct()
    {
        $this->middleware('client_auth');
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
        $html_categories_output = "";
        if ($wedding_obj) {
            $wedding_id = $wedding_obj[0]->wedding_id;
            $categories = DB::table('category_invitation')->where('wedding_id', '=', $wedding_id)->get();
            $html_categories_output = "";
            foreach ($categories as $cat) {
                $cat_info = DB::table('wedding_invitations')->where([
                    ['wedding_id', '=', $wedding_id],
                    ['category_id', '=', $cat->cat_id],
                ])->get();
                $sum = 0;
                for($i = 0; $i < count($cat_info); $i++) {
                    $sum += $cat_info[$i]->guests_num;
                }
                $cat_size = $sum;
                $html_categories_output .= '<li class=' . $cat->cat_id . '><a href="javascript:void(0)">' . $cat->name . '<span>' . $cat_size . '</span></a></li>';
            }
            $guests = DB::table('wedding_invitations')->where('wedding_id', '=', $wedding_id)->get();
            $total_guests_num = DB::table('wedding_invitations')->where('wedding_id', '=', $wedding_id)->get();
            $sum = 0;
            for($i = 0; $i < count($total_guests_num); $i++) {
                $sum += $total_guests_num[$i]->guests_num;
            }
            $total_guests_num = $sum;
            $wedding_id = $this->get_current_wedding_id();
            return view("master-client-view.contacts-management", array("html_categories_output" => $html_categories_output, "guests" => $guests,
                "total_guests_num" => $total_guests_num, "wedding_id" => $wedding_id));
        }
    }

    public function get_current_wedding_id() {
        $user_id = Auth::user()->id;
        $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
        $wedding_id = $wedding_obj[0]->wedding_id;
        return $wedding_id;
    }

    public function add_guests_category(Request $request) {
        try {
            $user_id = Auth::user()->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_id = $wedding_obj[0]->wedding_id;
            $category_invitation = new CategoryInvitation;
            $category_invitation->name = $request->name;
            $category_invitation->wedding_id = $wedding_id;
            $category_invitation->save();
        } catch(Exception $e){
            return $e->getMessage();   // insert query
        }
    }

    public function add_wedding_guest(Request $request) {
        try {
            $wedding_guest = new WeddingInvitation;
            $wedding_guest->name = 2;
            $wedding_guest->name = $request->name;
            $wedding_guest->phone_number = $request->phone_number;
            $user_id = Auth::user()->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_id = $wedding_obj[0]->wedding_id;
            $wedding_guest->wedding_id = $wedding_id;
            $wedding_guest->guests_num = $request->guests_num;
            $wedding_guest->is_coming = 0;
            $wedding_guest->category_id = $request->category_id;
            $wedding_guest->guest_uid = Uuid::generate()->string;
            $wedding_guest->save();
        } catch(Exception $e){
            // do task when error
            // TODO: handle this while in production mode
        }
    }

    public function remove_wedding_guest(Request $request) {
        try {
            $id = $request->guest_id;
            $user_id = Auth::user()->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_id = $wedding_obj[0]->wedding_id;
            $wedding_guest = DB::table('wedding_invitations')->where([
                ['id', '=', $id],
                ['wedding_id', '=', $wedding_id],
            ])->delete();
            return "Guest has been deleted successfuly";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function update_wedding_guest(Request $request) {
        try {
            $id = $request->guest_id;
            $user_id = Auth::user()->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_id = $wedding_obj[0]->wedding_id;


            $wedding_guest = DB::table('wedding_invitations')->where([
                ['id', '=', $id],
                ['wedding_id', '=', $wedding_id],
            ])->get();

            $wedding_guest = WeddingInvitation::where('wedding_id', '=', $wedding_id)
                ->where('id', '=', $id)
                ->first();
            $wedding_guest->name = $request->name;
            $wedding_guest->phone_number = $request->phone_number;
            $wedding_guest->wedding_id = $wedding_id;
            $wedding_guest->guests_num = $request->guests_num;
            if($request->is_coming != "-1") {
                $wedding_guest->is_coming = 0;
            }
            $wedding_guest->category_id = $request->category_id;
            $wedding_guest->save();
            return "פרטי האורח נערכו בהצלחה.";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function get_updated_guest_data(Request $request) {
        try {
            $id = $request->id;
            $wedding_id = $request->wedding_id;
            $guest = WeddingInvitation::where('wedding_id', '=', $wedding_id)
                ->where('id', '=', $id)
                ->first();
            if(count($guest) > 0) {
                return response()->json($guest);
            }
            die(var_dump("error"));
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function get_wedding_categories(Request $request) {
        if($request->html_type == "ul") {
            $user_id = Auth::user()->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_id = $wedding_obj[0]->wedding_id;

            $categories = DB::table('category_invitation')->where([
                ['wedding_id', '=', $wedding_id],
            ])->get();
            $html_output = "";
            foreach ($categories as $cat) {
                $cat_info = DB::table('wedding_invitations')->where([
                    ['wedding_id', '=', $wedding_id],
                    ['category_id', '=', $cat->cat_id],
                ])->get();
                $sum = 0;
                for($i = 0; $i < count($cat_info); $i++) {
                    $sum += $cat_info[$i]->guests_num;
                }
                $cat_size = $sum;
                $html_output .= '<li class=' . $cat->cat_id . '><a href="javascript:void(0)">' . $cat->name . '<span>' . $cat_size . '</span></a></li>';
            }
            $html_output .= '<li class="box-label"><a href="javascript:void(0)" data-toggle="modal" data-target="#responsive-modal-add-group" id="add-group-btn">+ הוספת קבוצה חדשה</a></li>';
            $guests = DB::table('wedding_invitations')->where('wedding_id', '=', $wedding_id)->get();
            $total_guests_num = DB::table('wedding_invitations')->where('wedding_id', '=', $wedding_id)->get();
            $sum = 0;
            for($i = 0; $i < count($total_guests_num); $i++) {
                $sum += $total_guests_num[$i]->guests_num;
            }
            $total_guests_num = $sum;
            return response()->json([
                'total_guests_num' => $sum,
                'html_output' => $html_output
            ]);
            return $html_output;
        } else {
            $user_id = Auth::user()->id;
            $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
            $wedding_id = $wedding_obj[0]->wedding_id;

            $categories = DB::table('category_invitation')->where([
                ['wedding_id', '=', $wedding_id],
            ])->get();

            $html_output = "";
            foreach ($categories as $cat) {
                $html_output .= "<option value='$cat->cat_id'>$cat->name</option>";
            }
            return $html_output;
        }
    }

    public function get_wedding_guests() {
        $user_id = Auth::user()->id;
        $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
        $wedding_id = $wedding_obj[0]->wedding_id;

        $guests = DB::table('wedding_invitations')->where([
            ['wedding_id', '=', $wedding_id],
        ])->get();

        $html_output = "";
        foreach($guests as $guest) {
            $html_output .= "<tr class='" . $guest->id . "' id='" . $guest->category_id . "'>";
            $html_output .= '<td>' . $guest->name . '</td>';
            $html_output .= '<td>' . $guest->phone_number . '</td>';
            $html_output .= '<td>' . $guest->guests_num . '</td>';
            if($guest->is_coming == 1) {
                $html_output .= '<td>אישר\ה הגעה</td>';
            } else if($guest->is_coming == 2) {
                $html_output .= '<td>ביטל\ה הגעה</td>';
            } else if($guest->is_coming == 0) {
                $html_output .= '<td>לא מעודכן</td>';
            }
            $html_output .= "<td><button class='btn btn-sm btn-icon btn-pure btn-outline'><i class='ti-pencil remove_wedding_guest' id='delete-{$guest->id}'></i></button></td>";
            $html_output .= "<td><button class='btn btn-sm btn-icon btn-pure btn-outline'><a data-toggle='modal' data-target='#responsive-modal' class='edit_wedding_guest' id='edit-{$guest->id}'><i class='ti-pencil'></a></i></button></td>";
            $html_output .= "<td><span class=\"label label-danger\"><a href='' data-toggle=\"modal\" data-target=\"#responsive-modal-send-sms\" style=\"color: #fff;\" class=\"sendGuestSms\" id={$guest->phone_number}>X</a></span></td>";
            $html_output .= "</tr>";
        }
        return $html_output;
    }

    public function validate_add_guest(Request $request) {
        $user_id = Auth::user()->id;
        $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
        $wedding_id = $wedding_obj[0]->wedding_id;

        $validator = Validator::make
        (
            array(
                'fullname' => $request->name,
                'phonenumber' => $request->phone_number,
                'guests_num' => $request->guests_num,
            ), array(
            'fullname' => 'required|max:80',
            'phonenumber' => 'required|max:20',
            'guests_num' => 'required|int',
        ));


        if($validator->fails())
        {
            return Response::json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ]);
        }

        $user_exists = DB::table('wedding_invitations')->where([
            ['wedding_id', '=', $wedding_id],
            ['phone_number', '=', $request->phone_number],
            ['id', '!=', $request->guest_id],
        ])->get();

        $total_guests_num = DB::table('wedding_invitations')->where('wedding_id', '=', $wedding_id)->get();
        $sum = 0;
        for($i = 0; $i < count($total_guests_num); $i++) {
            $sum += $total_guests_num[$i]->guests_num;
        }
        $total_guests_num = $sum;

        $buy_history = DB::table('buying_invitations_history')->where([
            ['wedding_id', '=', $wedding_id],
            ['user_id', '=', $user_id]
        ])->get();

        $total_amount_guests = 0;

        for($i = 0; $i < count($buy_history); $i++) {
            if($buy_history[$i]->pricing_package_id == 1) {
                $total_amount_guests += 100 * $buy_history[$i]->amount;
            } else if($buy_history[$i]->pricing_package_id == 2) {
                $total_amount_guests += 200 * $buy_history[$i]->amount;
            } else if($buy_history[$i]->pricing_package_id == 3) {
                $total_amount_guests += 300 * $buy_history[$i]->amount;
            } else if($buy_history[$i]->pricing_package_id == 4) {
                $total_amount_guests += 500 * $buy_history[$i]->amount;
            }
        }

        if(count($user_exists) > 0) {
            return Response::json([
                'success' => false,
                'errors' => "מספר טלפון זה קיים במערכת, אנא נסה טלפון אחר.",
            ]);
        }
        else if($total_guests_num + 1 > $total_amount_guests) {
            return Response::json([
                'success' => false,
                'errors' => "אין ברשותך להוסיף מוזמנים נוספים בשל החבילה שרכשת. אנא רכוש חבילה בשנית ונסה להוסיף מוזמן שנית.",
            ]);
        } else {
            if($request->request_type == "update") {
                return Response::json([
                    'success' => true,
                    'errors' => "פרטי האורח התעדכנו בהצלחה.",
                ]);
            } else {
                return Response::json([
                    'success' => true,
                    'errors' => "אורח נוסף בהצלחה למערכת.",
                ]);
            }
        }
    }

    public function validate_add_category(Request $request) {
        $user_id = Auth::user()->id;
        $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
        $wedding_id = $wedding_obj[0]->wedding_id;
        $validator = Validator::make
        (
            array(
                'name' => $request->name,
            ), array(
            'name' => 'required|max:120',
        ));

        if($validator->fails())
        {
            return Response::json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ]);
        }

        $cat_exists = DB::table('category_invitation')->where([
            ['wedding_id', '=', $wedding_id],
            ['name', '=', $request->name],
        ])->get();

        if(count($cat_exists) > 0) {
            return Response::json([
                'success' => false,
                'errors' => "קטגורייה זו קיימת במערכת. אנא נסה קטגוריה שונה",
            ]);
        } else {
            return Response::json([
                'success' => true,
                'errors' => "הקטגוריה הוספה בהצלחה למערכת.",
            ]);
        }
    }
}
