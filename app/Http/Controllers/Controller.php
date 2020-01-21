<?php

namespace App\Http\Controllers;

use App\Imoveis;
use App\Properties;
use App\Property;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Hash;

Builder::macro('if', function ($condition, $column, $operator, $value) {
    if ($condition) {
		return $this->where($column, $operator, $value);
	}
	return $this;
});

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Notifiable;

    public function listarImoveis(){
        $properties = Properties::all();

        return view('website/home/home', [
            'properties' => $properties
        ]);
    }

    public function imovelId($id){

        $imovelId = Properties::find($id);
        return view('website/dados/dados', [
            'imoveis' => $imovelId
        ]);
    }

    public function inserirUser(){
        $user = new User();
        $user->name = 'Rafael';
        $user->email = 'rafael@teste.com';
        $user->password = Hash::make('123456');
        $user->save();
    }

    public function busca(Request $request)
    {
        $buscas = $request->search;
        
        $consulta = Properties::where('tipo', 'LIKE', '%'.$buscas.'%')
        ->orWhere('negociacao', 'like', '%'.$buscas.'%')
        ->orWhere('endereco', 'like', '%'.$buscas.'%')
        ->orWhere('estado', 'like', '%'.$buscas.'%')
        ->get();

        if(count($consulta) == 0){
            return view('website/filtro/consultaFail',[
                'results' => 'nao encontrado'
            ]);
        }else{
            return view('website.filtro.consulta', [
                'buscas' => $consulta,
                'search' => $buscas
            ]);
        }
     
          
    }

    public function buscaFiltroAvancado(Request $request){
        $buscas = 'aki';
        
        $consulta = Properties::if($request->button_ba_1, 'banheiros','=', $request->button_ba_1)
        ->if($request->button_ba_2, 'banheiros','=', $request->button_ba_2)
        ->if(@$request->minimo, 'valor_tot', '>=',@$request->minimo)
        ->if(@$request->maximo, 'valor_tot', '<=',@$request->maximo)
        ->get();

        return view('website.filtro.consulta', [
            'buscas' => $consulta,
            'search' => $buscas
        ]);
    }
    

    public function consulta(){
       
    }
}
