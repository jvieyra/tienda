<?php>

namespace App;
use URL;
use Config;

//librerias Paypal
use PayPal\Core\PayPalHttpClient;
use PayPal\v1\Payments\PaymentCreateRequest;
use PayPal\v1\Payments\PaymentExecuteRequest;
use PayPal\Core\SandboxEnviroment;

class Paypal{
  public $client, $enviroment;

  public function __construct(){
    //info se seca del archivo en Config/services.php
    $client = Config::get('services.paypal.clientid');
    $secret = Config::get('services.paypal.secret');
    $this->$enviroment =  new SandboxEnviroment($clienid,$secret);
    //servicio de produccion o sandbox , connection
    $this->client = new PayPalHttpClient($this->$enviroment);
  }

  //solicitud de cobro
  public function buildPaymentRequest($amount){
    $request = new PaymentCreateRequest();
    $body = [
      "intent"=>"sale",
      //tipo de trasacciones Monedas a utilizar
      "transactions"=>[
        "amount"=> ["total"=> $amount , "currency"=> "USD"]
      ],
      //como pagara el usuario
      "payer"=>[
        "payment_method"=> "paypal"
      ],
      //a donde se redireccionara cuando se haya pagado
      "redirect_urls"=>[
        "cancel_url"=>"/",
        "return_url"=>"/"
      ]
    ];

    $request->body = $body;
    return $request;
  }
}
