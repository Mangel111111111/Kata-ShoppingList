<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfProductInJsonFile(){
        $product = Product::factory(2)->create();

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)
                ->assertJsonCount(2);
    }

    public function test_CheckIfProductIsCreated(){
        $response = $this->post(route('apistore'), [
            'ProductName' => 'Product 1',
        ]);

        $response->assertStatus(200)
                ->assertJson([
                    'ProductName' => 'Product 1',
                ]);
    }

    public function test_CheckIfProductIsUpdated(){
        $product = Product::factory()->create();

        $response = $this->put(route('apiupdate', $product->id), [
            'ProductName' => 'Product 2',
        ]);

        $response->assertStatus(200)
                ->assertJson([
                    'ProductName' => 'Product 2',
                ]);
    }

    public function test_CheckIfProductIsDeleted(){
        $product = Product::factory()->create();

        $response = $this->delete(route('apidestroy', $product->id));

        $response->assertStatus(200)
                ->assertJson([
                    'ProductName' => $product->ProductName,
                ]);
    }
}
