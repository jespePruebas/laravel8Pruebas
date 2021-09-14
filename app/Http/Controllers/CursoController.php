<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){
        //$cursos=Curso::all();
        $cursos=Curso::orderBy('id','desc')->paginate();
        
        return view('cursos.index',compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    //public function store(Request $request){
     public function store(StoreCurso $request){
/*
 Otra manera para hacer validaciones mas complejas usando:
 php artisan make:request StoreCurso
 ruta -> app/Http/Requests
 */
        // $request->validate([
        //     'name'=>'required|max:10',
        //     'description'=>'required|min:10',
        //     'category'=>'required',
        // ]);
        $curso= new Curso();
        $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->category=$request->category;
        $curso->save();
        //return redirect()->route('cursos.show',$curso->id);
        return redirect()->route('cursos.show',$curso);
    }


    // public function show($id){
    //     $curso=Curso::find($id);
    //     return view('cursos.show',compact('curso'));
    // }
    public function show(Curso $curso){
        return view('cursos.show',compact('curso'));
    }

    
    /* Se obtiene el objeto del curso segun su id */
    // public function edit($id){
    //     $curso=Curso::find($id);
    //     return $curso;
        
    // }
    public function edit( Curso $curso){
        return view('cursos.edit',compact('curso'));
        
    }

        public function update(Request $request,Curso $curso){

        $request->validate([
            'name'=>'required|max:10',
            'description'=>'required|min:10',
            'category'=>'required',
        ]);
        $curso->name=$request->name;
        $curso->description=$request->description;
        $curso->category=$request->category;
        $curso->save();
        return view('cursos.show',compact('curso'));
        
    }

}