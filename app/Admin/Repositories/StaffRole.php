<?php

namespace App\Admin\Repositories;

use App\Models\StaffRole as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class StaffRole extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
