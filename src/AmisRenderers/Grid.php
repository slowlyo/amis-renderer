<?php

namespace Slowlyo\AmisRenderers;

/**
 * Grid 格子布局渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/grid
 * 
 * @author slowlyo
 * @version 1.6.0
 */
class Grid extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'grid');


    }

    /**
     * 水平对齐方式 可选值: left | right | between | center
     */
    public function align($value = '')
    {
        return $this->set('align', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 列集合
     */
    public function columns($value = '')
    {
        return $this->set('columns', $value);
    }

    /**
     * 是否禁用
     */
    public function disabled($value = true)
    {
        return $this->set('disabled', $value);
    }

    /**
     * 是否禁用表达式
     */
    public function disabledOn($value = '')
    {
        return $this->set('disabledOn', $value);
    }

    /**
     * 水平间距 可选值: xs | sm | base | none | md | lg
     */
    public function gap($value = '')
    {
        return $this->set('gap', $value);
    }

    /**
     * 是否隐藏
     */
    public function hidden($value = true)
    {
        return $this->set('hidden', $value);
    }

    /**
     * 是否隐藏表达式
     */
    public function hiddenOn($value = '')
    {
        return $this->set('hiddenOn', $value);
    }

    /**
     * 指定为 Grid 格子布局渲染器。
     */
    public function type($value = 'grid')
    {
        return $this->set('type', $value);
    }

    /**
     * 垂直对齐方式 可选值: top | middle | bottom | between
     */
    public function valign($value = '')
    {
        return $this->set('valign', $value);
    }

    /**
     * 是否显示
     */
    public function visible($value = true)
    {
        return $this->set('visible', $value);
    }

    /**
     * 是否显示表达式
     */
    public function visibleOn($value = '')
    {
        return $this->set('visibleOn', $value);
    }


}
