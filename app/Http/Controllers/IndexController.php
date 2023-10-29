<?php

namespace App\Http\Controllers;

use App\Pattern\Adapter\Core\SMSMessageAdpter;
use App\Pattern\Bridge\Core\BMW;
use App\Pattern\Bridge\Core\Red;
use App\Pattern\Builder\Core\BuyProduct;
use App\Pattern\Builder\Core\BuyProductUser;
use App\Pattern\ConnectPayment\Connect\IDPay\Core\IDPay;
use App\Pattern\ConnectPayment\Connect\PayIr\Core\PayIr;
use App\Pattern\P1\Core\Builder\Core\MysqlBuild;
use App\Pattern\P1\Core\Factory\Core\ConncetionDB;
use App\Pattern\Prototype\Core\CarRead;
use App\Pattern\SimpelFactory\Core\FactoryDB;
use Illuminate\Http\Request;
use App\Elasticsearch\ConnectionElasticsearch as Elastic;
use App\Models\Product;
use App\Pattern\AbstractFactory\Core\ElasticDB;
use App\Pattern\AbstractFactory\Core\MongoDB;
use App\Pattern\AbstractFactory\Core\MysqlDB;
use App\Pattern\Adapter\Core\EmailMessageAdpter;
use App\Pattern\Bridge\Core\Benz;
use App\Pattern\Bridge\Core\Green;
use App\Pattern\Builder\Core\ConnectionDBBuilder;
use App\Pattern\Builder\Core\ProductBuy;
use App\Pattern\Builder\Database\MongoDB as DatabaseMongoDB;
use App\Pattern\Builder\Database\MysqlDB as DatabaseMysqlDB;
use App\Pattern\Composite\Core\DownMenu;
use App\Pattern\Composite\Core\TopMenu;
use App\Pattern\ConnectPayment\Payment\Core\IDPayAdapter;
use App\Pattern\ConnectPayment\Payment\Core\PayIrAdapter;
use App\Pattern\ConnectPayment\Payment\Core\Payment;
use App\Pattern\FactoryMethod\Core\FactoryConnect;
use App\Pattern\FactoryMethod\Core\MongoDBConnection;
use App\Pattern\FactoryMethod\Core\MysqlConnection;
use App\Pattern\P1\Core\Abs\Core\MysqlAbs;
use App\Pattern\P1\Core\Builder\Core\MongoDBBuild;
use App\Pattern\Singelton\Core\MysqlConnection as CoreMysqlConnection;
use App\Pattern\StaticFactory\Core\StaticFactory;
use Database\Factories\UserFactory;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Http;
use Spatie\Sitemap\SitemapGenerator;
 class IndexController extends Controller
{
    public function test2()
    {
        // $id_pay = new IDPay(['order_id' => 101, 'id' => '902a4d3be8b37ad295d75fef9f7beacb']);
        // return $id_pay->sendPay();
    }
    public function test()
    {
        $params_pay_ir = ['api' => 'YOUR-API-KEY', 'amount' => 98000, 'redirect' => 'http://localhost:8000/test-2', 'token' => 987556];
        $params_id_pay = ['order_id' => 101, 'amount' => 98000, 'desc' => 'توضیحات پرداخت', 'callback' => 'http://localhost:8000/test-2'];

        // $id_pay = new IDPayAdapter($params_id_pay);
        // return $id_pay->payment();

        $factory_payment = Payment::factory('idpay', $params_id_pay);
        dd($factory_payment->payment());


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

    public function absf (MysqlDB $mysqlDB, MongoDB $mongoDB, ElasticDB $elasticDB)
    {
        dd($mysqlDB->createUpdate()->Sub());
    }

    public function builder()
    {
        // $connection = new ConnectionDBBuilder();
        // $connection->build(new DatabaseMongoDB());
        $buy_product = new ProductBuy();
        $product = new BuyProduct();
        return $buy_product->userVip($product);
    }
    public function factory (FactoryConnect $factoryConnect, MysqlConnection $mongoDBConnection)
    {
        return $factoryConnect->run($mongoDBConnection);
    }

    public function prototype ()
    {
        $car_1 = new CarRead('BMW', 'red', 6500);
        var_dump($car_1->getModel().'<br>');
        $car_1->setModel('Benz');
        var_dump($car_1->getModel().'<br>');
        $car_2 = clone $car_1;
        var_dump($car_2->getPrice().'<br>');
        $car_1->setModel('BMW');
        $car_2_copy = clone $car_1;
        var_dump('car_2_copy => '.$car_2_copy->getModel().'<br>');
    }

    public function p1 ()
    {
        $databse = new ConncetionDB('users', 'id = 5', 8);
        $mysql = $databse->create('mongodb');
        dump($mysql->buildDelete());
        dump($mysql::class);
        $databse_2 = clone $databse;
    }

    public function sitemap ()
    {
        SitemapGenerator::create('https://www.digikala.com/')->writeToFile(public_path('/map/'.time().'.xml'));
    }

    public function simpelfactory ()
    {
        $simpel_fatory = new FactoryDB();
        $mysql = $simpel_fatory->factory('Mysql');
        echo $mysql->connection();
    }

    public function singelton ()
    {
        $connection  = CoreMysqlConnection::setupIns();
        $connection->count();
        $connection_2  = CoreMysqlConnection::setupIns();
        echo($connection_2->getCountNumber());
    }

    public function staticfactory ()
    {
        //dd(UserFactory::new()->make());
        return StaticFactory::factory('BMW')->model();
    }

    public function adapter()
    {
        $snederSMS = new SMSMessageAdpter('09395231890', 'hi...!(SMS)');
        $snederEmail = new EmailMessageAdpter('sina1010anis@gmail.com', 'hi...!(Email)');
        dump($snederSMS->send());
        dump($snederEmail->send());
    }

    public function bridge()
    {
        $bmw_red = new BMW(new Red());
        $bmw_green = new BMW(new Green());
        $benz_red = new Benz(new Red());
        $benz_green = new Benz(new Green());
        dump($bmw_red->setupColor());
        dump($bmw_green->setupColor());
        dump($benz_red->setupColor());
        dump($benz_green->setupColor());
    }
    public function composite()
    {
        $menu = new TopMenu();
        $menu->addItem(new DownMenu('Mobile'));
        $menu->addItem(new DownMenu('Laptop'));
        $menu->addItem(new DownMenu('Watch'));
        dump($menu->show());
        $menu = new TopMenu();
        $menu->addItem(new DownMenu('Table'));
        $menu->addItem(new DownMenu('Canape'));
        $menu->addItem(new DownMenu('TV'));
        dump($menu->show());
    }
}
