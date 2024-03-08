<?php

namespace Slowlyo\AmisRenderers;

/**
 * NavItem
 * 
 * @author slowlyo
 * @version 1.4.0
 */
class NavItem extends BaseRenderer
{
    public function __construct()
    {
        

    }

    /**
     * 
     */
    public function active($value = true)
    {
        return $this->set('active', $value);
    }

    /**
     * 
     */
    public function children($value = '')
    {
        return $this->set('children', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 
     */
    public function defer($value = true)
    {
        return $this->set('defer', $value);
    }

    /**
     * 
     */
    public function deferApi($value = '')
    {
        return $this->set('deferApi', $value);
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
     * 图标类名，参考 fontawesome 4。
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     * 文字说明
     */
    public function label($value = '')
    {
        return $this->set('label', $value);
    }

    /**
     * 
     */
    public function target($value = '')
    {
        return $this->set('target', $value);
    }

    /**
     * 
     */
    public function to($value = '')
    {
        return $this->set('to', $value);
    }

    /**
     * 
     */
    public function unfolded($value = true)
    {
        return $this->set('unfolded', $value);
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
