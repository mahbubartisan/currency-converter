<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Inertia\Inertia;

class SettingController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::paginate(5);
        return Inertia::render('Setting/Index', $data);
    }
}
