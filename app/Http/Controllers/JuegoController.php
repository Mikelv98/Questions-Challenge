<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pregunta;
use App\Models\Preguntas;
use App\Models\Tematicas;
use App\Models\Partidas;
use App\Models\respuesta;
use Illuminate\Support\Facades\DB;

class JuegoController extends Controller
{
    public function create(){
        $preguntas = DB::table('preguntas')
            ->get('*')
            ->where('idTematica','=',1);
        $respuestasc = DB::table('respuestas')
            ->get('*')
            ->where('idTematica','=',1);
        return view('JuegoView', compact('preguntas','respuestasc'));
    }

    public function showJuego(Request $request){

        /*$preguntas = DB::table('preguntas')
        ->get('*')
        ->where('idTematica','=',$request->Tematica);*/
        //

        /*$respuestasc = DB::table('respuestas')
            ->select('*')
            ->join('preguntas','preguntas.idPregunta','=','respuestas.idPregunta')
            ->where('preguntas.idTematica','=',$request->Tematica)->get();
*/
        $preguntas2=DB::table('preguntas')->where('tematica_id',$request->Tematica)->join('tematicas','preguntas.tematica_id','tematicas.id')
                        ->join('respuestas','respuestas.preguntas_id','preguntas.id')->select('preguntas.*','tematicas.nombre','respuestas.respuestacorrecta')->get();
       // print_r($preguntas2);

       $contadorP = DB::table('preguntas')->where('tematica_id',$request->Tematica)->count();

        //print_R($contadorP);

        $turno = 0;
        $NumJug = $request->NumJugadores;
        $NombreJu1 = $request->Nombrejugador1;
        $ImagenJu1 = 'images/avatares/'.$request->image1.'.png';
        $puntajeJugador1 = 0;

        if($request->Nombrejugador2 !== null){
            $NombreJu2 = $request->Nombrejugador2;
            $ImagenJu2 = 'images/avatares/'.$request->image2.'.png';
            $puntajeJugador2 = 0;

            if ($request->Nombrejugador3 !== null) {
                $NombreJu3 = $request->Nombrejugador3;
                $ImagenJu3 = 'images/avatares/'.$request->image3.'.png';
                $puntajeJugador3 = 0;
                $ImgJugadores = [$ImagenJu1,$ImagenJu2,$ImagenJu3];
                $NameJugadores = [$NombreJu1,$NombreJu2,$NombreJu3];
                $PuntajeJugadores = [$puntajeJugador1,$puntajeJugador2,$puntajeJugador3];
                return view('JuegoView', compact('NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas2','contadorP','turno'));
            }
            else {
                $ImgJugadores = [$ImagenJu1,$ImagenJu2];
                $NameJugadores = [$NombreJu1,$NombreJu2];
                $PuntajeJugadores = [$puntajeJugador1,$puntajeJugador2];
                return view('JuegoView', compact('NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas2','contadorP','turno'));
            }
        }
        else{
            $ImgJugadores = [$ImagenJu1];
            $NameJugadores = [$NombreJu1];
            $PuntajeJugadores = [$puntajeJugador1];
            return view('JuegoView', compact('NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas2','contadorP','turno'));
        }

    }

