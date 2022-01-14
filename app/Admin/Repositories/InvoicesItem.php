<?php

namespace App\Admin\Repositories;

use App\Models\InvoicesItem as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class InvoicesItem extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
