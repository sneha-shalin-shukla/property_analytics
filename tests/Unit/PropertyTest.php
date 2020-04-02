<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Property;

class PropertyTest extends TestCase
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

    public function test_can_create_property() {
        
        $data = [
            'suburb' => 'Ashfield',
            'state' => 'NSW',
            'country' => 'Australia',
        ];

        $this->post('api/v1/properties', $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_can_update_property() {
        //$guid = '047d9128-68c8-46c1-ab28-c33baa3d3030';
        $property = factory(Property::class)->create();

        $data = [
            'suburb' => 'Ashfield',
        ];

        $this->put('api/v1/properties/'.$property->guid, $data)
            ->assertStatus(200)
            ->assertJson($data);
    }

    public function test_can_show_property() {

        $property = factory(Property::class)->create();

        $this->get('api/v1/properties/'.$property->guid)
            ->assertStatus(200);
    }

    public function test_can_delete_property() {

        $property = factory(Property::class)->create();

        $this->delete('api/v1/properties/'.$property->guid)
            ->assertStatus(204);
    }

    public function test_can_list_properties() {
        $properties = factory(Property::class, 2)->create()->map(function ($property) {
            return $property->only(['suburb', 'state', 'country']);
        });

        $this->get('api/v1/properties/')
            ->assertStatus(200)
            ->assertJson($properties->toArray())
            ->assertJsonStructure([
                '*' => [ 'suburb', 'state', 'country' ],
            ]);
    }
}
