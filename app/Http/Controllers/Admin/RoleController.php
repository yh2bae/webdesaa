<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;

class RoleController extends Controller
{
    public function index()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        $roles = Role::all()->where('status','Y');

        return view('admin.roles.index', compact('roles', 'desa'));
    }

    public function create()
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        return view('admin.roles.create', compact('desa'));
    }

    public function store(Request $request)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $request->validate([
            'name_role' => 'required',
        ]);

        Role::create([
            'name_role' => $request->name_role
        ]);

        return redirect()->route('role.index')->with(['success' => 'Role Berhasil dibuat']);
    }

    public function edit($id_role)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();

        $decrypt = Crypt::decryptString($id_role);

        $role = Role::findOrFail($decrypt);

        return view('admin.roles.edit', compact('role', 'desa'));
    }

    public function update(Request $request, $id_role)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $decrypt = Crypt::decryptString($id_role);
        $role = Role::findOrFail($decrypt);

        $request->validate([
            'name_role' => 'required',
        ]);

        $role->update([
            'name_role' => $request->name_role
        ]);

        return redirect()->route('role.index')->with(['success' => 'Role Berhasil diubah']);
    }

    public function destroy($id_role)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        DB::table('roles')->where('id_role',$id_role)->update([
            'status' => 'N',
        ]);

        return redirect()->route('role.index')->with(['success' => 'User Berhasil dihapus']);
    }

    public function role_access($id_role)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $desa = Desa::all()->first();
        
        $role   = DB::table('roles')->where('id_role',$id_role)->orderBy('id_role','DESC')->first();
        $modul = DB::table('moduls')->where('status','Y')->orderBy('id_modul','ASC')->get();

        return view('admin.roles.access', compact('role', 'modul', 'desa'));
    }

    public function proses_role_access(Request $request)
    {
        if(Session()->get('username')=="") {
            return redirect()->route('login')->with(['error' => 'Mohon maaf, Anda belum login']);
        }

        $mod=count($request->modul);
		$modul=$request->modul;
		
		for($i=0;$i<$mod;$i++)
        {
            $id = $modul[$i];
            $view = !empty($request->input('view-'.$id)) ? $request->input('view-'.$id) : '';
            $input = !empty($request->input('input-'.$id)) ? $request->input('input-'.$id) : '';
            $update   = !empty($request->input('update-'.$id))   ? $request->input('update-'.$id)   : '';
            $delete  = !empty($request->input('delete-'.$id))  ? $request->input('delete-'.$id)  : '';
            $posting= !empty($request->input('posting-'.$id))? $request->input('posting-'.$id): '';
            
            if($view  =='on'){$view =1;}else{$view =0;}
            if($input  =='on'){$input =1;}else{$input =0;}
            if($update    =='on'){$update   =1;}else{$update   =0;}
            if($delete   =='on'){$delete  =1;}else{$delete  =0;}
            if($posting =='on'){$posting=1;}else{$posting=0;}
            
            //cek apakah sudah diinput sebelumnya ?
            $cek = DB::table('user_moduls')
                    ->where('id_role', '=', $request->id_role)
                    ->where('id_modul', '=', $modul[$i])
                    ->count();
            if ($cek == 0)
            {	
                //jika belum ada ditabel user_modul maka di input dulu	
                DB::table('user_moduls')->insert([
                    'id_role'=>$request->id_role,
                    'id_modul'=>$modul[$i],
                    'view'=>$view,
                    'input'=>$input, 
                    'update'=>$update,
                    'delete' => $delete,
                    'posting' => $posting
                ]);

            } else {
                //jika sudah ada ditabel user_modul maka cukup update	
                DB::table('user_moduls')->where('id_role',$request->id_role)->where('id_modul',$modul[$i])->update([
                    'view'=>$view,
                    'input'=>$input, 
                    'update'=>$update,
                    'delete' => $delete,
                    'posting' => $posting
                ]);
            }
		
		}
    	
        return redirect('admin-panel/roles/access/'.$request->id_role)->with(['success' => 'Data telah diupdate']);
    }


}
