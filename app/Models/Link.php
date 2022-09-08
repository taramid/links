<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $url
 * @property string $hook
 */
class Link extends Model
{
    use HasFactory;

//    #[Attr('url')]
//    https://php.watch/articles/php-attributes
}
