<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class keluhan extends Model
{
    protected $table = 'keluhan';

        protected $fillable = [
            'keluhan',
            'status',
            'rejected_reason',
            'masyarakat_id'
        ];

    public function pelapor()
    {
        return $this->belongTo(masyarakat::class);
    }
}