<?php

namespace Iamopk\LaravelPackageExample\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model {
    use HasFactory;

    protected $guarded = [];

    public function getUppercaseName() {
        return strtoupper($this->name);
    }
}
