<?php

namespace App\Service;

use YooKassa\Client;

class PaymentService 
{
    private function getClient(): Client {
        $client = new Client();
        $client->setAuth(config('services.yookassa.shop_id'), config('services.yookassa.secret_key'));

        return $client;
        
    }
}   