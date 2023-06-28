<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index()
    {
        $photo_all = Photo::paginate(12);
        return view('front.photo_gallery', compact('photo_all'));
    }
}
