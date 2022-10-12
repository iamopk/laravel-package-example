<?php

namespace Iamopk\LaravelPackageExample\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 */
class MyModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getUppercaseName()
    {
        return strtoupper($this->name);
    }
}
