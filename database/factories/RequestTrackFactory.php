<?php

namespace Database\Factories;

use App\Models\RequestTrack;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestTrackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RequestTrack::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => '/'
        ];
    }
}
