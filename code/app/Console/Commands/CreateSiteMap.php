<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use Carbon\Carbon;

class CreateSiteMap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      // create new sitemap object
      $sitemap = \App::make("sitemap");

      // add items to the sitemap (url, date, priority, freq)
      $sitemap->add(\URL::to('/'), Carbon::now()->toDateTimeString() , '1.0', 'weekly');

      // get all services from db
      $services= \DB::table('staticdatas')->where(['type' => 'linh-vuc', 'status' => 'ACTIVE'])->limit(3)->get();

      // add every services to the sitemap
      foreach ($services as $service)
      {
        $sitemap->add(\URL::to('/'). "/services/{$service->slug}", $service->updated_at, '0.9', 'weekly');
      }

      // page in home
      $sitemap->add(\URL::to('/gioi-thieu'), Carbon::now()->toDateTimeString() , '0.8', 'weekly');
      $sitemap->add(\URL::to('/lien-he'), Carbon::now()->toDateTimeString() , '0.8', 'weekly');
      // $sitemap->add(\URL::to('/tuyen-dung'), Carbon::now()->toDateTimeString() , '0.8', 'weekly');
      $sitemap->add(\URL::to('/hop-tac-doanh-nghiep'), Carbon::now()->toDateTimeString() , '0.8', 'weekly');
      $sitemap->add(\URL::to('/blogs'), Carbon::now()->toDateTimeString() , '0.8', 'weekly');

      // get all page from db
      $pages = \DB::table('pages')->where('status','active')->orderBy('created_at', 'desc')->get();

      $pagesIgnore = [
        'about',
        'about-home',
        'lien-he',
        'contact'
      ];

      foreach ($pages as $page)
      {
        if (in_array($page->slug, $pagesIgnore)) {
          continue;
        }

        $sitemap->add(\URL::to('/'). "/pages/{$page->slug}", $page->updated_at, '0.8', 'weekly');
      }

      // get all posts from db
      $categories = \DB::table('categories')->orderBy('created_at', 'desc')->get();

      // add every post to the sitemap
      foreach ($categories as $category)
      {
        $sitemap->add(\URL::to('/'). "/category/{$category->slug}", $category->updated_at, '0.7', 'weekly');
      }

      // get all posts from db
      $posts = \DB::table('posts')->orderBy('created_at', 'desc')->get();

      // add every post to the sitemap
      foreach ($posts as $post)
      {
        $sitemap->add(\URL::to('/'). "/blogs/{$post->slug}", $post->updated_at, '0.8', 'weekly');
      }

      // generate your sitemap (format, filename)
      $sitemap->store('xml', 'sitemap');
    }
}
