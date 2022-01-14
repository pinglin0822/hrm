<?php

namespace App\Admin\Repositories;

use App\Models\Event as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Event extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
