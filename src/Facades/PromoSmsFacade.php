<?php


namespace Taqie\PromoSMS\Facades;
use Illuminate\Support\Facades\Facade;
use Taqie\PromoSMS\PromoSms;

class PromoSmsFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return PromoSms::class;
    }
}
