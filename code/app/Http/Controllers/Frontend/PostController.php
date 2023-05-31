<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search', '');
        $blogs= Post::where('title', 'like', '%'.$search.'%')->where('status', 'published')->latest()->paginate(12);
        $title = $search == "" ? 'Tin tức': 'Tìm kiếm: "'.$search.'"';

        $pageMeta = [
          'title' => $title,
          'meta_description' => $title,
          'image' => setting('site.logo'),
        ];

        return view('frontend.blog.index', compact( 'blogs', 'pageMeta', 'title'));
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
    public function blogDetail($slug)
    {

        $blog= Post::where('slug', $slug)->first();
        $title= $blog->title ?? "";
        $recentPost= Post::where('category_id', $blog->category_id)->limit(6)->get();
        $categories= Category::withCount('posts')->get();
        $page = [
            'title' => $title,
            'meta_description' => $blog->meta_description,
            'image' => $blog->image,
        ];
        return view('frontend.blog.blogDetail', compact('blog', 'title', 'recentPost', 'categories', 'page'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function PostByCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();
        if ($category == null) {
          return redirect()->route('index');
        }
        $blogs= Post::where('category_id', $category->id)->where('status', 'published')->latest()->paginate(12);

        $page = [
            'title' => $category->name,
            'meta_description' => $category->name,
            'image' => setting('site.logo'),
        ];
        $title = $category->name;
        return view('frontend.blog.index', compact( 'blogs', 'page', 'title'));
    }

}
