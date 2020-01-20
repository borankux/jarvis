<?php


namespace Tests\Feature\Controllers\Api;

use Tests\TestCase;

class IndexControllerTest extends TestCase
{
    public function testIndex()
    {
        $dummyRespond = [
            'page' => 'index',
            'type' => 'api'
        ];

        $res = $this->get('/api/');

        $this->assertJson($res->content());
        $res->assertStatus(200);
        $res->assertJson($dummyRespond);
    }
}
