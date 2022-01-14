<?php

namespace App\Admin\Repositories;

use App\Models\Designation as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Designation extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
