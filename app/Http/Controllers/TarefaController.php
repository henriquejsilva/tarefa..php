<?php

namespace App\Http\Controllers;

use App\Service\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
   protected $tarefaService;
   public function __construct(TarefaService $tarefaService)
   {
    $tarefa= $this->tarefaService = $tarefaService;

   }
    public function store(Request $request){
        $tarefa= $this -> tarefaService->create($request->all());

        return response()->json($tarefa);
    }

    public function findById($id){
        $result = $this->tarefaService->findById($id);

        return response()->json($result);
    }

    public function index(){
        $result = $this->tarefaService->getAll();

        return response()->json($result);
    }
}
