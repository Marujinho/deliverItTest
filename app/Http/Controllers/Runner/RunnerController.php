<?php

namespace App\Http\Controllers\Runner;

use App\Http\Controllers\Controller;

use App\Http\Requests\RunnerRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Domain\Runner\Runner;

class RunnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $races = [
            0 => 'Selecione sua corrida',
            1 => 'Corre de verdade',
            2 => 'Corre de verdade',
            3 => 'Corre de verdade'
        ];

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
        $runner = Runner::where('cpf', 'like', $request->cpf)->first();

        if (!$runner) {
            $runner = new Runner;
            $runner->name = $request->name;
            $runner->cpf = $request->cpf;
            $runner->born_at = Carbon::createFromFormat('d/m/Y', $request->born_at)->toDateTimeString();
            $runner->save();
        }

        $runner->races()->attach($request->race);

        return redirect(route('runner.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Runner $runner
     * @return \Illuminate\Http\Response
     */
    public function show(Runner $runner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Runner $runner
     * @return \Illuminate\Http\Response
     */
    public function edit(Runner $runner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Runner $runner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Runner $runner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Runner $runner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Runner $runner)
    {
        //
    }
}
