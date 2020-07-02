<?php


namespace Taqie\PromoSMS\Sms;


class SpeedSms extends Sms
{
    public function __construct(string $content, array $recipients, ?string $sender = null)
    {
        $this->type = self::TYPE_SPEED;
        parent::__construct($content, $recipients, $sender);
    }
}
