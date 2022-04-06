<?php

namespace App\Http\Controllers;

use App\Models\Technologys;
use Laravel\Lumen\Routing\Controller as BaseController;

class TechnologyController extends BaseController
{
    public function index(){
        $teknologi = Technologys::get();
        // dd($teknologi);

        return response()->json([
                'success' => true,
                'message' => 'Daftar Berita Teknologi',
                'data' => $teknologi
            ], 200);
      
    }


    public function show($id){

        try {
            $teknologi = Technologys::where('id', $id)->first();
            return response()->json([
                'success' => true,
                'message' => 'Show ' . $teknologi->judul,
                'data' => $teknologi
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak di temukan.',
            ], 200);
        }

        
        
    }


}
