<?php

namespace app\dto;

use Spatie\DataTransferObject\DataTransferObject;

class RatesLatestDto extends DataTransferObject
{
    /** @var string */
    public string $disclaimer;

    /** @var string */
    public string $license;

    /** @var int */
    public int $timestamp;

    /** @var string */
    public string $base;

    /** @var \app\dto\RatesDto */
    public $rates;
}