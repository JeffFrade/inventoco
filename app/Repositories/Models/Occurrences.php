<?php

namespace InvOco\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Occurrences extends Model
{
    use SoftDeletes;
}
