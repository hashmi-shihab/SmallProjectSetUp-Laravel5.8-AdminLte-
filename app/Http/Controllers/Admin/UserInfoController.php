<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserInfoController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::id() == 1)
        {
            $users = User::select()->orderBy('id','DESC')->get();
        }
        else
        {
            $users = User::where('id',Auth::id())->orderBy('id','DESC')->get();

        }

        return view('admin.users.list',compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (Auth::id()==1)
        {
            $user = User::find($id);
        }
        else
        {
            $user = User::find(Auth::id());
        }
        return view('admin.users.edit',compact('user'));
    }


    public function update(Request $request, $id)
    {

//        dd($request->all());
        $rules =[
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' .$id,
            'password' => 'sometimes|min:5',
            'confirm-password' => 'sometimes|same:password',
        ];

        $customMessage = [
            'name.required'=>'User name is required',
            'email.required'=>'User email is required',
        ];

        $this->validate($request,$rules,$customMessage);

        if (Auth::id()==1)
        {
            /*$input = $request->all();
            if(!empty($input['password'])){
                $input['password'] = Hash::make($input['password']);
            }
            else{
                $input = array_except($input,array('password'));
            }*/
            /*only super-admin can update every admin*/
            $user = User::find($id);
            /*$user->update([$input]);*/
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }
        else
        {
            $user = User::find(Auth::id());
            $user->update($request->all());
        }


        return redirect('users')->with('message','info has been updated');
    }


    public function destroy($id)
    {
        if ($id==1)
            return redirect('users')->with('errormessage','can\'t delete Super-Admin');
        else
            User::find($id)->delete();
//        $user;

        return redirect('users')->with('message','has been deleted');
    }

    public function passwordCreate()
    {
        return view('admin.users.changePassword');
    }

    public function changePassword(Request $request)
    {
//        dd($request->all());

        $rules = [
            'ppassword' => 'required',
            'npassword' => 'required | min:5 | different:ppassword',
            'repass' => 'required | same:npassword',

        ];

        $messages = [
            'ppassword.required'=> 'Old PassWord is required',
            'npassword.required' => 'New PassWord is required',
            'npassword.different' => 'Can not Use old password',
            'npassword.min' => 'New password needs at least 5 character',
            'repass.required'=> 'ReEnter PassWord',
            'repass.same'=> 'Password Did not match',

        ];

        $this->validate($request,$rules,$messages);


        /*if ($validation->fails()) {
            $errorMsgString = implode("<br/>",$validation->messages()->all());
            return Response::json(array('success' => false, 'heading' => 'Validation Error', 'message' => $errorMsgString), 400);
        }*/


        DB::beginTransaction();

        try {
            $user=Auth::user();
            $target = User::select('users.*')->where('id',$user['id'])->first();

            if(Hash::check($request->ppassword, $target->password)){
                /*echo '<pre>';
                print_r($id);
                echo '</pre>';
                exit;*/

                $admin = User::find($user['id']);
                $admin->password = Hash::make($request->npassword);

                if($admin->save()){
                    DB::commit();
                    return redirect()->back()->with('status','Password Changed! Logout and Login!');
                }

                else{

                    DB::rollback();
                    return redirect()->back()->with('errorStatus','Password can not be changed');
                }
            }

            else{

                DB::rollback();
                return redirect()->back()->with('errorStatus','Old Password is incorrect');
            }

        }

        catch (\Exception $e) {
            echo $e;
            DB::rollback();
            return redirect()->back()->with('errorStatus','Password can not be changed');
        }

    }
}
