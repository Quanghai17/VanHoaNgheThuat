<?php

namespace App\Http\Controllers\Frontend;

use App\Banner;
use App\Http\Controllers\Controller;
use App\Pricing;
use App\Product;
use App\Staticdata;
use App\StaticDatum;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
       
        $banners= Banner::where('type', 'banner')->get();
        $aboutHome = Page::where(['slug' => 'about-home', 'status' => 'ACTIVE'])->first();
        $achievement = Page::where(['slug' => 'thanh-tuu', 'status' => 'ACTIVE'])->first();
        $page = Page::where(['slug' => 'home', 'status' => 'ACTIVE'])->first();
        $aboutUs = Page::where(['slug' => 'about-us-home-page', 'status' => 'ACTIVE'])->first();

        $featured = Post::where('status','PUBLISHED')->limit(8)->latest()->get();
        // dd($featured);

        $list_category_news =  Category::where('parent_id', 10)->limit(3)->get();
        foreach($list_category_news as $val){
            $val->post = Post::where('category_id',$val->id)->limit(5)->get();
        }
        $list_category_propagate = Category::where('parent_id', 14)->limit(3)->get();
        foreach($list_category_propagate as $val){
            $val->post = Post::where('category_id',$val->id)->limit(5)->get();
        }
        $list_category_art = Category::where('parent_id', 22)->limit(3)->get();
        foreach($list_category_art as $val){
            $val->post = Post::where('category_id',$val->id)->limit(5)->get();
        }
        $propagate = Post::where('category_id',30)->limit(4)->get();
        $union = Post::where('category_id',32)->limit(4)->get();
        $images = Staticdata::where('slug','thu-vien-anh')->first();

        return view('frontend.homepage.index', compact('aboutHome', 'banners', 'achievement', 'page', 'aboutUs','list_category_news','images','featured','propagate','union','list_category_propagate','list_category_art'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * return redirect to contact blade.
     */
    public function contact()
    {
        return view('frontend.contact.index');
    }

}
