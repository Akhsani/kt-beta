<?php

namespace App\Http\Controllers;

use App\Talent;
use App\Category;
use App\Media;
use App\User;


use Illuminate\Http\Request;

class TalentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talents = Talent::all();
        return view('talents.index',['talents'=>$talents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('talents.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //dd(request()->all());
        $talent = new Talent;
        $talent->user_id = 4;
        $talent->category_id = request('category');
        $talent->name = request('name');
        $talent->description = request('description');
        $talent->img_thumb = request('img_thumb');

        $talent->price = request('price');


        $talent->address = request('address');
        $talent->city = request('city');
        $talent->website = request('website');

        $talent->facebook = request('facebook');
        $talent->twitter = request('twitter');
        $talent->instagram = request('instagram');
        $talent->youtube = request('youtube');
        $talent->soundcloud = request('soundcloud');

        $talent->save();

        $media = new Media;

        // foreach ($media as $image){
        //     $media->images = request($image[]);
        //     $media->type = 'gallery';
        //     $media->save();
        // };

        $media->video = request('video');
        $media->type = 'video';
        $media->save();

        $media->audio = request('audio');
        $media->type = 'audio';
        $media->save();
        
        return redirect('/talents');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function show(Talent $talent)
    {
        $talent = Talent::find($talent->id);
        return view('talents.show',['talent'=>$talent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function edit(Talent $talent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talent $talent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Talent  $talent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talent $talent)
    {
        //
    }

    public function category(Category $category) 
    {
        $category = Talent::find($talent->category->$category);
        return view('talents.category',['category'=>$category]);
    }
}
