<?php

namespace Stevebauman\Tables;

use Stevebauman\EloquentTable\TableCollection;

interface TableInterface
{

    /**
     * Configure
     * */
    public function configure(): TableCollection;

    /**
     * Columns
     *
     * @return array
     * */
    public function columns(): array;

    /**
     * Record Actions
     *
     * @return array
     * */
    public function recordActions(): array;

    /**
     * Selection Actions
     *
     * @return array
     * */
    public function selectionActions(): array;

}
