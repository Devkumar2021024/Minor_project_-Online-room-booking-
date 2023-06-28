<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\BookedRoom;

class AdminDatewiseRoomController extends Controller
{
    public function index()
    {
        return view('admin.datewise_rooms');
    }

    public function show(Request $request) 
    {
        $request->validate([
            'selected_date' => 'required'
        ]);

        $selected_date = $request->selected_date;

        return view('admin.datewise_rooms_detail', compact('selected_date'));
    }
}
