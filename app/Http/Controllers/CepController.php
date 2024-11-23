<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\CepSearchRequest;


class CepController extends Controller
{
    private $apiCep;

    public function __construct() {
        $this->apiCep = env('PREFIX_API_CEP');
    }

    public function index()
    {
        return view('Cep.Search');
    }

    public function search(CepSearchRequest $request)
    {
        $findCep = [];
        $error   = '';

        try {
            $cep        = $request->validated();
            $cepReplace = preg_replace('/\D/', '', $cep['cep']);

            if (strlen($cepReplace) !== 8) {
                $error = "O CEP deve conter 8 números.";
                throw new Exception("Error Processing Request", 1);
            }

            $findCep = Http::get($this->apiCep.$cep['cep']."/json")->json();   
            
            if(isset($findCep['erro'])){
                $error = "Nenhum resultado encontrado.";
                throw new Exception("Error Processing Request", 2);
            }

            return response($findCep, 200);
        
        } catch (\Throwable $th) {
            return response()->json([
                  'success' => false
                , 'message' => $error ?? $th->getMessage()
            ], 400);        
        }
    }

}
