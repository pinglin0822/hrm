<?php

namespace App\Admin\Repositories;

use App\Models\ContractOption as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class ContractOption extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
