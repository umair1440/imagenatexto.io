<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Fonts;
use App\Models\Tool;
use Illuminate\Http\Request;
use App\Models\Setting;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tool = Tool::where('is_home', 1)->first();

        @$content = json_decode($tool['tool_content'], true);
        if ($tool) {
            return view('frontend.pages.home')->with([
                'content' => @$content,
                'tool' =>    $tool,
                'tool_meta_title' => 'Random Letter Generator - Letter Randomizer from A to Z'
            ]);
        } else {
            return '';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Show all fonts collections
     *
     * @return \Illuminate\Http\Response
     */
    public function fonts_collections()
    {
        return Fonts::all();
    }


    public function contacts()
    {
        return view('frontend.pages.contact-us')->with([
            'tool_meta_title' => 'Contacto'
        ]);
    }


    public function blogs()
    {
        return view("frontend.pages.blogs", [
            'tool_meta_title' => 'Blog'
        ]);
    }


    // public function blog($slug)
    // {
    //     return view("frontend.pages.blog")->with([
    //         'blog' => Blog::where('slug', $slug)->first(),
    //         'tool_meta_title' => 'Blog'
    //     ]);
    // }


    public function terms()
    {
        $settings = Setting::first();
        $settings = @json_decode($settings->content, true);
        return view("frontend.pages.terms")->with(['content' => @$settings['terms-and-condition'], 'tool_meta_title' => 'Terminos y Condiciones']);
    }

    public function policy()
    {
        $settings = Setting::first();
        $settings = @json_decode($settings->content, true);
        return view("frontend.pages.privacy")->with(['content' => @$settings['privacy-policy'], 'tool_meta_title' => 'Politica de Privacidad']);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
