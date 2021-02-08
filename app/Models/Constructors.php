<?php namespace App\Models;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class Constructors extends Model
{
    protected $table = 'constructors';
    protected $guarded = [];

    public function getConstructorsResults()
    {
        $client = new Client(['base_uri' => 'https://ergast.com/api/f1/']);
        $request = $client->get('constructors');
        return json_encode($request->getBody());
        /*try {
            $promise = $client->requestAsync('GET', 'constructors');
        } catch (GuzzleException $e) {
            print $e->getMessage();
        }
        $promise->then(
          function (Psr7\Response $res) {
              echo $res->getStatusCode();
              echo $res->getBody();
              },
          function (RequestException $re) {
              echo $re->getMessage();
          }
        );
        return $promise;*/


    }
}
