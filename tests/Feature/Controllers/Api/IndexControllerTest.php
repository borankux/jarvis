<?php


namespace Tests\Feature\Controllers\Api;

use Tests\TestCase;

class IndexControllerTest extends TestCase
{
    public function testIndex()
    {
        $dummyRespond = [
            'version' => '1.0',
        ];

        $res = $this->get('/');

        $this->assertJson($res->content());
        $res->assertStatus(200);
        $res->assertJson($dummyRespond);
    }
}
