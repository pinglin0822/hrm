<?php

namespace App\Admin\Repositories;

use App\Models\Timesheet as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Timesheet extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
