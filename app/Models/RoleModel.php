<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;
    protected $table = 'role';

    static function getSingle($id)
    {
        return RoleModel::find($id);
    }

    static function getRecord()
    {
        return RoleModel::get();
    }
}
