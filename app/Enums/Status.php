<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Status extends Enum
{
    const READY = 'READY';
    const DOING = 'DOING';
    const DONE = 'DONE';

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::READY:
                return '未着手';
                break;
            case self::DOING:
                return '進行中';
                break;
            case self::DONE:
                return '完了';
                break;
            default:
                return self::getKey($value);
        }
    }
}
