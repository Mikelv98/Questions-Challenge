<?php

namespace App\Http\Controllers;

use App\Models\Tematicas;//del modal
use App\Http\Requests\Tematicas\StoreRequest;
use App\Http\Requests\Tematicas\UpdateRequest;
use App\Models\Preguntas;//del modal
use App\Models\Respuestas;//del modal
use App\Http\Requests\Preguntas\StoreRequest as PStoreRequest;
use App\Http\Requests\Preguntas\UpdateRequest as PUpdateRequest;;

use DB;
use Auth;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function view(){
        $tematicas=Tematicas::orderby('nombre','ASC')->paginate(5);
        return view('AdministradorTematica', compact('tematicas'));
    }

    public function createtematica(){
        return view('AdministradorNuevaTematica');
    }

    public function storetematica(StoreRequest $request){
        //dd($request);
        Tematicas::create($request->all());
        return redirect(('AdministradorTematicas'));
    }
    public function edittematica($id)
    //public function edit($id)
    {
        //vista para editar una categoria
        $tematicas = Tematicas::find($id);
        return view('AdministradorEditarTematica', compact('tematicas') );
    }
    public function updatetematica(UpdateRequest $request, $id)
    {
        Tematicas::where('id', $id)->update($request->except(['_token','_method','Ruta']));

        return redirect('AdministradorTematicas');//se saca del web.php*/
    }
    public function destroytematica($id)
    {
        DB::table('tematicas')->Where('id',$id)->delete();

        return redirect('AdministradorTematicas');//se saca del web.php*/
    }

    public function viewpreguntas(){
        $preguntas=Preguntas::orderby('tematica_id','ASC')->paginate(10);
        return view('AdministradorPregunta', compact('preguntas'));
    }
    public function createpregunta(){
        $tematicas = DB::table('tematicas')->orderBy('nombre','asc')->get();
        return view('AdministradorNuevaPregunta', compact('tematicas'));
    }
    public function storepregunta(PStoreRequest $request){
        //dd($request->respuestacorrecta);
        Preguntas::create($request->except(['respuestacorrecta']));
        $id = DB::getPdo()->lastInsertId();
        Respuestas::create([
            'respuestacorrecta' => $request->respuestacorrecta,
            'preguntas_id'=>$id,
            ]);
        return redirect(('AdministradorPreguntas'));
    }
    public function editpregunta($id)
    //public function edit($id)
    {
        //vista para editar una categoria
        $preguntas = Preguntas::find($id);

        $tematicas = DB::table('tematicas')->orderBy('nombre','asc')->get();
        return view('AdministradorEditarPregunta', compact('tematicas', 'preguntas') );
    }
    public function updatepregunta(PUpdateRequest $request, $id)
    {
        Preguntas::where('id', $id)->update($request->except(['respuestacorrecta','_token','_method','Ruta']));
        Respuestas::where('preguntas_id',$id)->update(['respuestacorrecta'=>$request->respuestacorrecta]);
        return redirect('AdministradorPreguntas');//se saca del web.php*/
    }
    public function destroypregunta($id)
    {
        DB::table('preguntas')->Where('id',$id)->delete();
        DB::table('respuestas')->Where('preguntas_id',$id)->delete();
        return redirect('AdministradorPreguntas');//se saca del web.php*/
    }

}
