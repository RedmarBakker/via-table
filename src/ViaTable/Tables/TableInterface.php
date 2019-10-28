<?php

namespace RedmarBakker\ViaTable\Tables;

use RedmarBakker\ViaTable\TableCollection;

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
