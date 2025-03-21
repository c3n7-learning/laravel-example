<?php

namespace Tefabi\Example\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 */
class MyModel extends Model
{
    use HasFactory;

    public $guarded = [];

    public function getUppercasedName(): string
    {
        return strtoupper($this->name);
    }
}
