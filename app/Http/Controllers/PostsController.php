<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public $user;
    public $post;

    public function __construct(Post $post, User $user)
    {
        $this->Post = $post;
        $this->User = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index');
    }

    public function postsDataTables()
    {
        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->select('posts.id', 'posts.title', 'users.name')
        ->get();

        return DataTables::of($posts)->make();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $users = $this->User->all();

        return view('posts.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        (new Post())->fill($request->validated())->save();

        return view('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Post $post
     *
     * @return \Illuminate\Http\Response
     */
    public function list(Post $post)
    {
        $posts = $this->Post->all();

        return view('posts.list', compact('posts'));
    }

    public function show(Post $post, User $user)
    {
        $users = $this->User->all();

        return view('posts.show', compact('post', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Post $post
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, User $users)
    {
        $users = $this->User->all();

        return view('posts.edit', compact('post', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Post                $post
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->fill($request->validated())->update();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Post $post
     *
     * @return \Illuminate\Http\Response
     */
    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
