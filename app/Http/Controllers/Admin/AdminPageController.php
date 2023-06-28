<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class AdminPageController extends Controller
{
    public function about()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_about', compact('page_data'));
    }

    public function about_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->about_heading = $request->about_heading;
        $obj->about_content = $request->about_content;
        $obj->about_status = $request->about_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function terms()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_terms', compact('page_data'));
    }

    public function terms_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->terms_heading = $request->terms_heading;
        $obj->terms_content = $request->terms_content;
        $obj->terms_status = $request->terms_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function privacy()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_privacy', compact('page_data'));
    }

    public function privacy_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->privacy_heading = $request->privacy_heading;
        $obj->privacy_content = $request->privacy_content;
        $obj->privacy_status = $request->privacy_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function contact()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_contact', compact('page_data'));
    }

    public function contact_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->contact_heading = $request->contact_heading;
        $obj->contact_map = $request->contact_map;
        $obj->contact_status = $request->contact_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function photo_gallery()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_photo_gallery', compact('page_data'));
    }

    public function photo_gallery_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->photo_gallery_heading = $request->photo_gallery_heading;
        $obj->photo_gallery_status = $request->photo_gallery_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function video_gallery()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_video_gallery', compact('page_data'));
    }

    public function video_gallery_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->video_gallery_heading = $request->video_gallery_heading;
        $obj->video_gallery_status = $request->video_gallery_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function faq()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_faq', compact('page_data'));
    }

    public function faq_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->faq_heading = $request->faq_heading;
        $obj->faq_status = $request->faq_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function blog()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_blog', compact('page_data'));
    }

    public function blog_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->blog_heading = $request->blog_heading;
        $obj->blog_status = $request->blog_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }


    public function room()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_room', compact('page_data'));
    }

    public function room_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->room_heading = $request->room_heading;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function cart()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_cart', compact('page_data'));
    }

    public function cart_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->cart_heading = $request->cart_heading;
        $obj->cart_status = $request->cart_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function checkout()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_checkout', compact('page_data'));
    }

    public function checkout_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->checkout_heading = $request->checkout_heading;
        $obj->checkout_status = $request->checkout_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function payment()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_payment', compact('page_data'));
    }

    public function payment_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->payment_heading = $request->payment_heading;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function signup()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_signup', compact('page_data'));
    }

    public function signup_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->signup_heading = $request->signup_heading;
        $obj->signup_status = $request->signup_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function signin()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_signin', compact('page_data'));
    }

    public function signin_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->signin_heading = $request->signin_heading;
        $obj->signin_status = $request->signin_status;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function forget_password()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_forget_password', compact('page_data'));
    }

    public function forget_password_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->forget_password_heading = $request->forget_password_heading;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }

    public function reset_password()
    {
        $page_data = Page::where('id',1)->first();
        return view('admin.page_reset_password', compact('page_data'));
    }

    public function reset_password_update(Request $request)
    {
        $obj = Page::where('id',1)->first();
        $obj->reset_password_heading = $request->reset_password_heading;
        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
