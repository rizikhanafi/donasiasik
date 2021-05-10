<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class DonasiModel extends Model
{
    public function addData($data) {
        return DB::table('donatur')->insert($data);
    }

    public function editData($id_donatur, $data){
        return DB::table('donatur')->where ('id_donatur', $id_donatur)->update($data);
    }

    public function detailData($id_donatur) {
            return DB::table('donatur')->where('id_donatur', $id_donatur)->first();
    }

    public function deleteData($id_donatur, $data) {
        return DB::table('donatur')->where('id_donatur', $id_donatur)->delete();
    }
}
