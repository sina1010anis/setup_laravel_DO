<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Elasticsearch\ConnectionElasticsearch as Elastic;
use App\Models\Product;
use Illuminate\Support\Benchmark;
use Rubix\ML\Classifiers\KNearestNeighbors;
use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Kernels\Distance\Minkowski;
 class IndexController extends Controller
{
    public function test2()
    {
        // $id_pay = new IDPay(['order_id' => 101, 'id' => '902a4d3be8b37ad295d75fef9f7beacb']);
        // return $id_pay->sendPay();
    }
    public function test()
    {

        // $params_pay_ir = ['api' => 'YOUR-API-KEY', 'amount' => 98000, 'redirect' => 'http://localhost:8000/test-2', 'token' => 987556];
        // $params_id_pay = [
        // // $id_pay = new IDPayAdapter($params_id_pay);
        // // return $id_pay->payment();

        // $factory_payment = Payment::factory('idpay', $params_id_pay);
        // dd($factory_payment-'order_id' => 101, 'amount' => 98000, 'desc' => 'توضیحات پرداخت', 'callback' => 'http://localhost:8000/test-2'];>payment());
        $samples = [
            [4, 3, 44.2],
            [2, 2, 16.7],
            [2, 4, 19.5],
            [3, 3, 55.0],
        ];
        $labels = ['married', 'divorced', 'married', 'divorced'];

        $dataset = new Labeled($samples, $labels);
        $estimator = new KNearestNeighbors(10, false, new Minkowski(2.5));

        dd($estimator->trained());

    }
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
        //$res = $elastic->connectionWhereOne([['name' => $request->txt]], 'products', 5000)->connctionSearch(true, true);
        $res = Product::where('name', 'LIKE', '%'.$request->txt.'%')->get();
        return response()->json($res, 200);



    }

    public function count(Elastic $elastic)
    {
        Benchmark::dd([
            'Elasticesearch' => fn()=> $elastic->connectionWhereOne([['name' => 'dr.']], 'products', 5000)->connctionSearch(true, true),
            'Mysql' => fn()=> Product::where('name', 'LIKE', 'dr.'.'%')->get()
        ]);
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
