<?php

namespace App\Repositories;

use App\Models\Dokumen;
use App\Repositories\BaseRepository;

/**
 * Class DokumenRepository
 * @package App\Repositories
 * @version October 27, 2021, 8:21 pm UTC
*/

class DokumenRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomor',
        'nama',
        'deskripsi',
        'file'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Dokumen::class;
    }
}
