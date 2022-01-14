<?php

namespace App\Admin\Repositories;

use App\Models\FinanceAccount as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class FinanceAccount extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
