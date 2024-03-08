<?php

namespace Slowlyo\AmisRenderers;

/**
 * Divider 分割线渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/divider
 * 
 * @author slowlyo
 * @version 1.5.3
 */
class Divider extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'divider');


    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
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
     *  可选值: dashed | solid
     */
    public function lineStyle($value = '')
    {
        return $this->set('lineStyle', $value);
    }

    /**
     * 
     */
    public function type($value = 'divider')
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
