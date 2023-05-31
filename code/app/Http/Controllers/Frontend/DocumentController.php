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

class DocumentController extends Controller
{
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

    public function show($slug)
    {
        $document = \App\Notification::where('slug', $slug)->first();
        if ($document == null) {
          return redirect()->route('index');
        }

        $pageMeta = [
            'title' => $document->title,
            'meta_description' => $document->title,
            'image' => setting('site.logo'),
        ];

        $title = $document->title;
        return view('frontend.documents.show', compact( 'document', 'pageMeta', 'title'));
    }

}
