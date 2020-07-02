<?php


namespace Taqie\PromoSMS\Sms;


class EcoSms extends Sms
{
    public function __construct(string $content, array $recipients, ?string $sender = null)
    {
        $this->type = self::TYPE_ECO;
        parent::__construct($content, $recipients, $sender);
    }
}
