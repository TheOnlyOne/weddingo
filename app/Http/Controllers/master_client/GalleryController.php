<?php

namespace App\Http\Controllers\master_client;

use App\Wedding;
use App\WeddingMedia;
use App\WeddingMediaTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Storage;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('client_auth');
    }

    public function index()
    {
        $mediaTitles = array('client' => WeddingMediaTitle::findByWeddingId(0));
        $mediaTitles['private'] = WeddingMediaTitle::findByWeddingId(Session::get('weddingID'));
        $mediaTitles['guest'] = WeddingMediaTitle::findByWeddingId(-1);
        $media = Wedding::find(Session::get('weddingID'))->weddingMedia;
        $data = array('media' => $media, 'media_titles' => $mediaTitles);
        return view('master-client-view.gallery', $data);
    }
}
