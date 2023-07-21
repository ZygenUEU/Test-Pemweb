<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PCGame extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'pcgames';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'postedby',
        'gamename',
        'developer',
        'download_url',
        'thumbnail_url',
        'genre',
        'about',
        'screenshot_url_1',
        'screenshot_url_2',
        'screenshot_url_3',
        'screenshot_url_4',
        'video_url',
        'publish_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
