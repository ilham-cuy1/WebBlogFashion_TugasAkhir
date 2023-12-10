<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class About extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'sub_title',
        'image',
        'content',
    ];

    public function getUpdatedAtAttribute(){
        return Carbon::parse($this->attributes['updated_at'])->translatedFormat('d M Y H:i');
    }
}
