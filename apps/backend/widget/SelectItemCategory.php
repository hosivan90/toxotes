<?php
require_once __DIR__.'/SelectParentTerm.php';
use Toxotes\Plugin;

class SelectItemCategory extends SelectParentTerm {
    public function begin() {
        $this->enable = Plugin::applyFilters('enable_' .$this->taxonomy .'_category', true);
        if (!$this->enable) {
            return;
        }
        $this->item_taxonomy = $this->taxonomy;
        if ($this->taxonomy == 'post') {
            $this->taxonomy = 'category';
        }
        $this->taxonomy = Plugin::applyFilters('get_category_'.$this->item_taxonomy, $this->taxonomy);
        parent::begin();
    }
    public function end() {
        if (!$this->enable) {
            return;
        }

        $select = $this->form->selectOption($this->elementName, $this->selected, (array) $this->htmlOptions)
            ->addOption($this->label, '*');

        foreach ($this->terms as $term) {
            $selectName = ($term->getLevelValue() > 1)? str_repeat('&#8212;', $term->getLevelValue()-1) .$term->getName(): $term->getName();
            $select->addOption($selectName, $term->getId());
        }

        ob_start();
        $select->display();
        $s = ob_get_clean();
        return $s;
    }
}