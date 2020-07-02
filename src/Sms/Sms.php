<?php


namespace Taqie\PromoSMS\Sms;

use Illuminate\Support\Arr;

abstract class Sms
{
    public const TYPE_FLASH = 0;
    public const TYPE_ECO = 1;
    public const TYPE_FULL = 3;
    public const TYPE_SPEED = 4;

    protected string $content = "";

    protected int $type = self::TYPE_ECO;

    protected array $recipients = [];

    protected ?string $sender = null;

    protected ?bool $specialChars = null;

    protected ?bool $longSms = null;

    protected ?int $dateTimestamp = null;

    protected ?string $deliveryUrl = null;

    protected ?array $userIndexes = null;

    protected ?bool $returnSendRecipients = null;

    public function __construct(string $content, array $recipients, ?int $dateTimestamp = null, ?string $sender = null)
    {
        $this->sender = $sender;
        $this->recipients = $recipients;
        $this->content = $content;
        $this->dateTimestamp = $dateTimestamp;
    }

    public function toArray(): array
    {
        $data = [
            'text' => $this->content,
            'type' => $this->type,
            'recipients' => $this->recipients,
            'special-chars' => $this->specialChars,
            'long-sms' => $this->longSms,
            'date' => $this->dateTimestamp,
            'delivery-url' => $this->deliveryUrl,
            'user-indexes' => $this->userIndexes,
            'return-send-recipients' => $this->returnSendRecipients,
        ];

        $toExcept = [];

        foreach ($data as $k => $v) {
            if (!$v) {
                $toExcept[] = $k;
            }
        }

        return Arr::except($toExcept, $data);
    }

}
