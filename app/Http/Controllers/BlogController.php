<?php

namespace App\Http\Controllers;

use Canvas\Models\Tag;
use Canvas\Models\Post;
use Canvas\Models\User;
use Canvas\Models\Settings;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Services\BlogService;
use Canvas\Http\Controllers\Controller;
class BlogController extends Controller
{

    protected $blogService;

    public function __construct(BlogService $blog)
    {
        $this->blogService = $blog;
    }
    /**
     * Display the blog index page.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tag = $request->get('tag');
//        $data = $this->dispatch(new BlogIndexData($tag));

        $data = $this->blogService->getPosts($tag);

        if (empty($data)){
            throw new ModelNotFoundException();
        }
        $layout = $tag ? Tag::layout($tag)->first() : config('blog.tag_layout');
        $data['tags'] = Tag::all();
//        $data[]
        return view('blog',$data, compact('posts', 'tag', 'slug', 'title'));
    }

    /**
     * Display a blog post page.
     *
     * @param $slug
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function showPost($slug, Request $request)
    {
        $post = Post::with('tags')->whereSlug($slug)->firstOrFail();
//        $socialHeaderIconsUser = User::where('id', Settings::socialHeaderIconsUserId())->first();
//        $user = User::where('id', $post->user_id)->firstOrFail();
        $tag = $request->get('tag');
        $title = $post->title;


        if (! $post->is_published && ! Auth::guard('canvas')->check()) {
            return redirect()->route('canvas.blog.post.index');
        }

        return view('post', compact('post', 'tag', 'slug', 'title', 'user', 'socialHeaderIconsUser'));
    }
}
