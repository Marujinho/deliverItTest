<?php

namespace App\Http\Controllers\Race;
use App\Http\Controllers\Controller;

use Domain\Race\RaceRepository;
use Illuminate\Http\Request;
use App\Http\Requests\RaceRequest;
use Carbon\Carbon;

class RaceController extends Controller
{
    protected $race;

    public function __construct(RaceRepository $race)
    {
        $this->race = $race;
    }

    public function create()
    {

        return view('race.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RaceRequest $request)
    {
        $this->race->storeRace($request);

        return redirect()->route('race.create')->with('success', 'Corrida criada com sucesso!');

    }


}
