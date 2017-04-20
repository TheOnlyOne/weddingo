<?php

namespace App\Http\Controllers\master_client;

use App\Wedding;
use App\WeddingMediaTitle;
use App\WeddingMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Response;
use Validator;

class UploadController extends Controller
{
    public function __construct()
    {
        $this->middleware('client_auth');
    }

    public function index()
    {
        $sum = 0;
        foreach(Wedding::find(Session::get('weddingID'))->buyingInvitationsHistory as $package)
        {
            if($package->is_deleted == 0) {
                $sum += ($package->amount * $package->pricingPackage->amount_pictures);
            }
        }
        $sum -= count(Wedding::find(Session::get('weddingID'))->weddingMedia);
        $mediaTitles = array('client' => WeddingMediaTitle::findByWeddingId(0));
        $mediaTitles['private'] = WeddingMediaTitle::findByWeddingId(Session::get('weddingID'));
        $data = array("media_titles"=>$mediaTitles, "amountPic" => $sum);
        return view('master-client-view.upload', $data);
    }

    public function store(Request $request)
    {
        $sum = 0;
        foreach(Wedding::find(Session::get('weddingID'))->buyingInvitationsHistory as $package)
        {
            if($package->is_deleted == 0) {
                $sum += ($package->amount * $package->pricingPackage->amount_pictures);
            }
        }
        $sum -= count(Wedding::find(Session::get('weddingID'))->weddingMedia);
        if($sum <= 0)
            return 1;
        $file = $request->file('file');
        $mime = $file->guessClientExtension();
        $type = '';
        if($mime == 'jpg' || $mime == 'jpeg' || $mime == 'png' || $mime == 'gif' || $mime == 'bmp')
            $type = 'photo';
        if($mime == 'mp4' || $mime == 'avi' || $mime == 'wmv' || $mime == 'flv' || $mime == '3gp' || $mime == 'mov')
            $type = 'video';
        if($type == '')
            return 1;
        $path = 'upload/media/weddings/'.$type.'/'.Session::get('weddingID').'/'.$request->get('title_id');
        $fileName = uniqid().$file->getClientOriginalName();
        $file->move($path, $fileName);
        $media = new WeddingMedia;
        $media->wedding_id = Session::get('weddingID');
        $media->media_title_id = $request->get('title_id');
        $media->size = $file->getClientSize();
        $media->mime = $mime;
        $media->type = $type;
        if($type == 'photo') {
            $media->image_name = $fileName;
            $media->image_url = $path . "/" . $fileName;
        }
        if($type == 'video') {
            $media->video_name = $fileName;
            $media->video_url = $path . "/" . $fileName;
            $media->image_name = 'vid.png';
            $media->image_url = 'vid.png';
        }
        $media->save();
    }

    public function addTitle(Request $request)
    {
        $validator = Validator::make
        (
            array(
                'title' => $request->get('title'),
            ), array(
            'title' => 'required|unique:wedding_media_titles,title',
        ));
        if($validator->fails())
        {
            return Response::json([
                'success' => false,
                'errors' => $validator->errors()->toArray()
            ]);
        }

        $title = new WeddingMediaTitle();
        $title->title = $request->get('title');
        $title->wedding_id = Session::get('weddingID');
        $title->save();
        return Response::json([
            'success' => true,
            'errors' => null,
            'title' => $title->title,
            'title_id' => $title->id,
        ]);

    }
}
