<?php

namespace App\Admin\Repositories;

use App\Models\ErpUsersDetail as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class ErpUsersDetail extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
