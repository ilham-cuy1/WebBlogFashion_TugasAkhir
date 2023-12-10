<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Style extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'image',
        'title',
        'content',
    ];

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    }

    public function getUpdatedAtAttribute(){
        return Carbon::parse($this->attributes['updated_at'])->diffForHumans();
    }
}
