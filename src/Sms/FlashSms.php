<?php


namespace Taqie\PromoSMS\Sms;


class FlashSms extends Sms
{
    public function __construct(string $content, array $recipients, ?string $sender = null)
    {
        $this->type = self::TYPE_FLASH;
        parent::__construct($content, $recipients, $sender);
    }
}
