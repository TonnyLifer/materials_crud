<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Materials;
use App\Models\Type;
use Illuminate\Http\Request;
use ProtoneMedia\LaravelCrossEloquentSearch\Search;

class MaterialController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(){
        $material = Materials::with('types','categories')->latest()->get();
        return view('materials.list_material',['material' => $material]);
    }

    public function create_view(){
        return view('materials.create_material');
    }

    public function edit_view($id){
        $material = Materials::where('id',$id)->with('types','categories')->first();
        $category = Category::get();
        $type = Type::get();
        return view('materials.edit_material',['material' => $material,'category' => $category,'type'=>$type]);
    }

    public function view($id){
        $material = Materials::where('id',$id)->with('types','categories')->first();
        return view('materials.view_material',['material' => $material]);
    }

    public function create(Request $request){
        $material = $request->validate([
            'name' => 'string',
            'category_id' => 'string',
            'type_id' => 'string',
            'author' => 'string',
            'description' => 'string'
        ]);

        $data = Materials::create($material);
        return redirect()->route('list_material');
        // return view('materials.list_material');
    }

    public function edit(Request $request){
        $material = Materials::where('id',$request->id)->first();
        $material->name = $request->name;
        $material->category_id = $request->category_id;
        $material->type_id = $request->type_id;
        $material->author = $request->author;
        $material->description = $request->description;
        $material->save();

        return redirect()->route('list_material');
    }

    public function delete(Request $request){
        $material = Materials::where('id',$request->id)->first();
        $material->delete();
        return redirect()->route('list_material');
    }

    public function search(Request $request){
        $material = Search::add(Materials::with('types','categories'), ['name','author','types.name','categories.name'])
            ->search($request->search);
        return view('materials.list_material',['material' => $material]);
    }
}
