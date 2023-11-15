<?php

namespace App\Http\Controllers;

use App\Pattern\AbstractFactory\Core\ElasticDB;
use App\Pattern\AbstractFactory\Core\MongoDB;
use App\Pattern\AbstractFactory\Core\MysqlDB;
use App\Pattern\Builder\Core\BuyProduct;
use App\Pattern\Builder\Core\ProductBuy;
use App\Pattern\FactoryMethod\Core\FactoryConnect;
use App\Pattern\FactoryMethod\Core\MysqlConnection;
use App\Pattern\P1\Core\Factory\Core\ConncetionDB;
use App\Pattern\Prototype\Core\CarRead;
use App\Pattern\SimpelFactory\Core\FactoryDB;
use App\Pattern\StaticFactory\Core\StaticFactory;
use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class CreationalController extends Controller
{
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
        // $connection  = CoreMysqlConnection::setupIns();
        // $connection->count();
        // $connection_2  = CoreMysqlConnection::setupIns();
        // echo($connection_2->getCountNumber());
    }

    public function staticfactory ()
    {
        //dd(UserFactory::new()->make());
        return StaticFactory::factory('BMW')->model();
    }

}
