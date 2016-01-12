<?php
class TermSelectAllowSearch extends \CMSBackend\Widget\CMSBackendBaseWidget {

    public function begin() {
        $this->data = [
            "ALLOW" => t("Allow"),
            "NOT_ALLOW" => t("Not allow")
        ];
    }

    public function end() {
        $select = $this->form->selectOption($this->elementName, $this->selected, (array) $this->htmlOptions);

        foreach((array)$this->data as $key => $title){
            $select->addOption($title, $key);
        }

        $select = \Toxotes\Plugin::applyFilters('dropdown_language', $select);

        ob_start();
        $select->display();
        $s = ob_get_clean();
        return $s;
    }
}