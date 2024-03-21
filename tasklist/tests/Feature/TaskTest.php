<?php

namespace Tests\Feature;

use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_home_page(): void
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200);

        $response->assertViewIs('index');
    }
}
