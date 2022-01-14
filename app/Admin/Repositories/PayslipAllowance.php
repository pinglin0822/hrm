<?php

namespace App\Admin\Repositories;

use App\Models\PayslipAllowance as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class PayslipAllowance extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
