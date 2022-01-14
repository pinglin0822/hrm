<?php

namespace App\Admin\Repositories;

use App\Models\FinanceTransaction as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class FinanceTransaction extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
