<?php

namespace Slowlyo\AmisRenderers;

/**
 * Step
 * 
 * @author slowlyo
 * @version 1.5.2
 */
class Step extends BaseRenderer
{
    public function __construct()
    {
        

    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 描述
     */
    public function description($value = '')
    {
        return $this->set('description', $value);
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
     * 图标
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     * 子标题
     */
    public function subTitle($value = '')
    {
        return $this->set('subTitle', $value);
    }

    /**
     * 标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
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


}
