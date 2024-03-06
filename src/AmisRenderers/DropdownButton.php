<?php

namespace Slowlyo\AmisRenderers;

/**
 * 下拉按钮渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/dropdown-button
 *
 * @author slowlyo
 * @version 1.5.2
 */
class DropdownButton extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'dropdown-button');
    }

    /**
     * 对齐方式 可选值: left | right
     */
    public function align($value = '')
    {
        return $this->set('align', $value);
    }

    /**
     * 是否独占一行 `display: block`
     */
    public function block($value = true)
    {
        return $this->set('block', $value);
    }

    /**
     * 给 Button 配置 className。
     */
    public function btnClassName($value = '')
    {
        return $this->set('btnClassName', $value);
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
     * 点击内容是否关闭
     */
    public function closeOnClick($value = true)
    {
        return $this->set('closeOnClick', $value);
    }

    /**
     * 点击外部是否关闭
     */
    public function closeOnOutside($value = true)
    {
        return $this->set('closeOnOutside', $value);
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
     * 是否显示下拉按钮
     */
    public function hideCaret($value = true)
    {
        return $this->set('hideCaret', $value);
    }

    /**
     * 是否只显示图标。
     */
    public function iconOnly($value = true)
    {
        return $this->set('iconOnly', $value);
    }

    /**
     * 按钮文字
     */
    public function label($value = '')
    {
        return $this->set('label', $value);
    }

    /**
     * 按钮级别，样式 可选值: info | success | danger | warning | primary | link
     */
    public function level($value = '')
    {
        return $this->set('level', $value);
    }

    /**
     * 右侧图标
     */
    public function rightIcon($value = '')
    {
        return $this->set('rightIcon', $value);
    }

    /**
     * 按钮大小 可选值: xs | sm | md | lg
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * 触发条件，默认是 click 可选值: click | hover
     */
    public function trigger($value = '')
    {
        return $this->set('trigger', $value);
    }

    /**
     * 指定为 DropDown Button 类型
     */
    public function type($value = 'dropdown-button')
    {
        return $this->set('type', $value);
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
