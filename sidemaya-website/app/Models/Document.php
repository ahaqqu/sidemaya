<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Document extends Model
{
    use HasFactory;
    protected $table = 'documents';
    protected $fillable = [
        'uuid',
        'identifier',
        'version',
        'category',
        'status',
        'notes',
        'filename',
        'updated_at',
        'updated_by',
        'created_at',
        'created_by'
    ];
}
