<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Elastic\Elasticsearch\ClientBuilder;
use App\Elasticsearch\ConnectionElasticsearch as Elastic;
use Elastic\Elasticsearch\Client;

class IndexController extends Controller
{
    public function index(Elastic $elastic)
    {
        //$elastic->connctionIndex('my_test', ['brand' => 'KMC', 'model' => 'J7', 'price' => 9870]);
        //$elastic->connctionIndex('my_test', ['brand' => 'KMC', 'model' => 'J7', 'price' => 9870]);

        // Update doc at /my_index/_doc/my_id
        //$elastic->connectionUpdate('my_test', 'k8lDzYoBIXxiJTtJNurl', ['brand' => 'KMC', 'model' => 'J7 pro']);
        //$elastic->connectionDelete('my_test', 'Mb8nyIoB4xkBd1YQzcIU');
        //$res = $elastic->connectionWhere([['brand' => 'Benz']], 'my_test')->connctionSearch(true);
        $res = $elastic->connectionGet('my_test', 'Nr8pyIoB4xkBd1YQcsJi');
        dd($res);
        // dump($response['hint']['hint']);

    }
}
