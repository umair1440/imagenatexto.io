<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use App\Models\Setting;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tool.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'is_home' => 'unique:tools,is_home',
            'tool_slug' => 'unique:tools,tool_slug',
        ]);

        $contentKey = !empty($request->contentKey) ? $request->contentKey : '';
        $contentValue = !empty($request->contentKey) ? $request->contentValue : '';
        $inputType = !empty($request->contentKey) ? $request->inputType : '';
        $contentArr = [];
        if (!empty($contentKey) && !empty($contentValue)) {
            for ($i = 0; $i < count($contentKey); $i++) {
                if (!empty($contentValue[$i])) {
                    $contentArr[$contentKey[$i]]['type'] = $inputType[$i];
                    $contentArr[$contentKey[$i]]['value'] = $contentValue[$i];
                }
            }
        }

        if ($request->tool_parent == 0) {
            $content_json = json_encode($contentArr);
        } else {
            $content_json = Tool::select('tool_content')->where('id', $request->tool_parent)->get();
            $content_json = $content_json[0]->tool_content;
        }
        $is_home = 0;
        if ($request->has('is_home')) {
            $is_home = $request->is_home;
        }
        $create_record = Tool::create([
            'tool_name' => $request->tool_name,
            'tool_slug' => $request->tool_slug,
            'tool_meta_title' => $request->tool_meta_title,
            'tool_meta_description' => $request->tool_meta_description,
            'tool_lang' => $request->tool_lang,
            'tool_parent' => $request->tool_parent,
            'tool_content' => $content_json,
            'is_home' => $is_home,
        ])->id;


        if ($request->tool_parent == 0) {
            Tool::where('id', $create_record)->update(['tool_parent' => $create_record]);
        }
        if ($create_record) {
            return view('admin.pages.tool.list')->with('tools', Tool::all());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tool = Tool::findorfail($id);
        return view('admin.pages.tool.update')->with('tool', $tool);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $tool = Tool::find($id);
        $tool = Tool::find($request->toolId);
        $tool->tool_name = $request->tool_name;
        if ($request->has('tool_slug') && !empty($request->get('tool_slug'))) {
            $tool->tool_slug = $request->tool_slug;
        }
        $tool->tool_meta_title = $request->tool_meta_title;
        $tool->tool_meta_description = $request->tool_meta_description;
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
        $tool->tool_content = $content_json;
        $tool->save();
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tool::where('id', $id)->delete();
        return redirect()->back();
    }


    public function settings()
    {
        $settings = Setting::where('id', '1')->first();
        if ($settings) {
            $settings = json_decode($settings->content, true);
        }
        return view('admin.pages.settings.add')->with('settings', $settings);
    }


    public function blogs()
    {
        return view('admin.pages.blogs.add');
    }

    public function tool_list()
    {
        return view('admin.pages.tool.list')->with('tools', Tool::all());
        // return 'life is good';
    }
}
