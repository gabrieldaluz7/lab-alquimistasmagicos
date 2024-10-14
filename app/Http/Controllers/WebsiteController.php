<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Culturas;
use App\Models\Strains; 


class WebsiteController extends Controller
{

    public function index() { 
        if (session()->has('user')) {
            return redirect()->route('dashboard');
        }
        return redirect()->route('login');
    }

    public function dashboard()
    {
        

        return view('dashboard');
    }

    

    public function strains(Request $request) { 

        // Busca as culturas com a strain associada
        $strains = Strains::get();

        return view('strains', compact('strains'));

    }

    public function culturas(Request $request)
    {
       
        // Obtém o valor do parâmetro GET 'strainSigla'
        $strainGenetica = $request->input('strainSigla');

        // Busca as culturas com base na strain (genética) associada
        $query = Culturas::with('strain') // Carrega a relação 'strain'
        ->join('strains', 'culturas.idStrains', '=', 'strains.id') // Faz o join com a tabela 'strains'
        ->select('culturas.*'); // Seleciona apenas as colunas da tabela 'culturas'

        // Aplica o filtro apenas se o parâmetro 'strain' for passado na requisição
        if ($strainGenetica) {
            $query->where('strains.sigla', '=', $strainGenetica); // Filtra pela genética da strain
        } 

        $query->where('cultura_id', '=', '0');

        // Ordena pela coluna 'genetica' da strain
        $culturas = $query->orderBy('strains.nome', 'asc')->get();

        // Retorna a view com os resultados
        return view('culturas', compact('culturas'));


    }


    public function cultura($idCultura = null) { 
        $cultura = Culturas::findOrFail($idCultura);
        $culturas = Culturas::where('cultura_id', $cultura->id)->orderBy('id', 'asc')->get();

        return view('cultura', ['cultura' => $cultura, 'culturas' => $culturas]);
    }

}
