<?php

namespace App;

use BenSampo\Enum\Enum;
use App\Enums\Status;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use CastsEnums;

    protected $enumCasts = [
        'status' => Status::class
    ];
}
