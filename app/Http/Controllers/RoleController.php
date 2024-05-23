<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleModel;
use App\Models\PermissionModel;
use App\Models\PermissionRoleModel;
use Auth;

class RoleController extends Controller
{
    public function list(){
        $PermissionRole =PermissionRoleModel::getPermission('Role',Auth::user()->role_id);
        if(empty($PermissionRole )){
            abort(404);
        }

        $data['PermissionAdd'] = PermissionRoleModel::getPermission('Add Role',Auth::user()->role_id);
        $data['PermissionEdit'] = PermissionRoleModel::getPermission('Edit Role',Auth::user()->role_id);
        $data['PermissionDelete'] = PermissionRoleModel::getPermission('Delete Role',Auth::user()->role_id);
        $data['getRecord'] = RoleModel::getRecord();
        return view('panel.role.list',$data);
    }

    public function add(){

        $PermissionRole =PermissionRoleModel::getPermission('Add Role',Auth::user()->role_id);
        if(empty($PermissionRole )){
            abort(404);
        }

        $getPermission = PermissionModel::getRecord();
        $data['getPermission'] = $getPermission;
        return view('panel.role.add', $data);
    }

    public function insert(Request $request){
    //   dd($request->all());
    $PermissionRole =PermissionRoleModel::getPermission('Add Role',Auth::user()->role_id);
    if(empty($PermissionRole )){
        abort(404);
    }

        $save = new RoleModel;
        $save->name = $request->name;
        $save->save();
 
        PermissionRoleModel::InsertUpdateRecord( $request->permission_id, $save->id);
        return redirect('panel/role')->with('success',"Role successfully created");
    }
    public function edit($id){

        $PermissionRole =PermissionRoleModel::getPermission('Edit Role',Auth::user()->role_id);
        if(empty($PermissionRole )){
            abort(404);
        }

        $data['getRecord'] = RoleModel::getSingle($id);
        // $getPermission = PermissionModel::getRecord();
        $data['getPermission'] = PermissionModel::getRecord();
        $data['getRolePermission'] = PermissionRoleModel::getRolePermission($id);
        return view('panel.role.edit',$data);
    }

    public function update($id,Request $request){
        $PermissionRole =PermissionRoleModel::getPermission('Edit Role',Auth::user()->role_id);
        if(empty($PermissionRole )){
            abort(404);
        }

        // dd($request->all());
        $save = RoleModel::getSingle($id);
        $save->name = $request->name;
        $save->save();
        PermissionRoleModel::InsertUpdateRecord( $request->permission_id, $save->id);
        return redirect('panel/role')->with('sucess',"Role successfully updated");
    }
    public function delete($id){
        $PermissionRole =PermissionRoleModel::getPermission('Delete Role',Auth::user()->role_id);
        if(empty($PermissionRole )){
            abort(404);
        }

        // dd($request->all());
        $save = RoleModel::getSingle($id);
       
        $save->delete();
 
        return redirect('panel/role')->with('sucess',"Role successfully deleted");
    }
}
