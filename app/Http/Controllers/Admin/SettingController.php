<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class SettingController extends Controller
{
    private $model = null;
    private $languages = null;

    public function __construct()
    {
        $this->model = new Setting();
        $this->languages = config('localized-routes.supported_locales');
    }

    public function index()
    {
        $settings = Setting::all();

        return view('admin.settings.index', compact('settings'));
    }

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);

        $languages = $this->languages;

        return view('admin.settings.create', compact('setting', 'languages'));
    }

    public function create()
    {
        $languages = $this->languages;

        return view('admin.settings.create', compact('languages'));
    }
    public function store(Request $request)
    {
        if ($request->has('id')) {
            $setting = Setting::find($request->id);
        } else {
            $setting = new Setting();
        }

        $setting->address = $request->address;
        $setting->phone_number = $request->phone_number;
        $setting->email = $request->email;
        $setting->schedule = $request->schedule;
        $setting->weekend_schedule = $request->weekend_schedule;
        $setting->instagram = $request->instagram;
        $setting->facebook = $request->facebook;
        $setting->messenger = $request->messenger;
        $setting->viber = $request->viber;
        $setting->whatsapp = $request->whatsapp;

        $setting->save();

        return redirect()->route('settings.index', $setting->id);
    }



    public function destroy($id)
    {
        $setting = Setting::findOrFail($id);

        $setting->delete();

        return redirect()->route('settings.index');
    }

    public function show($id)
    {
        $setting = Setting::findOrFail($id);

        return view('admin.settings.show', compact('setting'));
    }
}