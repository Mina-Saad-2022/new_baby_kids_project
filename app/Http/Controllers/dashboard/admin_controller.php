<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\Request_create_user;
use App\Http\Requests\dashboard\Request_edit_user;
use App\Http\Requests\dashboard\Requset_delete_user;
use App\Http\Traits\trait_image;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;


class admin_controller extends Controller
{
    use trait_image;

    /************************* to open admin index page " table users  *************************/

    public function index()
    {
        $users = User::all();

        return view('dashboard.admin.index', compact('users'));
    }


    /************************* to open create new user page *************************/


    public function create()
    {
        return view('dashboard.admin.create');

    }

    /************************* to insert the new user in database *************************/

    public function insert(Request_create_user $request)
    {

        if($request->has('photo')) {
            /****************** change the name of photo ******************/
            $file_name = $request->file('photo')->hashName();

            /****************** photo in form ******************/
            $this->user_photo($request->file('photo'), $file_name, 'images/avatar_user');

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'photo' => $file_name
            ]);

            return redirect(route('dashboard.view_admin_page'));


        } else {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'gender' => $request->gender,

            ]);

            return redirect(route('dashboard.view_admin_page'));        }


        // // hany

        // // 1. photo in form
        // $picform = $request->file('photo');
        // // 2. photo type
        // $picex = $picform->getClientOriginalExtension();
        // // 3.photo rename
        // $picname  = "uploaded-" . rand() . ".$picex";
        // $picform->move(public_path('images/hany'),$picname);


        // User::create([
        //     'name'=> $request->name,
        //     'email'=> $request->email,
        //     'password'=> $request->password,
        //     'phone'=> $request->phone,
        //     'gender'=> $request->gender,
        //     'photo' => $picname
        // ]);
        // $user->save();


// hany two
//        $picform = $request->file('photo');// form
//        $picname = $picform->hashName();
//        $picform->move(public_path('images/hany'), $picname);




    }

    /************************* to open the date page for edit *************************/

    public function edit($id)
    {
        $admin = User::find($id);
        return view('dashboard.admin.edit', compact('admin'));
    }


    /************************* to done the date  *************************/

    public function done_edit(Request_create_user $request)
    {


        $update = User::find($request->id);

        if($request->has('photo')) {
            /****************** change the name of photo ******************/
            $file_name = $request->file('photo')->hashName();

            /****************** photo in form ******************/
            $this->user_photo($request->file('photo'), $file_name, 'images/avatar_user');

            $update->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'photo' => $file_name
            ]);

            return redirect(route('dashboard.view_admin_page'));


        } else {
            $update->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'phone' => $request->phone,
                'gender' => $request->gender,
            ]);
        }

             return redirect(route('dashboard.view_admin_page'));

    }

    /************************* to delete the user *************************/

    public function destroy(Requset_delete_user $request)
    {
        User::where('id', $request->user_delete_id)->delete();
        return redirect(route('dashboard.view_admin_page'));
    }
}
