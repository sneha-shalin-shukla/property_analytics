<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\PropertyAnalytics;

class PropertyAnalyticsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function test_can_create_property_analytics() {
        
        $data = [
            'property_id' => '1',
            'analytic_type_id' => '1',
            'value' => '100',
        ];

        $this->post('api/v1/property_analytics', $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_can_update_property_analytics() {
        //$guid = '047d9128-68c8-46c1-ab28-c33baa3d3030';
        $property_analytics = factory(PropertyAnalytics::class)->create();

        $data = [
            'suburb' => 'Ashfield',
        ];

        $this->put('api/v1/property_analytics/'.$property_analytics->id, $data)
            ->assertStatus(200)
            ->assertJson($data);
    }

    public function test_can_show_property_analytics() {

        $property_analytics = factory(PropertyAnalytics::class)->create();

        $this->get('api/v1/property_analytics/'.$property_analytics->id)
            ->assertStatus(200);
    }

    public function test_can_delete_property_analytics() {

        $property_analytics = factory(PropertyAnalytics::class)->create();

        $this->delete('api/v1/property_analytics/'.$property_analytics->id)
            ->assertStatus(204);
    }

    public function test_can_list_properties() {
        $properties = factory(PropertyAnalytics::class, 2)->create()->map(function ($property_analytics) {
            return $property_analytics->only(['property_id', 'analytic_type_id', 'value']);
        });

        $this->get('api/v1/property_analytics/')
            ->assertStatus(200)
            ->assertJson($properties->toArray())
            ->assertJsonStructure([
                '*' => [ 'property_id', 'analytic_type_id', 'value' ],
            ]);
    }
}
