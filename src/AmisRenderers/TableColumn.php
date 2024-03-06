<?php

namespace Slowlyo\AmisRenderers;

/**
 * 表格列，不指定类型时默认为文本类型。
 * 
 * @author slowlyo
 * @version v3.1.1
 */
class TableColumn extends BaseRenderer
{
    public function __construct()
    {
        

    }

    /**
     * 列对齐方式 可选值: left | right | center | justify
     */
    public function align($value = '')
    {
        return $this->set('align', $value);
    }

    /**
     * 结合表格的 footable 一起使用。 填写 *、xs、sm、md、lg指定 footable 的触发条件，可以填写多个用空格隔开 可选值: * | xs | sm | md | lg
     */
    public function breakpoint($value = '')
    {
        return $this->set('breakpoint', $value);
    }

    /**
     * 表格列单元格是否可以获取父级数据域值，默认为true，该配置对当前列内单元格生效
     */
    public function canAccessSuperData($value = true)
    {
        return $this->set('canAccessSuperData', $value);
    }

    /**
     * 列样式表
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 单元格样式表达式
     */
    public function classNameExpr($value = '')
    {
        return $this->set('classNameExpr', $value);
    }

    /**
     * 配置点击复制功能
     */
    public function copyable($value = true)
    {
        return $this->set('copyable', $value);
    }

    /**
     * todo
     */
    public function filterable($value = true)
    {
        return $this->set('filterable', $value);
    }

    /**
     * 配置是否固定当前列 可选值: left | right | none
     */
    public function fixed($value = '')
    {
        return $this->set('fixed', $value);
    }

    /**
     * 单元格内部组件自定义样式 style作为单元格自定义样式的配置
     */
    public function innerStyle($value = '')
    {
        return $this->set('innerStyle', $value);
    }

    /**
     * 列标题
     */
    public function label($value = '')
    {
        return $this->set('label', $value);
    }

    /**
     * 列头样式表
     */
    public function labelClassName($value = '')
    {
        return $this->set('labelClassName', $value);
    }

    /**
     * 绑定字段名
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 配置查看详情功能
     */
    public function popOver($value = '')
    {
        return $this->set('popOver', $value);
    }

    /**
     * 配置快速编辑功能
     */
    public function quickEdit($value = '')
    {
        return $this->set('quickEdit', $value);
    }

    /**
     * 作为表单项时，可以单独配置编辑时的快速编辑面板。
     */
    public function quickEditOnUpdate($value = '')
    {
        return $this->set('quickEditOnUpdate', $value);
    }

    /**
     * 提示信息
     */
    public function remark($value = '')
    {
        return $this->set('remark', $value);
    }

    /**
     * 是否可快速搜索
     */
    public function searchable($value = true)
    {
        return $this->set('searchable', $value);
    }

    /**
     * 配置是否可以排序
     */
    public function sortable($value = true)
    {
        return $this->set('sortable', $value);
    }

    /**
     * 配置是否默认展示
     */
    public function toggled($value = true)
    {
        return $this->set('toggled', $value);
    }

    /**
     * 是否唯一, 只有在 inputTable 里面才有用
     */
    public function unique($value = true)
    {
        return $this->set('unique', $value);
    }

    /**
     * 默认值, 只有在 inputTable 里面才有用
     */
    public function value($value = '')
    {
        return $this->set('value', $value);
    }

    /**
     * 列宽度
     */
    public function width($value = '')
    {
        return $this->set('width', $value);
    }


}
