<?php

namespace App\Http\Controllers;

use App\Pattern\Adapter\Core\SMSMessageAdpter;
use App\Pattern\Bridge\Core\BMW;
use App\Pattern\Bridge\Core\Red;
use App\Pattern\Builder\Core\BuyProduct;
use App\Pattern\Chain_2\Core\IsAdmin;
use App\Pattern\Chain_2\Core\NumberProductMin;
use App\Pattern\Command\Core\Laptop;
use App\Pattern\Command\Core\ShutdownLaptop;
use App\Pattern\Composite\Core\DownMenu;
use App\Pattern\Composite\Core\TopMenu;
use App\Pattern\Decorator\Core\Food_1;
use App\Pattern\Decorator\Core\Option\ChizFood;
use App\Pattern\DependencyInjection\Core\ConfigDatabase;
use App\Pattern\Facade\Core\FacadeChangePrice;
use App\Pattern\Flyweight\Core\FlyweightProduct;
use App\Pattern\P1\Core\Factory\Core\ConncetionDB;
use App\Pattern\Prototype\Core\CarRead;
use App\Pattern\Proxy\Core\ClinetBanProxy;
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
use App\Pattern\Builder\Core\ProductBuy;
use App\Pattern\Chain\Core\BuyProductFacade;
use App\Pattern\Chain\Core\CheckLoginUser;
use App\Pattern\Chain\Core\NumberProducts;
use App\Pattern\Chain\Core\PriceProduct;
use App\Pattern\Chain_2\Core\AuthUserMin;
use App\Pattern\Chain_2\Core\ChackChain;
use App\Pattern\Chain_2\Core\FactorCheck;
use App\Pattern\ChainTest\Core\AlarmOff;
use App\Pattern\ChainTest\Core\HomeStatus;
use App\Pattern\ChainTest\Core\LightsOff;
use App\Pattern\ChainTest\Core\Locks;
use App\Pattern\Command\Core\InvoiderClass;
use App\Pattern\Command\Core\Mobile;
use App\Pattern\Command\Core\PC;
use App\Pattern\Command\Core\ShutdownMobile;
use App\Pattern\Command\Core\ShutdownPC;
use App\Pattern\ConnectPayment\Payment\Core\Payment;
use App\Pattern\Decorator\Core\Option\BigFood;
use App\Pattern\DependencyInjection\Core\ConnectDatabase;
use App\Pattern\FactoryMethod\Core\FactoryConnect;
use App\Pattern\FactoryMethod\Core\MysqlConnection;
use App\Pattern\Iteretor\Core\ProductList;
use App\Pattern\Iteretor\Core\Products;
use App\Pattern\Singelton\Core\MysqlConnection as CoreMysqlConnection;
use App\Pattern\StaticFactory\Core\StaticFactory;
use Illuminate\Support\Benchmark;
use Illuminate\Support\Facades\Log;
use Rubix\ML\Classifiers\KNearestNeighbors;
use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Datasets\Unlabeled;
use Rubix\ML\Kernels\Distance\Minkowski;
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
        $menu_1 = new TopMenu('Mobile');
        $menu_1->addMenu(new DownMenu('Samsung'));
        $menu_1->addMenu(new DownMenu('Iphone'));
        $menu_1->addMenu(new DownMenu('LG'));
        $menu_1->addMenu(new DownMenu('Song'));

        $menu_2 = new TopMenu('Laptop');
        $menu_2->addMenu(new DownMenu('Asus'));
        $menu_2->addMenu(new DownMenu('Lenovo'));
        $menu_2->addMenu(new DownMenu('HP'));
        $menu_2->addMenu(new DownMenu('Microsoft'));

        $menu = new TopMenu('Digital');
        $menu->addMenu($menu_1);
        $menu->addMenu($menu_2);

        return $menu->show();
    }

    public function decorator()
    {
        // $buy_product_1 = new Product_1();
        // echo (new BoxProduct(new BoxProduct(new GardProduct(new GardProduct($buy_product_1)))))->buyProductInViewPrice();

        $food_order = new Food_1();
        echo (new ChizFood(new BigFood(new ChizFood(new BigFood(new BigFood($food_order))))))->nameFood();
    }

    public function dependencyInjection()
    {
        $config_database = new ConfigDatabase('root', 'password', 'shop', '127.0.0.1');
        $connect_database = new ConnectDatabase($config_database);
        echo $connect_database->connect();
    }

    public function facade()
    {
        $change_to = new FacadeChangePrice();
        $change_ir = clone $change_to;

        echo '<pre>';
        print_r( $change_to->setTO());
        echo '</pre>';
        echo '<pre>';
        print_r( $change_ir->setIR());
        echo '</pre>';
    }

    public function flyweight()
    {
        $name_products = ['M Samsung s22', 'L Surface laptop 5 ', 'M Iphone 15', 'L Hp Omen 16.1'];
        $flyweight = new FlyweightProduct();
        for ($i = 0 ; $i <= 10 ; $i++) {
            foreach ($name_products as $name_product) {
                $fly = $flyweight->sreachClass($name_product);
                echo $fly->getName($name_product);
            }
        }

        dd($flyweight->getForIf());
    }

    public function proxy ()
    {
        $clinet_ban = new ClinetBanProxy();
        echo $clinet_ban->ban(true);
    }

    public function chain ()
    {
        ////////////////////// Normal Use Pattern Chain of responsibility ////////////////////
        $login = new CheckLoginUser();
        $number = new NumberProducts();
        $price = new PriceProduct();
        $login->setTempNextClass($number);
        $number->setTempNextClass($price);
        $login->checkInClass();

        ////////////////////// In Facade Pattern Use Pattern Chain of responsibility ////////////////////
        //BuyProductFacade::facade();

        ////////////////////// Test 2 Use Pattern Chain of responsibility ////////////////////
        // $chain = new ChackChain();
        // return $chain->addMin(new AuthUserMin())->addMin(new FactorCheck())->addMin(new IsAdmin())->addMin(new NumberProductMin())->check();
    }

    public function command()
    {
        $res_1 = new Laptop();
        $res_2 = new Mobile();
        $res_3 = new PC();

        $shutdown_laptop = new ShutdownLaptop($res_1);
        $shutdown_mobile = new ShutdownMobile($res_2);
        $shutdown_pc = new ShutdownPC($res_3);

        $invoider = new InvoiderClass();

        $invoider->setCommand($shutdown_laptop);
        $invoider->run();
        echo '<br><br>';
        $invoider->setCommand($shutdown_mobile);
        $invoider->run();
        echo '<br><br>';
        $invoider->setCommand($shutdown_pc);
        $invoider->run();
    }

    public function iteretor()
    {

        $product_list = new ProductList();
        $product_list->addProduct(new Products('Mobile', 2500, 'This is mobile...!'));
        $product_list->addProduct(new Products('Laptop', 5500, 'This is laptop...!'));
        $product_list->addProduct(new Products('Watch', 1500, 'This is watch...!'));
        $product_list->addProduct(new Products('Keybord', 500, 'This is keybord...!'));
        $product_list->addProduct(new Products('Book', 35, 'This is book...!'));
        $product_list->addProduct(new Products('Pen', 2, 'This is pen...!'));
        for ($product = 0 ; $product <= $product_list->countProducts()-1 ; $product = $product_list->getCounter()) {
            // echo $product;
            echo $product_list->showByOneCounter()->getName().'<br>';
            $product_list->nextCounter();
        }
    }
}
