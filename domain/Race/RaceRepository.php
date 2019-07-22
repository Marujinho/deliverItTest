<?php

namespace Domain\Race;

use Illuminate\Http\Request;
use Carbon\Carbon;


class RaceRepository
{
    protected $model;

    /**
     * RunnerRepository constructor.
     * @param \Domain\Race\Race $model
     */
    public function __construct(Race $model)
    {
        $this->model = $model;
    }

    public function storeRace($request)
    {
        $race = new Race;
        $race->type = $request->type;
        $race->starts_at = Carbon::createFromFormat('d/m/Y', $request->starts_at)->format('Y-m-d');
        $race->save();

        return $race;
    }

    public function getRaces()
    {
        return $this->model->get();
    }

    public function prepareForSelect($races)
    {
          $filtered = $races->mapWithKeys(function ($item) {
          $starts_at = str_replace('-', '/', $item['starts_at']);

          $typeAndDate = 'Categoria de '.$item['type'].'KM  e será na data: '.Carbon::parse($starts_at)->format('M d, Y');

          return [$item['id'] => $typeAndDate];
      });

      return $filtered;
    }
}
