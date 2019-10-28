<?php

namespace RedmarBakker\ViaTable;

use Illuminate\Pagination\Paginator;

/**
 * Class TablePaginator.
 */
class TablePaginator extends Paginator
{
    use TableTrait;
}
