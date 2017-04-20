<?php
/**
 * Created by PhpStorm.
 * User: Zohar
 * Date: 11/04/17
 * Time: 17:53
 */

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomClientSideComposer
{
    public function compose(View $view)
    {
        $user_id = Auth::user()->id;
        $wedding_obj = DB::table('wedding_managers')->where('user_id', '=', $user_id)->get();
        $wedding_prop = DB::table('weddings')->where('id', '=', $wedding_obj[0]->wedding_id)->get();
        $wedding_prop = json_decode($wedding_prop);
        $wedding_prop = array(
            "groom_name" => explode(" ", $wedding_prop[0]->groom_name)[0],
            "bride_name" => explode(" ", $wedding_prop[0]->bride_name)[0],
            "date" => $wedding_prop[0]->date
        );
        $view->with('couple_detail', $wedding_prop);
    }
}