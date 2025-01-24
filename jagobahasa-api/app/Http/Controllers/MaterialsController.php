<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function listmaterials()
    {
        $materials = Materials::get();
        return $materials;
    }
    public function materialspost(Request $request)
    {
        $materialspost = Materials::create([
            'tittle'    => $request->tittle,
            'type'    => $request->type,
            'file_path'    => $request->file_path,
            'create_at'    => date('Y-m-d H:i:s'),
            'id_courses'    => $request->id_courses,
            'status'    => $request->status
        ]);
        if ($materialspost) {
            return array(
                'message' => "Data Berhasil Dimasukkan",
                'success' => true
            );
        } else {
            return array(
                'message' => "Data Gagal Dimasukkan",
                'success' => false
            );
        }
    }
    public function materialsupdate(Request $request)
    {
        $materialspost = Materials::where('id', $request->id)->update([
            'tittle'    => $request->tittle,
            'type'    => $request->type,
            'file_path'    => $request->file_path,
            'updated_at'    => date('Y-m-d H:i:s'),
            'id_courses'    => $request->id_courses
        ]);
        if ($materialspost) {
            return array(
                'message' => "Data Berhasil Diupdate",
                'success' => true
            );
        } else {
            return array(
                'message' => "Data Gagal Diupdate",
                'success' => false
            );
        }
    }
    public function materialsdelete(Request $request)
    {
        $materialspost = Materials::where('id', $request->id)->update([
            'status'    => $request->status,
            'updated_at'    => $request->updated_at
        ]);
        if ($materialspost) {
            return array(
                'message' => "Data Berhasil Dihapus",
                'success' => true
            );
        } else {
            return array(
                'message' => "Data Gagal Dihapus",
                'success' => false
            );
        }
    }
}
