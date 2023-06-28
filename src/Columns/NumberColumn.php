<?php

namespace RedSquirrelStudio\LaravelBackpackImportOperation\Columns;

class NumberColumn extends ImportColumn
{
    /**
     * @return ?float
     */
    public function output(): ?float
    {
        return is_numeric($this->data) ? (float)$this->data : null;
    }
}