    public function preguntas(Request $request){
//dd($request);
    if($request->turno+1 == $request->cantjug ){
        $turno=0;
    }
    else{$turno=$request->turno+1;}
//dd($turno);
        $pregunt = Preguntas::find($request->idpreg);
        if($pregunt->respuesta->respuestacorrecta == $request->respuestaselec){
            if($request->cantjug==2){
                if($request->turno ==1){
                    $PuntajeJugadores = [$request->puntaje[0],$request->puntaje[1] + $pregunt->puntaje];
                }
                else{
                    $PuntajeJugadores = [$request->puntaje[0] + $pregunt->puntaje,$request->puntaje[1]];
                }
                if($PuntajeJugadores[0] >= 30){
                    $Puntuacion= $PuntajeJugadores[0];
                    $Ganador= $request->nombre[0];
                    $Foto= $request->imagen[0];
                    return view('ganador', compact('Puntuacion','Ganador','Foto'));
                }
                else if($PuntajeJugadores[1] >= 30){
                    $Puntuacion= $PuntajeJugadores[1];
                    $Ganador= $request->nombre[1];
                    $Foto= $request->imagen[1];
                    return view('ganador', compact('Puntuacion','Ganador','Foto'));
                }
            }
            elseif($request->cantjug==3){
                if($request->turno ==1){
                    $PuntajeJugadores = [$request->puntaje[0],$request->puntaje[1] + $pregunt->puntaje, $request->puntaje[2]];
                }
                elseif($request->turno ==2){
                    $PuntajeJugadores = [$request->puntaje[0],$request->puntaje[1], $request->puntaje[2] + $pregunt->puntaje];
                }
                else{
                    $PuntajeJugadores = [$request->puntaje[0] + $pregunt->puntaje,$request->puntaje[1], $request->puntaje[2]];
                }
                if($PuntajeJugadores[0] >= 30){
                    $Puntuacion= $PuntajeJugadores[0];
                    $Ganador= $request->nombre[0];
                    $Foto= $request->imagen[0];
                    return view('ganador', compact('Puntuacion','Ganador','Foto'));
                }
                else if($PuntajeJugadores[1] >= 30){
                    $Puntuacion= $PuntajeJugadores[1];
                    $Ganador= $request->nombre[1];
                    $Foto= $request->imagen[1];
                    return view('ganador', compact('Puntuacion','Ganador','Foto'));
                }
                else if($PuntajeJugadores[2] >=30){
                    $Puntuacion= $PuntajeJugadores[2];
                    $Ganador= $request->nombre[2];
                    $Foto= $request->imagen[2];
                    return view('ganador', compact('Puntuacion','Ganador','Foto'));
                }
            }
            else{
                $PuntajeJugadores = [$request->puntaje[0] + $pregunt->puntaje];
                if($PuntajeJugadores[0] >= 30 ){
                    $Puntuacion= $PuntajeJugadores[0];
                    $Ganador= $request->nombre[0];
                    $Foto= $request->imagen[0];
                    return view('ganador', compact('Puntuacion','Ganador','Foto'));
                }
            }
        }
        else{
            $PuntajeJugadores = $request->puntaje;
        }

        $NumJug = $request->cantjug;
        $ImgJugadores = $request->imagen;
        $NameJugadores = $request->nombre;

        $preguntas2=DB::table('preguntas')->where('tematica_id',$request->tematica)->join('tematicas','preguntas.tematica_id','tematicas.id')
                        ->join('respuestas','respuestas.preguntas_id','preguntas.id')->select('preguntas.*','tematicas.nombre','respuestas.respuestacorrecta')->get();

        $contadorP = DB::table('preguntas')->where('tematica_id',$request->tematica)->count();
//dd($contadorP);
        
        return view('JuegoView', compact('NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas2','contadorP','turno'));
        //print_r($pregunt->respuesta->respuestacorrecta);
        //$respuestasc = respuesta::all();
        //return view('JuegoView', compact('preguntas','respuestasc'));
        // return redirect()->route('Juego');
    }
    public function guardar(Request $request, $i){
        //dd($request);
        $partida= new Partidas;
        $partida->nombre1= $request->nombre[0];
        $partida->avatar1= $request->imagen[0];
        $partida->puntuacion1= $request->puntaje[0];
        $partida->tematica_id= $request->tematica;
        $partida->turno= $request->turno;
        if($i >= 2){
            $partida->nombre2= $request->nombre[1];
            $partida->avatar2= $request->imagen[1];
            $partida->puntuacion2= $request->puntaje[1];
        }
        if ($i == 3) {
            $partida->nombre3= $request->nombre[2];
            $partida->avatar3= $request->imagen[2];
            $partida->puntuacion3= $request->puntaje[2];
        }
        $partida ->save();
        $id = DB::getPdo()->lastInsertId();
        return redirect('NumPartida/'.$id);
    }
    public function numpartida($id){
        //dd($id);
        return view('NumPartida', compact('id'));
        // return redirect()->route('Juego');
    }
    public function abandonar(Request $request){
        return redirect('/');
    }

    public function recuperar(){
        $tematicas= Tematicas::all();
        return view('Recuperar', compact('tematicas'));
        // return redirect()->route('Juego');
    }
    public function recuperarpartida(Request $request){
        $tematicas= Tematicas::all();
        $partida=DB::table('partidas')->where('partidas.id',$request->id)->where('partidas.tematica_id',$request->tematica_id)->get();

        $preguntas2=DB::table('preguntas')->where('tematica_id',$request->tematica_id)->join('tematicas','preguntas.tematica_id','tematicas.id')
                        ->join('respuestas','respuestas.preguntas_id','preguntas.id')->select('preguntas.*','tematicas.nombre','respuestas.respuestacorrecta')->get();
        //dd($preguntas2);

        $contadorP = DB::table('preguntas')->where('tematica_id',$request->tematica_id)->count();
        //dd($contadorP);

        if($partida[0]->nombre2 == null){
            $NumJug = 1;
        }
        elseif($partida[0]->nombre3 == null){
            $NumJug = 2;
        }
        else{
            $NumJug = 3;
        }
       // dd($NumJug);
       if($partida[0]->turno+1 == $NumJug){
           $turno=0;
       }
       else{$turno= $partida[0]->turno+1;}

       //dd($turno);

        $NombreJu1 = $partida[0]->nombre1;
        $ImagenJu1 = $partida[0]->avatar1;
        $puntajeJugador1 = $partida[0]->puntuacion1;

        if($partida[0]->nombre2 != null){
            $NombreJu2 = $partida[0]->nombre2;
            $ImagenJu2 = $partida[0]->avatar2;
            $puntajeJugador2 = $partida[0]->puntuacion2;
//dd($ImagenJu3);

            if ($partida[0]->nombre3 != null) {
                $NombreJu3 = $partida[0]->nombre3;
                $ImagenJu3 = $partida[0]->avatar3;
                $puntajeJugador3 = $partida[0]->puntuacion3;
                $ImgJugadores = [$ImagenJu1,$ImagenJu2,$ImagenJu3];
                $NameJugadores = [$NombreJu1,$NombreJu2,$NombreJu3];
                $PuntajeJugadores = [$puntajeJugador1,$puntajeJugador2,$puntajeJugador3];
                return view('JuegoView', compact('NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas2','contadorP','turno'));
            }
            else {
                $ImgJugadores = [$ImagenJu1,$ImagenJu2];
                $NameJugadores = [$NombreJu1,$NombreJu2];
                $PuntajeJugadores = [$puntajeJugador1,$puntajeJugador2];
                return view('JuegoView', compact('NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas2','contadorP','turno'));
            }
        }
        else{
            $ImgJugadores = [$ImagenJu1];
            $NameJugadores = [$NombreJu1];
            $PuntajeJugadores = [$puntajeJugador1];
            return view('JuegoView', compact('NumJug','ImgJugadores', 'NameJugadores','PuntajeJugadores','preguntas2','contadorP','turno'));
        }

    }

}
