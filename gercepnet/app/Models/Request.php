<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hootlex\Moderation\Moderatable;

class Request extends Model
{
    use Moderatable;
}
