<?php

namespace App\Admin\Repositories;

use App\Models\PayslipOtherPayment as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class PayslipOtherPayment extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
