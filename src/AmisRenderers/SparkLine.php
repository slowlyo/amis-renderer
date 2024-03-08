<?php

namespace Slowlyo\AmisRenderers;

/**
 * SparkLine
 * 
 * @author slowlyo
 * @version 1.4.0
 */
class SparkLine extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'sparkline');


    }

    /**
     * css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 点击行为
     */
    public function clickAction($value = '')
    {
        return $this->set('clickAction', $value);
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
     * 高度
     */
    public function height($value = '')
    {
        return $this->set('height', $value);
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
     * 关联数据变量。
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 
     */
    public function type($value = 'sparkline')
    {
        return $this->set('type', $value);
    }

    /**
     * 
     */
    public function value($value = '')
    {
        return $this->set('value', $value);
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

    /**
     * 宽度
     */
    public function width($value = '')
    {
        return $this->set('width', $value);
    }


}
