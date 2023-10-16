<?php

namespace App\Http\Controllers;

use Database\Factories\ProductFactory;
use Illuminate\Http\Request;
use Elastic\Elasticsearch\ClientBuilder;
use App\Elasticsearch\ConnectionElasticsearch as Elastic;
use App\Models\Product;
use Elastic\Elasticsearch\Client;

class IndexController extends Controller
{
    public function index(Request $request ,Elastic $elastic)
    {
        //$elastic->connctionIndex('my_test', ['brand' => 'KMC', 'model' => 'J7', 'price' => 9870]);
        // for ($i = 0; $i <= 100 ; $i++) {
        // }
        // for ($i = 0 ; $i <= 100 ; $i++) {
        //     $elastic->connctionIndex('products', ['name' => fake()->name, 'price' => fake()->numerify]);
        // }
        // $res = $elastic->connectionWhere([], 'products')->connctionSearch(true, true);
        // dd($res);

        // Update doc at /my_index/_doc/my_id
        //$elastic->connectionUpdate('my_test', 'k8lDzYoBIXxiJTtJNurl', ['brand' => 'KMC', 'model' => 'J7 pro']);
        //$elastic->connectionDelete('my_test', 'Mb8nyIoB4xkBd1YQzcIU');
        //$res = $elastic->connectionWhere([['brand' => 'Benz']], 'my_test')->connctionSearch(true);
        // dump($response['hint']['hint']);

        //---------------------------------------

        $res = $elastic->connectionWhere([], 'products', 5000)->connctionSearch(true, true);
        //$res = Product::get();
        //dd($res);
        return view('welcome', ['datas' => $res]);



    }

    public function count()
    {
        $val = 'sina';
        $temp_len = strlen($val)-1;
        for ($i = 0 ; $i <= strlen($val)-1 ; $i++) {

            if($i++ == $temp_len){
                break;
            }else{
                $temp = $val[$i];
                $val[$i] = $val[$temp_len];
                $val[$temp_len] = $val[$temp];
                $temp_len--;
            }

        }

        dd($val);

        // function set($n = 1){
            //Count 1,3,5,7,9,...
        //     $count = 142;
        //     if ($n < $count) {
        //         echo $n.',';
        //         $n = $n + 2;
        //         set($n);
        //     }
        // }

        // set();

    }
}
