<?php


namespace Taqie\PromoSMS\Sms;


class FullSms extends Sms
{
    public function __construct(string $content, array $recipients, ?string $sender = null)
    {
        $this->type = self::TYPE_FULL;
        parent::__construct($content, $recipients, $sender);
    }
}
