<?php

namespace App\Rules;

use Domain\Race\Race;
use Domain\Runner\Runner;
use Illuminate\Contracts\Validation\Rule;

class RaceSameTimes implements Rule
{
    protected $parameters;

    /**
     * Create a new rule instance.
     *
     * @param $parameters
     */
    public function __construct($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $runner = Runner::where('cpf', 'like', $this->parameters)->with('races')->first();
        $tryRace = Race::find($value);

        if (isset($runner->races)) {
            foreach ($runner->races as $race) {
                if ($race->starts_at === $tryRace->starts_at)
                    return false;
            }
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O corredor já está cadasrtado em uma corrida nessa data.';
    }
}
