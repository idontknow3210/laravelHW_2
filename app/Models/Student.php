<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    /**
     * Get the group that owns the Student.
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id', "id");
    }
}
