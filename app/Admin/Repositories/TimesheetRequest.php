<?php

namespace App\Admin\Repositories;

use App\Models\TimesheetRequest as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class TimesheetRequest extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
