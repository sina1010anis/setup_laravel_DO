<?php

namespace App\Http\Controllers;

use App\Pattern\Test\AbstractFactory\Core\Factory\GmailMessage;
use App\Pattern\Test\Bridge\Core\Hash65;
use App\Pattern\Test\Builder\Core\BuildShopOnline;
use App\Pattern\Test\Composeit\Core\DownComposite;
use App\Pattern\Test\Flywedht\Core\ItemFlyweght;
use App\Pattern\Test\Injection\CarConfig;
use App\Pattern\Test\Intrator\Core\KMPAlg;
use App\Pattern\Test\Observer\Core\Obs_1;
use App\Pattern\Test\Observer\Core\Obs_2;
use App\Pattern\Test\Observer\Core\Obs_3;
use App\Pattern\Test\Observer\Core\SendEmail;
use App\Pattern\Test\Prototype\ColorPhone;
use App\Pattern\Test\Singelton\ConnectDatabase;
use App\Pattern\Test\Strategy\Core\MysqlSendName;
use App\Pattern\Test\Template\Core\C1;
use Illuminate\Http\Request;
use App\Elasticsearch\ConnectionElasticsearch as Elastic;
use App\Models\Product;
use App\Pattern\Test\AbstractFactory\Core\Factory\EmailMessage;
use App\Pattern\Test\Adapter\Core\PayirPayment;
use App\Pattern\Test\Adapter\Core\ZarinpalPayment;
use App\Pattern\Test\Bridge\Core\Hash32;
use App\Pattern\Test\Bridge\Core\Password;
use App\Pattern\Test\Bridge\Core\Username;
use App\Pattern\Test\Chain\Core\Chain_1;
use App\Pattern\Test\Chain\Core\Chain_2;
use App\Pattern\Test\Chain\Core\Chain_3;
use App\Pattern\Test\Command\Core\DeleteAccoutVIP;
use App\Pattern\Test\Command\Core\Invoker;
use App\Pattern\Test\Command\Core\OffAccoutNormal;
use App\Pattern\Test\Composeit\Core\TopComposite;
use App\Pattern\Test\Decorator\Core\Passord_1;
use App\Pattern\Test\Injection\CarConnect;
use Illuminate\Support\Benchmark;
use PHPUnit\Framework\MockObject\Invocation;
use Rubix\ML\Classifiers\KNearestNeighbors;
use Rubix\ML\Datasets\Labeled;
use Rubix\ML\Kernels\Distance\Minkowski;
use \App\Pattern\Test\Decorator\Core\Hash65 as DHash65;
use \App\Pattern\Test\Decorator\Core\Hash32 as DHash32;
use App\Pattern\Test\Facade\CheckUser\Core\Check;
use App\Pattern\Test\Proxy\Core\DBDeleteProxy;
use App\Pattern\Test\Strategy\Core\MongoDBSendName;
use App\Pattern\Test\Strategy\Core\NameDBStrategy;
use App\Pattern\Test\Template\Core\C2;
use App\Pattern\Test\Visitor\Core\Number;
use App\Pattern\Test\Visitor\Core\NumberVistor;
use Termwind\Components\Dt;

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
        // $samples = [
        //     [4, 3, 44.2],
        //     [2, 2, 16.7],
        //     [2, 4, 19.5],
        //     [3, 3, 55.0],
        // ];
        // $labels = ['married', 'divorced', 'married', 'divorced'];

        // $dataset = new Labeled($samples, $labels);
        // $estimator = new KNearestNeighbors(10, false, new Minkowski(2.5));

        // dd($estimator->trained());
        ////////////////////////////////////////////////


        ///// Abstract Factory /////// (Test End)
        // $notify = GmailMessage::factory('team');
        // return $notify->singelMessage();

        ///// Builder /////// (Test End)
        // $a_shop = new BuildShopOnline();
        // return $a_shop->build();

        ///// Prototype /////// (Test End)
        // $org = new ColorPhone();
        // $copy = clone $org;
        // echo $org->getIsCopy().'<br>';
        // echo $org->getColor().'<br>';

        // echo $copy->getIsCopy().'<br>';
        // $copy->setColor('Oreng').'<br>';
        // echo $copy->getColor().'<br>';

        ///// Singelton /////// (Test End)
        // $connection_db = ConnectDatabase::singelton();
        // echo $connection_db->hello();

        ///// Adapter /////// (Test End)
        // $payment = new PayirPayment();
        // return $payment->pay();

        ///// Beidge /////// (Test End)
        // $username = new Username();
        // $password = new Password();

        // $hash65_username = new Hash65($username);
        // $hash32_username = new Hash32($username);

        // $hash65_password = new Hash65($password);
        // $hash32_password = new Hash32($password);

        // dd($hash32_password->connection('test'));

        ///// Dependency Injection /////// (Test End)
        // $config = new CarConfig('a', 'b', 'c', 'd', 'e');
        // $set = new CarConnect($config);
        // dd($set);

        ///// Composite /////// (Test End)
        // $top_1 = new TopComposite('Mobile');
        // $top_1->addComposite(new DownComposite('Smasung'));
        // $top_1->addComposite(new DownComposite('LG'));
        // $top_1->addComposite(new DownComposite('Sony'));
        // $top_1->addComposite(new DownComposite('Iphon'));

        // $top_2 = new TopComposite('Laptop');
        // $top_2->addComposite(new DownComposite('HP'));
        // $top_2->addComposite(new DownComposite('Lenovo'));
        // $top_2->addComposite(new DownComposite('Microsoft'));
        // $top_2->addComposite(new DownComposite('Asus'));
        // $top_2->addComposite($top_1);

        // echo '<br>';
        // print_r($top_2->show());

        ///// Decorator /////// (Test End)
        // $password = new Passord_1();
        // $hash = new DHash32(new DHash65(new DHash32(new DHash65($password))));
        // echo $hash->getPassword();

        ///// Facade /////// (Test End)
        // $check = new Check();
        // return $check->facade();

        ///// Flyweght /////// (Test End)
        // $names = ['test', 'yes', 'copy'];
        // $fly = new ItemFlyweght();
        // for ($i = 0; $i < 10 ; $i++) {
        //     foreach ($names as $name) {
        //         echo $fly->flyItem($name)->getName().'<br>';
        //     }
        // }
        // echo $fly->getForIf();

        ///// Proxy /////// (Test End)
        // $delete_db = new DBDeleteProxy();
        // $delete_db->proxy();

        ///// Chain of Responsibility /////// (Test End)
        // $chain_1 = new Chain_1();
        // $chain_2 = new Chain_2();
        // $chain_3 = new Chain_3();
        // $chain_1->setChain($chain_2);
        // $chain_2->setChain($chain_3);
        // $chain_1->check();

        ///// Strategy /////// (Test End)
        // $sender = new NameDBStrategy();
        // echo $sender->sendName(new MysqlSendName).'<br>';
        // echo $sender->sendName(new MongoDBSendName).'<br>';

        ///// Template /////// (Test End)
        // $c1 = new C1();
        // $c2 = new C2();
        // $c1->setName('test c1');
        // $c2->setName('test c2');
        // echo $c1->getName().'<br>';
        // echo $c2->getName().'<br>';

        ///// Visitor /////// (Test End)
        // $visitor_number = new NumberVistor();
        // echo $visitor_number->visitor(new Number(), 5);

        ///// Command /////// (Test End)
        // $delete_account_vip = new DeleteAccoutVIP();
        // $off_account_normal = new OffAccoutNormal();
        // $invoker = new Invoker();
        // $invoker->invoker($delete_account_vip);
        // echo '<br>';
        // $invoker->invoker($off_account_normal);

        ///// Intrator /////// (Test End)
        // $kmp = new KMPAlg();
        // for ($i = 0 ; $i <= 25 ; $i++) {
        //     $kmp->setStorage(rand(1,9999));
        // }
        // $j = 0;
        // while ($j < $kmp->getMax()) {
        //     $kmp->setItem($j);
        //     echo $kmp->getItem().'-->' .$j.'<br>';
        //     $j += $kmp->nextItem();
        // }

        ///// Observer /////// (Test End)
        $email = new SendEmail();
        $email->addObs(new Obs_1())->addObs(new Obs_3())->addObs(new Obs_2());
        return $email->newEmail();


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
