<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Blog::orderBy('id', 'desc')->get();
            return DataTables::of($data)
                // ->addColumn('category_id', function ($row) {
                //     return ($row->category_id)?$row->category->cat_name:'NA';
                // })
                // ->addColumn('image', function ($row) {
                //     return ($row->image)?$row->image:'NA';
                // })  
                ->addColumn('title', function ($row) {
                    return ($row->title) ? $row->title : 'NA';
                })
                ->addColumn('body', function ($row) {
                    return ($row->body) ? $row->body : 'NA';
                })

                // ->addColumn('slug', function ($row) {
                //     return ($row->slug)?$row->slug:'NA';
                // })
                // ->addColumn('affiliate_url', function ($row) {
                //     return ($row->affiliate_url)?$row->affiliate_url:'NA';
                // })

                ->addColumn('status', function ($row) {
                    return ($row->status) ? $row->status : 'NA';
                })

                ->editColumn('status', function ($row) {
                    $checkbox = '<span style="cursor:pointer" onclick="changeProductStatus(' . $row->id . ')" class="shadow-none badge ';
                    if ($row->status == '1') {
                        $checkbox .=  'badge-success';
                    } else {
                        $checkbox .=  'badge-warning';
                    }
                    $checkbox .=  ' ">';
                    $checkbox .= ($row->status == '1') ? 'Active' : 'Inactive';
                    $checkbox .= '</span>';
                    return $checkbox;
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<div class="icon-group"><a href="' . url("admin/edit-blogs/$row->id") . '" class="btn-icon text-secondary" ><i class="far fa-edit"></i></a> <a href="javascript:void(0)" class="btn-icon text-danger" id="deleteCus" onclick="deleteProduct(this)" data-id="' . $row->id . '" class="btn-icon text-danger" ><i class="far fa-trash-alt"></i></a></div>';
                    return $actionBtn;
                })
                ->rawColumns(['status', 'action'])->make(true);
        }
        return view('admin.Blogs.index');
    }

    public function create()
    {
        return view('admin.Blogs.add');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
        ]);
        $blog = new Blog();
        $image = $request->file('image');
        $destinationPath = 'BlogThumbnail/';
        $thumbnail = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move(public_path($destinationPath), $thumbnail);
        $blog->image = $thumbnail;
        $blog->user_id = Auth::user()->id;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->status = $request->status;
        $blog->save();
        return redirect('/admin/blogs');
    }

    public function edit(Request $request,$id)
    {
        $blog = Blog::find($id);
        return view('admin.Blogs.edit',compact('blog'));
    }
    public function update(Request $request, $id)
    {
        // $data= $request->all();
        // dd($data);
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'status' => 'required',
        ]);
        $blog = Blog::find($id);
        if ($image = $request->file('image')) {
            $destinationPath = 'BlogThumbnail/';
            $thumbnail = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path($destinationPath), $thumbnail);
            $blog->image = $thumbnail;
        } else {
            unset($blog->image);
        }
        $blog->user_id = Auth::user()->id;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->status = $request->status;
        $blog->update();
        return redirect('/admin/blogs');
    }
}
