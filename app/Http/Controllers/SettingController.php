<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function store(Request $request)
    {
        $contentKey = !empty($request->contentKey) ? $request->contentKey : '';
        $contentValue = !empty($request->contentKey) ? $request->contentValue : '';
        $inputType = !empty($request->contentKey) ? $request->inputType : '';
        $contentArr = [];
        if (!empty($contentKey) && !empty($contentValue)) {
            for ($i = 0; $i < count($contentKey); $i++) {
                $regex = '/[^A-Za-z1-9\_]/gi';
                $contentKey[$i] = str_replace($regex, "_", $contentKey[$i]);
                $contentArr[$contentKey[$i]]['type'] = $inputType[$i];
                $contentArr[$contentKey[$i]]['value'] = $contentValue[$i];
            }
        }
        $content_json = json_encode($contentArr);
        $settings = Setting::where('name', 'text')->first();
        if (!$settings) {
            $settings = new Setting();
        }
        $settings->name = 'text';
        $settings->content = $content_json;
        $settings->save();
        return redirect()->route('tool.settings');
    }
}
