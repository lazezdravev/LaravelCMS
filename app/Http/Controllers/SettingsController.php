<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Http\Controllers\Helper\ImageStore;
use App\Models\Gallery;
use Illuminate\Support\Str;
use illuminate\Support\Collection;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $settings = Settings::first();
        $users = User::all();
        $data = ['settings' => $settings, 'users' => $users];

        if (empty($settings)) {
            return view('dashboard.settings.create')->with($data);
        }

        return view('dashboard.settings.index')->with($data);

    }

    public function create()
    {
        $users = User::all();
        $settings = Settings::all();
        $data = ['users' => $users, 'settings' => $settings];
        return view('dashboard.settings.create')->with($data);
    }

    public function store(Request $request)
    {


        $validator = Validator::make($request->all(),
            [
                'title' => 'required',
                'mainurl' => 'required',
                'email' => 'required',
                'description' => 'required',
                'image' => 'required',
                'link' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'twitter' => 'required',
                'facebook' => 'required',
                'skype' => 'required',
                'linkedin' => 'required',
                'youtube' => 'required',
                'flickr' => 'required',
                'pinterest' => 'required',
                'user_id' => 'required'
            ]);

        if ($validator->fails()) {
            return redirect()->to(route('settings.create'))
                ->withErrors($validator)
                ->withInput();
        }


        $imageObj = new ImageStore($request, 'settings');
        $image = $imageObj->imageStore();


        Settings::create([
            "title" => $request->get('title'),
            "mainurl" => $request->get('mainurl'),
            "email" => $request->get('email'),
            "description" => $request->get('description'),
            "phone" => $request->get('phone'),
            "address" => $request->get('address'),
            "link" => $request->get('link'),
            "image" => $image,
            "facebook" => $request->get('facebook'),
            "twitter" => $request->get('twitter'),
            "linkedin" => $request->get('linkedin'),
            "youtube" => $request->get('youtube'),
            "pinterest" => $request->get('pinterest'),
            "flickr" => $request->get('flickr'),
            "skype" => $request->get('skype'),
            "user_id" => $request->get('user_id')
        ]);

        return redirect()->route('settings.index');
    }


    public function edit($id)
    {
        $settings = Settings::FindOrFail($id);
        $users = User::all();
        $data = ['settings' => $settings, 'users' => $users];

        return view('dashboard.settings.edit')->with($data);
    }

    public function update(Request $request, $id)
    {

        $settings = Settings::FindOrFail($id);

        $validator = Validator::make($request->all(),
            [
                'title' => 'required',
                'mainurl' => 'required',
                'email' => 'required',
                'description' => 'required',
                'link' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'twitter' => 'required',
                'facebook' => 'required',
                'skype' => 'required',
                'linkedin' => 'required',
                'youtube' => 'required',
                'flickr' => 'required',
                'pinterest' => 'required',
                'user_id' => 'required'
            ]);

        if ($validator->fails()) {
            return redirect()->to(route('settings.update', $settings->id))
                ->withErrors($validator)
                ->withInput();
        }


        $imageObj = new ImageStore($request, 'settings');
        $image = $imageObj->imageStore();

        $input = $request->all();

        if ($image) {
            $input['image'] = $image;
        }


        $settings->fill($input)->save();

        return redirect()->route('settings.index');
    }


}
