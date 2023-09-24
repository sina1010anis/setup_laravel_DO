<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elasticsearch\ConnectionElasticsearch as Elastic;

class IndexController extends Controller
{
    public function index(Elastic $elastic)
    {




        // $params = [
        //     'body' => [
        //         'title' => 'this is Elasticsearch',
        //         'body' => 'this is Elasticsearch Body In page',
        //         'view' => 56,
        //     ],
        //     'index' => 'my_test',
        //     'type' => 'my_test',
        // ];
        // $res = $elastic->connctionIndex($params);
        // dd($res);

        $params_created = [
            'index' => 'my_test',
            'body'  => [
                'brand' => 'BMW',
                'model' => '730i',
                'location' => 'Deutschland',
                'price' => 10500
            ],
        ];

        $params_search = [
            'index' => 'my_test',
            // 'body' => [
            //     'query' => [
            //         'match' => [
            //             'brand' => 'BMW'
            //         ]
            //     ]
            // ]
        ];
        //$res = $elastic->connctionIndex($params_created);
        $res = $elastic->connctionSearch($params_search, true);
        //dd($res[0]);
        foreach ($res as $source) {
            foreach ($source['_source'] as $val) {
                echo $val.'<br>';
            }
            echo '<hr>';
        }
        //dd($res[0]['_source']['brand']);

        // $client = ClientBuilder::create()
        //     ->setBasicAuthentication('elastic', 'sina1010anis');
        //     //->setHosts(['localhost:9200'])

        // // Info API
        // $response = $client->build()->info();

        // dd($client->build()->info()['version']['number']);
        // $key = 'c06747f730544a3babf2ec828e7348b2';
        // //dd(Http::post('http://localhost:9200/', ['username' => 'elastic', 'password' => 'sina1010anis']));

        // $client = ClientBuilder::create()->setBasicAuthentication('elastic', 'sina1010anis')->build();
        // //$client = ClientBuilder::create()->build();
        // $parms = [
        //     'body' => [
        //         'title' => 'test elasticsearch',
        //         'price' => 'Free',
        //         'location' => 'Iran',
        //     ],
        //     'index' => 'mysite',
        //     'type' => 'mysite',
        // ];
        // $res = $client->info();
        // $client->index($parms);
        // Info API
        //dd($res);
        //return 'Hello World...!';

    }
}
