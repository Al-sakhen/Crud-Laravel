<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInformationRequest;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function index(){
        $informations = Information::all();
        return view('information.index' , compact('informations'));
    }

    public function create(){
        return view('information.create');
    }

    public function store(StoreInformationRequest $request){
        $request->validated();



        Information::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->back();
    }

    public function edit($id){
        $information = Information::find($id);
        return view('information.edit' , compact('information'));
    }

    public function update(Request $request ){
        $information = Information::find($request->id);

        $information->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('informations');
    }

    public function destroy($id){
        Information::destroy($id);

        return redirect()->route('informations');
    }
}
