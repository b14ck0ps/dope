<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuser;

class UserController extends Controller
{
    function index()
    {
        $title = "Register";
        $url = 'register';
        $data = compact('title', 'url');
        return view('register')->with($data);
    }
    function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required|min:5',
        ]);
        $customer = new Vuser();
        $customer->username = $request->username;
        $customer->email = $request->email;
        $customer->password = $request->password;
        $customer->save();
        return redirect()->route('views');
    }
    function views(Request $request)
    {

        $search = $request->search ?? "";
        if ($request != '') {
            $customers = Vuser::where('username', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->paginate(10);
        }
        return view('users-views')->with(compact('customers', 'search'));
    }
    function trash()
    {
        $customers = Vuser::onlyTrashed()->get();
        return view('users-trash')->with(compact('customers'));
    }
    function delete($id)
    {
        $customer = Vuser::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect()->route('views');
    }
    function fdelete($id)
    {
        $customer = Vuser::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->forceDelete();
        }
        return redirect()->route('views');
    }
    function restore($id)
    {
        $customer = Vuser::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->restore();
        }
        return redirect()->route('views');
    }
    function edit($id)
    {
        $customer = Vuser::find($id);
        if (is_null($customer)) {
            return redirect()->route('views');
        } else {
            $title = "Update";
            $url = 'update/' . $id;
            $data = compact('customer', 'title', 'url');
            return view('register')->with($data);
        }
    }
    function update($id, Request $request)
    {
        $customer = Vuser::find($id);
        if (is_null($customer)) {
            return redirect()->route('views');
        } else {
            $this->validate($request, [
                'username' => 'required|max:255',
                'email' => 'required|max:255|email',
                'password' => 'required|min:5|confirmed',
                'password_confirmation' => 'required|min:5',
            ]);
            $customer->username = $request->username;
            $customer->email = $request->email;
            $customer->password = $request->password;
            $customer->save();
            return redirect()->route('views');
        }
    }
}
