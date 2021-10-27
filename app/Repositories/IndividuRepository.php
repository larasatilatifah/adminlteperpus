<?php

namespace App\Repositories;

use App\Models\Individu;
use App\Repositories\BaseRepository;

/**
 * Class IndividuRepository
 * @package App\Repositories
 * @version October 27, 2021, 8:13 pm UTC
*/

class IndividuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nik',
        'nama',
        'alamat'
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
        return Individu::class;
    }
}
