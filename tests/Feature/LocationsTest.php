<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LocationsTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCheckIn()
    {
        $data = [
            'latitude' => 123.456,
            'longitude' => 456.789,
            'address' => 'test address'
        ];

        $response = $this->json('POST', '/api/locations', $data);
        $response->assertStatus(200);

        $this->assertDatabaseHas('locations', $data);
    }
}
