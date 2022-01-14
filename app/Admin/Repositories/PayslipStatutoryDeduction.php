<?php

namespace App\Admin\Repositories;

use App\Models\PayslipStatutoryDeduction as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class PayslipStatutoryDeduction extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
