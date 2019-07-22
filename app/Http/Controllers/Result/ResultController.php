<?php

namespace App\Http\Controllers\Result;

use App\Http\Controllers\Controller;
use Domain\Result\Result;
use Illuminate\Http\Request;
use Domain\Race\RaceRepository;
use Domain\Runner\RunnerRepository;

class ResultController extends Controller
{
    protected $runner;
    protected $race;


    public function __construct(RunnerRepository $runner, RaceRepository $race)
    {
        $this->race = $race;
        $this->runner = $runner;

    }

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
        $runners = $this->runner->getRunners();
        $runners = $this->runner->prepareForSelect($runners);
        $races = $this->race->getRaces();
        $races = $this->race->prepareForSelect($races);

        return view('result.create', [
          'races' => $races,
          'runners' => $runners
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
