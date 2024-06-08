<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::find([1,2],['name','email']);
        // $users = User::count();
        // $users = User::max('age'); | min

        // $users = User::where([['city','Lucknow'],['age','>',18]])->get();
        // $users = User::where('city','Lucknow')->
        // orWhere('age','>',18)->get();
        // $users = User::whereCity('Lucknow')->
        // whereAge(23)->
        // select('name','email as user Email')->get();
        // ->toRawSql();

        $users=User::simplepaginate(4);

        // return $users;

        return view('home',compact('users'));

        // foreach($users as $user){
        //     echo $user->name."<br>";
        // }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = new user;

        // $user->name=$request->username;
        // $user->email=$request->email;
        // $user->age=$request->age;
        // $user->city=$request->city;
        // $user->save();

        
        $request->validate([
            'username'=>'required|string',
            'email'=>'required|email',
            'age'=>'required|numeric',
            'city'=>'required|alpha',
        ]);

        User::create([
            'name'=>$request->username,
            'email'=>$request->email,
            'city'=>$request->city,
            'age'=>$request->age,
          
        ]);
     
      
        return redirect()->route('user.index')->with('status','User Created Account Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $users=User::find($id);

        return view('viewuser',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $users=User::find($user->id);

        return view('update', compact('users'));
    }

    public function update(Request $request, User $user)
    {
        // $user = User::find($user->id);
        // $user->name=$request->username;
        // $user->email=$request->email;
        // $user->age=$request->age;
        // $user->city=$request->city;
        // $user->save();

        $request->validate([
            'username'=>'required|string',
            'email'=>'required|email',
            'age'=>'required|numeric',
            'city'=>'required|alpha',
        ]);

       $user= User::where('id',$user->id)
            ->update([
            'name'=>$request->username,
            'email'=>$request->email,
            'city'=>$request->city,
            'age'=>$request->age,
        ]);
        return redirect()->route('user.index')->with('status','User Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        // User::destroy($id);
        return redirect()->route('user.index')->with('status', $user->name.' Deleted Successfully');
    }
}
