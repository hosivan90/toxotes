<?php
class ListTable {
    public $columns = array();
    public $items = array();
    public $tableHtmlOptions;
    public $taxonomy;

    public function __construct($taxonomy) {
        $this->taxonomy = $taxonomy;
    }

    public function init() {}

    public function setItems($items) {
        $this->items = $items;
    }
}