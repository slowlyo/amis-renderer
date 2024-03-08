<?php

namespace Slowlyo\AmisRenderers;

/**
 * Table View 表格展现
 * 
 * @author slowlyo
 * @version v3.1.1
 */
class TableView extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'table-view');


    }

    /**
     * 指定为 table-view 渲染器。
     */
    public function type($value = 'table-view')
    {
        return $this->set('type', $value);
    }


}
