<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Database\Factories\articleTagFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|articleTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|articleTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|articleTag query()
 * @mixin \Eloquent
 */
class articleTag extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleTagFactory> */
    use HasFactory;
}
