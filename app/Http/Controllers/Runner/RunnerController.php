<?php

namespace App\Http\Controllers\Runner;

use App\Http\Controllers\Controller;

use App\Http\Requests\RunnerRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Domain\Runner\Runner;
use Domain\Runner\RunnerRepository;
use Domain\Race\RaceRepository;

class RunnerController extends Controller
{
    protected $runner;
    protected $race;

    public function __construct(RunnerRepository $runner, RaceRepository $race)
    {
        $this->runner = $runner;
        $this->race = $race;
    }

    public function create()
    {
        $races = $this->race->getRaces();
        $races = $this->race->prepareForSelect($races);

        return view('runner.create', [
            'races' => $races
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param RunnerRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(RunnerRequest $request)
    {
        //Verifica se ja existe esse corredor no banco
        $runner = Runner::where('cpf', 'like', $request->cpf)->first();
        
        //Se esse corredor nao existe ele cria um novo
        if (!$runner) {
           $runner = $this->runner->storeRunner($request);
        }

        //liga os corredores as provas
        $runner->races()->attach($request->race);

        return redirect()->route('runner.create')->with('success', 'Corredor cadastrado na corrida selecionada com sucesso');
    }

}
