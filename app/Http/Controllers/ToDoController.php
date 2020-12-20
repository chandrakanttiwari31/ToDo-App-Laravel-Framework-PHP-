<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('todo_create');
    }

    
     
    public function store(Request $request)
    {
       
        $res=new ToDo;
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','Data Submitted');
        return redirect('todo_show');
    }

    
    public function show(ToDo $toDo)
    {
        return view('todo_show')->with('todoArr',ToDo::all());
    }

    
    public function edit(ToDo $toDo,$id)
    {
        return view('todo_edit')->with('todoArr',ToDo::find($id));
    }

    
    public function update(Request $request, ToDo $toDo)
    {
       
        $res=ToDo::find($request->id);
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','Data Updated');
        return redirect('todo_show');
    }

    
    public function destroy(ToDo $toDo,$id)
    {
        ToDo::destroy(array('id',$id));
       return redirect('todo_show');
    }


     function loginsubmit(Request $r)
    {

       echo $email=$r->input('email');
       echo  $pass=$r->input('pass');
       if($email=='chandan@gmail.com' && $pass=='chandan')
       {
             $r->session()->put('name','chandan');
             return redirect('todo_show');

       }
       else{

        $r->session()->flash('error','please enter valid login details');
        return redirect('login');
       }
    }

        function tologout(Request $r)
        {
    
        $r->session()->forget('name');
        $r->session()->flash('error','Logout Successfully');
        return redirect('login');
    }

   
}
