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


        $settings = Settings::all();
        $data = ['settings' => $settings];
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
            'title'       => 'required|max:255',
                'email'       => 'required',
            'description' => 'required',
            'image'       => 'required',
            'link'        => 'required',
            'adress'      => 'required',
            'phone'       => 'required',
            'twitter'     => 'required',
            'facebook'    => 'required',
            'skype'       => 'required',
            'linkedin'    => 'required',
            'youtube'     => 'required',
            'flickr'      => 'required',
            'pinterest'   => 'required',
            'user_id'     => 'required'

        ]);

        if ($validator->fails()) {
            return redirect('dashboard/settings/create')
                ->withErrors($validator)
                ->withInput();
        }


        $imageObj = new ImageStore($request, 'settings');
        $image = $imageObj->imageStore();


        $title = $request->get('title');
        $slug = Str::slug($title);

        Product::create([
            "title"         => $title,
            "email"         => $email,
            "slug"          => $slug,
            "category_id"   => $request->get('category_id'),
            "description"   => $request->get('description'),
            "user_id"       => $request->get('user_id')
        ]);

        return redirect()->route('settings.index');
    }

    public function show($id)
    {
        $settings = Settings::FindOrFail($id);
        $data = ['settings' => $settings];

        return view('dashboard.settings.show')->with($data);
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

        $validator = Validator::make($request->all()    , [
            "title"         => $request->get('title'),
            "image"         => $request->get('image'),
            "category_id"   => $request->get('category_id'),
            "description"   => $request->get('description'),
            "user_id"       => $request->get('user_id')
        ]);

        if ($validator->fails()) {
            return redirect('settings/'. $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }


        $settings = Settings::FindOrFail($id);
        $settings->fill($request->all())->save();

        return redirect()->route('dashboard.settings.index');
    }

    public function destroy($id)
    {
        $settings = Settings::FindOrFail($id);
        $settings->delete();

        return redirect()->route('dashboard.settings.index');
    }

    public function gallery($id)
    {
        $settings = Settings::where('id', '=',  $id)->first();
        $data = ['settings' => $settings];

        return view('dashboard.settings.gallery')->with($data);
    }

    public function storeImage(Request $request, $id)
    {
        $image = new ImageStore($request, 'gallery');
        $image = $image->imageStore();
        Gallery::create([
            'image'          => $image
        ]);
        return redirect()->route('dashboard.settings.index');
    }



}
