<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tenant>
 */
class TenantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Tenant::class;
    public function definition(): array
    {
        $name = $this->faker->company;
        return  [
            'name' => $name,
            'subdomain' => strtolower(str_replace(' ', '', $name)),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
