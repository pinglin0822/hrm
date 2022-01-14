<?php

namespace App\Admin\Repositories;

use App\Models\Policy as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Policy extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
