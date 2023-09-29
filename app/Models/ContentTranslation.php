<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class ContentTranslation extends Model
{
    use LogsActivity;

    public $timestamps = false;
    protected $fillable = ['name', 'content', 'short_description', 'meta_title', 'meta_description', 'alt'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll();
    }
}
