<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Individu
 * @package App\Models
 * @version October 27, 2021, 8:13 pm UTC
 *
 * @property string $nik
 * @property string $nama
 * @property string $alamat
 */
class Individu extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'individus';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nik',
        'nama',
        'alamat',
        'tanggal_lahir'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nik' => 'string',
        'nama' => 'string',
        'alamat' => 'string',
        'tanggal_lahir' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nik' => 'required',
        'nama' => 'required'
    ];

    
}
