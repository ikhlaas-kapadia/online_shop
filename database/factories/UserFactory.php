<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'forename' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'dob' => fake()->date(),
            'country' => fake()->country(),
            'city' => fake()->city(),
            'mobile_number' => fake()->phoneNumber(),
            'street_address_line_1' => fake()->streetAddress(),
            'street_address_line_2' => fake()->address(),
            'post_code' => fake()->postcode(),
            'last_logged_in' => fake()->dateTime(),
            'ip_address' => fake()->ipv4(),
            'mac_address' => fake()->macAddress(),
            'user_agent' => fake()->userAgent(),
            'role_id' => '2',
            'email' => fake()->unique()->safeEmail(),
            'password' =>  fake()->password(),
            'remember_token' => Str::random(10),
            'created_at' => fake()->dateTime()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
