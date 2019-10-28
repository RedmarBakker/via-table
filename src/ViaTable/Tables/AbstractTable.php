<?php

namespace SteveBauman\Tables;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use RedmarBakker\ViaTable\TableCollection;

abstract class AbstractTable implements TableInterface
{

    /**
     * @var LengthAwarePaginator
     * */
    protected $collection;

    /**
     * @var TableCollection
     * */
    protected $table;

    /**
     * @var string
     * */
    protected $template = 'stevebauman/eloquenttable/laravel-5-table';


    /**
     * Constructor
     *
     * @var $collection LengthAwarePaginator
     * */
    public function __construct(LengthAwarePaginator $collection)
    {
        $this->collection = $collection;
        $this->table = $this->setup();
    }

    /**
     * Setup
     *
     * @return TableCollection
     * */
    protected function setup(): TableCollection
    {
        /** @var $collection TableCollection */
        $collection = $this->collection;

        return $collection
            ->columns($this->columns())
            ->setActions($this->recordActions())
            ->setSelectionActions($this->selectionActions());
    }

    /**
     * Table
     *
     * @return TableCollection
     * */
    protected function table(): TableCollection
    {
        return $this->table;
    }

    /**
     * Table
     * */
    public function render()
    {
        return $this->configure()->render($this->template);
    }

    /**
     * Links
     *
     * @return string
     * */
    public function links()
    {
        return $this->collection->appends(Input::except('page'))->links();
    }

}
