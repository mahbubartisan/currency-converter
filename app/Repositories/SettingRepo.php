<?php

namespace App\Repositories;

use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use App\Traits\MediaTraits;

class PostRepo
{
    use MediaTraits;

    public function getSetting()
    {
        $data = [];
        $data['settings'] = Setting::all();
        return $data;

    }
    public function save(SettingRequest $request, Setting $setting = null)
    {

        $data = $request->validated();
        $data['policy'] = $request->policy;
        $data['terms_condition'] = $request->terms_condition;

        if ($request->hasFile('media')) {

            $opt = [
                'dir' => 'settings',
            ];

            $res = $this->saveMedia($request->file('media'), $opt);
            if ($res->status) {
                $data['media'] = $res->id;
            }
        }

        if ($request->id) {
            $setting = Setting::findOrFail($request->id);
            $opt['delete'] = $setting?->media;
            $data['updated_by'] = auth()->id();
            $setting->update($data);
        } else {
            $data['created_by'] = auth()->id();
            Setting::create($data);
        }

        $action = $setting ? 'updated' : 'created';

        return redirect()->route('admin.settings.index')->with("message", "Setting $action Successfully");
    }

    public function destroy(Setting $setting)
    {
        $this->deleteMedia($setting?->media);
        $setting->update([
            'deleted_by' => auth()->id(),
        ]);
        $setting->delete();
        return redirect()->back()->with("message", "Setting deleted Successfully");

    }
}
