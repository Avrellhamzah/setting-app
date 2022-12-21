<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::get();

        return view('backend.setting.index', compact('setting'));

    }

    public function create(){
        return view('backend.setting.create');
    }

    public function create_process(Request $request){

        request()->validate([
            'logo_kodein'   => 'required|mimes:jpg,jpeg,png',
            'logo_yayasan'  => 'required|mimes:jpg,jpeg,png',
            'whatsapp'      => 'required',
            'email'         => 'required',
            'address_1'     => 'required',
            'address_2'     => 'required',
            'facebook_link' => 'required',
            'instagram_link' => 'required',
            'twitter_link'  => 'required',
            'youtube_link'  => 'required',
        ]);

        $logo_kodein = 'kodein' . time() . '.' . $request->logo_kodein->extension();
        $request->logo_kodein->move(public_path('logo'), $logo_kodein);

        $logo_yayasan = 'yayasan'. time() . '.' . $request->logo_yayasan->extension();
        $request->logo_yayasan->move(public_path('logo'), $logo_yayasan);

        Setting::create([
            'logo_kodein'   => $logo_kodein,
            'logo_yayasan'  => $logo_yayasan,
            'whatsapp'      => $request->whatsapp,
            'email'         => $request->email,
            'address_1'     => $request->address_1,
            'address_2'     => $request->address_2,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->facebook_link,
            'twitter_link'  => $request->twitter_link,
            'youtube_link'  => $request->youtube_link,
            ]);

        return redirect()
        ->route('backend.manage.setting')
        ->with('success', 'Item Created Successfully');
    }

    public function show($id = null ) {
        if ($id == null) {
            return redirect()->route('backend.manage.setting')->with('error', "The ID Is Empty");
        } else {
            $setting = Setting::find($id);

            if ($setting) {
                return view('backend.setting.show', compact('setting'));
            } else {
                return redirect()->route('backend.manage.setting')->with('error', "The ID Is Empty");
            }
        }
    }
    public function edit($id)
    {
        if ($id == null) {
            return redirect()->route('backend.manage.setting')->with('error', 'The ID is empty!');
        } else {
            $setting = Setting::find($id);

            if ($setting) {
                return view('backend.setting.edit', compact('setting'));
            } else {
                return redirect()->route('backend.manage.setting')->with('error', "The #ID {$id} not found in Database!");
            }
        }
    }
    public function edit_process(Request $request, $id)
    {

        request()->validate([
            'logo_kodein'   => 'required|mimes:jpg,jpeg,png',
            'logo_yayasan'  => 'required|mimes:jpg,jpeg,png',
            'whatsapp'      => 'required',
            'email'         => 'required',
            'address_1'     => 'required',
            'address_2'     => 'required',
            'facebook_link' => 'required',
            'instagram_link' => 'required',
            'twitter_link'  => 'required',
            'youtube_link'  => 'required',
        ]);


        $logo_kodein = 'kodein' . time() . '.' . $request->logo_kodein->extension();
        $request->logo_kodein->move(public_path('logo'), $logo_kodein);

        $logo_yayasan = 'yayasan'. time() . '.' . $request->logo_yayasan->extension();
        $request->logo_yayasan->move(public_path('logo'), $logo_yayasan);

        Setting::where('id', $id)
            ->update(([
                'logo_kodein'   => $logo_kodein,
                'logo_yayasan'  => $logo_yayasan,
                'whatsapp'      => $request->whatsapp,
                'email'         => $request->email,
                'address_1'     => $request->address_1,
                'address_2'     => $request->address_2,
                'facebook_link' => $request->facebook_link,
                'instagram_link' => $request->facebook_link,
                'twitter_link'  => $request->twitter_link,
                'youtube_link'  => $request->youtube_link,
            ]));

        return redirect()->route('backend.manage.setting')->with('success', 'Item Edited Successfully');
    }

    public function destroy($id){
        $setting = Setting::find($id);

        $setting->delete();

        return redirect()->route('backend.manage.setting')->with('success', 'Item has been deleted');
    }

}
