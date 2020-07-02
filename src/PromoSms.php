<?php


namespace Taqie\PromoSMS;


use Taqie\PromoSMS\Requests\Request;
use Taqie\PromoSMS\Sms\Sms;

class PromoSms
{
    protected Request $request;
    protected array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->request = new Request($config);
    }

    public function sendSMS(Sms $sms)
    {
        $this->request->sendSms($sms);
    }
}
