<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function post_menu()
    {
        return view('admin.post_menu');
    }

    public function add_menu(request $request)
        {
            $user=Auth()->user();

            $user_id=$user->id;

            $user=Auth()->user();

            $usertype=$user->usertype;

            $post=new post;

            $post->title = $request->title;

            $post->description = $request->description;

            $post->post_status = 'active';

            $post->user_id = $user_id;

            $post->name = $usertype;

            $post->usertype = $usertype;

            $image=$request->image;

            if($image)
            {
                
                $imagename=time().'.'.$image->getClientOriginalExtension();

                $request->image->move('postimage',$imagename);

                $post->image=$imagename;
            }
            
            $post->save();

            return redirect()->back()->with ('message', 'Post Added Successfully');
            
        }

    public function show_menu()
        {
            $post=post::all();
            return view('admin.show_menu', compact('post'));
        }
    
    public function delete_menu($id)    
    {
        $post=post::find($id);
        $post->delete();
        return redirect()->back()->with('message','Post Deleted Successfully');
    }

    public function edit_menu($id)    
    {
        $post=post::find($id);
        return view('admin.edit_menu', compact('post'));
    }

    public function update_menu(Request $request, $id)    
    {
        $data=Post::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $image=$request->image;
        if($image)
            {
            $imagename=time().'.'.$image->getClientOriginalExtension();

                $request->image->move('postimage',$imagename);

                $data->image=$imagename;
            }
        $data->save();
        return redirect()->back()->with('message','Post Updated Successfully');
    }
}