<?php

namespace App\Http\Controllers;

use App\Pattern\Chain\Core\CheckLoginUser;
use App\Pattern\Chain\Core\NumberProducts;
use App\Pattern\Chain\Core\PriceProduct;
use App\Pattern\Command\Core\InvoiderClass;
use App\Pattern\Command\Core\Laptop;
use App\Pattern\Command\Core\Mobile;
use App\Pattern\Command\Core\PC;
use App\Pattern\Command\Core\ShutdownLaptop;
use App\Pattern\Command\Core\ShutdownMobile;
use App\Pattern\Command\Core\ShutdownPC;
use App\Pattern\Iteretor\Core\ProductList;
use App\Pattern\Iteretor\Core\Products;
use App\Pattern\Mediator\Core\Email;
use App\Pattern\Mediator\Core\SendMessageMobileAndEmail;
use App\Pattern\Memento\Core\ClientVersion;
use App\Pattern\Memento\Core\MemontoVersion;
use App\Pattern\Memento\Core\ServerVersion;
use App\Pattern\Observer\Core\Client_1;
use App\Pattern\Observer\Core\Client_2;
use App\Pattern\Observer\Core\Client_3;
use App\Pattern\Observer\Core\Client_4;
use App\Pattern\Observer\Core\Template_1;
use App\Pattern\Observer\Core\Template_2;
use App\Pattern\State\Core\ProductContext;
use App\Pattern\State_2\Core\State;
use App\Pattern\Strategy\Core\DBconnection;
use App\Pattern\Strategy\Core\MongoDBConnction;
use App\Pattern\Strategy\Core\MysqlConnection;
use App\Pattern\Tempalte\Core\Email as CoreEmail;
use App\Pattern\Tempalte\Core\Post;
use Illuminate\Http\Request;

class BehavioralController extends Controller
{
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

    public function mediator()
    {
        //$t = new Test();
        //dd($t->Test());
        $mediator = new SendMessageMobileAndEmail('Test');
        return $mediator->sendNotify(new Email());
    }

    public function memonto()
    {
        $m = new MemontoVersion(new ClientVersion(), new ServerVersion());

        echo $m->getVeriosnClient().'<br>';
        echo $m->getVeriosnServer();
    }

    public function observer()
    {
        $theme_1 = new Template_1();
        $theme_2 = new Template_2();

        $client_1 = new Client_1();
        $client_2 = new Client_2();
        $client_3 = new Client_3();
        $client_4 = new Client_4();

        $theme_1->addSubject($client_1);
        $theme_1->addSubject($client_3);

        $theme_2->addSubject($client_3);
        $theme_2->addSubject($client_4);
        $theme_2->addSubject($client_2);

        $theme_1->newEventSend('Laravel v11');
        $theme_2->newEventSend('PHP 9');
    }

    public function state()
    {
        $create = new ProductContext();

        $create->createState();
        $create->proceedToNext();

        return $create->toString();

    }

    public function state_2()
    {
        $power = new State();
        $power->createState();
        $power->nextSate();
        $power->nextSate();

        echo $power->statusState();
    }

    public function strategy()
    {
        $strategy = new DBconnection();
        $strategy->setDatabase(new MongoDBConnction())->connect();
    }

    public function template()
    {
        $template = new Post();
        echo $template->typeMessage()->send();
    }

}
