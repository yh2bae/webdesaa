<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function index()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }
        
        $desa = Desa::all()->first();

        $user = DB::table('users as a')
             ->select('a.*','b.name_role')
             ->leftjoin('roles as b' , 'b.id_role', '=', 'level')
             ->where('a.status', 'Y')
             ->get();


        $roles 	= DB::table('roles')->where('status','Y')->orderBy('id_role','ASC')->get();

        return view('admin.users.index', compact('user', 'roles', 'desa'));
    }

    public function create()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        $roles 	= DB::table('roles')->where('status','Y')->orderBy('id_role','ASC')->get();

        return view('admin.users.create', compact('roles', 'desa'));
    }

    public function store(Request $request, Users $user)
    {
        $request->validate([
            'name'     => 'required',
			'username' => 'required|unique:users',
			'password' => 'required',
            'email'    => 'required|email',
            'level'    => 'required',
            'avatar'   => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('avatar')) {
            $img = $request->file('avatar');
            $user['avatar'] = time().'-'. $img->getClientOriginalName();

            $filePath = public_path('/upload/user');
            $img->move($filePath, $user['avatar']);
        }

        Users::Create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->get('password')),
            'level' => $request->level,
            'avatar' => $user['avatar'],
        ]);

        return redirect()->route('user.index')->with(['success' => 'User Berhasil dibuat']);
    }

    public function edit($id)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        $roles 	= DB::table('roles')->where('status','Y')->orderBy('id_role','ASC')->get();

        $decrypt = Crypt::decryptString($id);

        $user = Users::findOrFail($decrypt);

        return view('admin.users.edit', compact('user','roles', 'desa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'     => 'required',
			'username' => 'required',
            'email'    => 'required|email',
            'level'    => 'required',
            'avatar'   => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $decrypt = Crypt::decryptString($id);
        $user = Users::findOrFail($decrypt);

        if ($request->hasFile('avatar')) {
            $img = $request->file('avatar');
            $user['avatar'] = time().'-'. $img->getClientOriginalName();

            $filePath = public_path('/upload/user');
            $img->move($filePath, $user['avatar']);
        } else {
            $img = $user['avatar'];
        }

        

        if(!empty($request->password)) {
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->get('password')),
                'level' => $request->level,
                'avatar' => $user['avatar'],
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'level' => $request->level,
                'avatar' => $user['avatar'],
            ]);
        }

        return redirect()->back()->with(['success' => 'User Berhasil diedit']);

    }

    public function destroy($id)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        DB::table('users')->where('id',$id)->update([
            'status' => 'N',
        ]);

        return redirect()->route('user.index')->with(['success' => 'User Berhasil dihapus']);
    }


}
