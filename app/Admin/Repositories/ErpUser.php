<?php

namespace App\Admin\Repositories;

use App\Models\ErpUser as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class ErpUser extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;

}
