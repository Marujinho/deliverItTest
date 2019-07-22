<?php

namespace Domain\Runner;

use Illuminate\Http\Request;
use Carbon\Carbon;

class RunnerRepository
{
    protected $model;

    /**
     * RunnerRepository constructor.
     * @param \Domain\Runner\Runner $model
     */
    public function __construct(Runner $model)
    {
        $this->model = $model;
    }

    public function storeRunner($request)
    {
        $runner = new Runner;
        $runner->name = $request->name;
        $runner->cpf = $request->cpf;
        $runner->born_at = Carbon::createFromFormat('d/m/Y', $request->born_at)->toDateTimeString();
        $runner->save();

        return $runner;
    }

    public function getRunners()
    {
        return $this->model->get();
    }

    public function prepareForSelect($runners)
    {
      $filtered = $runners->mapWithKeys(function ($item) {
          return [$item['id'] => $item['name']];
      });

      return $filtered;
    }
}
