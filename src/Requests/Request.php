<?php


namespace Taqie\PromoSMS\Requests;


use GuzzleHttp\Client;
use Taqie\PromoSMS\Sms\Sms;

class Request
{
    protected array $config;

    protected Client $client;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->client = new Client([
            'base_uri' => $this->config['promosms_url'],
            'headers' => [
                'Authorization' => 'Basic ' .base64_encode($this->config['promosms_login'] . ':' . $this->config['promosms_password'])
            ]
        ]);
    }

    public function sendSms(Sms $sms)
    {
        $response = $this->client->post('sms',[
            'form_params' => $sms->toArray()
        ])->getBody()->getContents();

        dd($response,$sms->toArray());
    }
}
