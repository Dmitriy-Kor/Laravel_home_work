<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_categories_list()
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }
    public function  test_show_one_category()
    {
        $id = mt_rand(0, 5);
        $response = $this->get('/categories/show/' . $id);

        $response->assertStatus(200);
    }
}
