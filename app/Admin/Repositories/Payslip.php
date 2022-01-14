<?php

namespace App\Admin\Repositories;

use App\Models\Payslip as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Payslip extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
