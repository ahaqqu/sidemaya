<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

class LaporanKeuangan extends Model
{
    use HasFactory;
    protected $table = 'laporan_keuangan';
    const UPDATED_AT = null;
    public $timestamps = false;
    protected $fillable = [
    'id',
    'uuid',
    'filename',
    'created_at',
    'created_by',
    'year',
    'month'
    ];
}
