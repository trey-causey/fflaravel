<?php

namespace Tests\Feature\Http\Controllers;

use App\Http\Controllers\DraftController;
use PHPUnit\Framework\TestCase;
use Goutte\Client;

class DraftControllerTest extends TestCase
{

    public function testShowAvailableDrivers()
    {

    }

    public function testDraft_HasLi()
    {
        $client = new Client();
        $reponse = $client->request('GET', 'http://fflaravel.test');
        $this->assertCount(8, $reponse->filter('li'));
    }
}
