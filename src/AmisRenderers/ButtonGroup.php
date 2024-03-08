<?php

namespace Slowlyo\AmisRenderers;

/**
 * Button Group 渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/button-group
 * 
 * @author slowlyo
 * @version 1.9.0
 */
class ButtonGroup extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'button-group');


    }

    /**
     * 
     */
    public function btnActiveClassName($value = '')
    {
        return $this->set('btnActiveClassName', $value);
    }

    /**
     * 按钮选中的样式级别
     */
    public function btnActiveLevel($value = '')
    {
        return $this->set('btnActiveLevel', $value);
    }

    /**
     * 
     */
    public function btnClassName($value = '')
    {
        return $this->set('btnClassName', $value);
    }

    /**
     * 按钮样式级别
     */
    public function btnLevel($value = '')
    {
        return $this->set('btnLevel', $value);
    }

    /**
     * 按钮集合
     */
    public function buttons($value = '')
    {
        return $this->set('buttons', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 是否为禁用状态。
     */
    public function disabled($value = true)
    {
        return $this->set('disabled', $value);
    }

    /**
     * 通过 JS 表达式来配置当前表单项的禁用状态。
     */
    public function disabledOn($value = '')
    {
        return $this->set('disabledOn', $value);
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
     * 组件唯一 id，主要用于日志采集
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    /**
     * 按钮大小 可选值: xs | sm | md | lg
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * 平铺展示？
     */
    public function tiled($value = true)
    {
        return $this->set('tiled', $value);
    }

    /**
     * 指定为提交按钮类型
     */
    public function type($value = 'button-group')
    {
        return $this->set('type', $value);
    }

    /**
     * 垂直展示？
     */
    public function vertical($value = true)
    {
        return $this->set('vertical', $value);
    }

    /**
     * 是否显示
     */
    public function visible($value = true)
    {
        return $this->set('visible', $value);
    }

    /**
     * 通过 JS 表达式来配置当前表单项是否显示
     */
    public function visibleOn($value = '')
    {
        return $this->set('visibleOn', $value);
    }


}
