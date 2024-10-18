<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast_data;
use Exception;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class CastController extends Controller
{
    public function index(){
        $datas = Cast_data::all();
        return view('cast',compact('datas'));
    }

    public function create(){
        return view('cast_form');
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'nama' => 'required',
        'umur' => 'required',
        'bio' => 'required',
    ]);

    // dd($data);

    try{
        Cast_data::create($data);
        return Redirect() -> route('tampil_data');
    }
    catch(Exception $e){
        return Redirect() -> back();
    }
}


    public function show($id){
        $data = Cast_data::findOrFail($id);
        return view('cast_detail', compact('data'));
    }

    public function edit($id){
        $datas = Cast_data::findOrFail($id);
        return view('edit_form',compact('datas'));
    }

    public function update(Request $request, $id){
        $datas = Cast_data::findOrFail($id);
        $data = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $datas = Cast_data::findOrFail($id);
        $datas -> update([
            'nama' => $data['nama'],
            'umur' => $data['umur'],
            'bio' => $data['bio'],
        ]);

        return Redirect() -> route('tampil_data');
    }

    public function destroy($id){
        $datas = Cast_data::findOrFail($id);
        if($datas){
            $datas -> delete();
            return Redirect() -> route('tampil_data');
        } else {
            return Response() -> json(['Data Not Found'], 404);
        }
    }
}
