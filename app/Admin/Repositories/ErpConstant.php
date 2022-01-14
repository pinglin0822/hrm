<?php

namespace App\Admin\Repositories;

use App\Models\ErpConstant as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class ErpConstant extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
