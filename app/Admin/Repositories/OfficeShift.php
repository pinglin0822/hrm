<?php

namespace App\Admin\Repositories;

use App\Models\OfficeShift as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class OfficeShift extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
