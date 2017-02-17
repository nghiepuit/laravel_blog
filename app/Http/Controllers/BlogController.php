<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Repositories\Blog\IBlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    protected $blogRepository;

    public function __construct(IBlogRepository $blogRepository){
        $this->blogRepository = $blogRepository;
    }

    public function index(){
        $blogs = $this->blogRepository->getAll();
        return view('blog.index',compact('blogs'));
    }

    public function create(){
        return view('blog.create');
    }

    public function store(Request $request){
        $input = $request->all();
//        var_dump($input);
        $this->blogRepository->create($input);
        Blog::create($input);
        return back();
    }

    public function show($id){
        $blog = $this->blogRepository->find($id);
        return view('blog.show',compact('blog'));
    }

    public function edit($id){
        $blog = $this->blogRepository->find($id);
        return view('blog.edit',compact('blog'));
    }

    public function update(Request $request,$id){
        $input = $request->all();
        $this->blogRepository->update($id,$input);
        return back();
    }

    public function delete($id){
        $this->blogRepository->delete($id);
        return redirect('/blog');
    }

}
