<?php

namespace Slowlyo\AmisRenderers;

/**
 * Icon 图表渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/icon
 * 
 * @author slowlyo
 * @version 1.6.3
 */
class Icon extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'icon');


    }

    /**
     * 角标
     */
    public function badge($value = '')
    {
        return $this->set('badge', $value);
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
     * 按钮类型
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     * 
     */
    public function type($value = 'icon')
    {
        return $this->set('type', $value);
    }

    /**
     *  可选值: iconfont | fa
     */
    public function vendor($value = '')
    {
        return $this->set('vendor', $value);
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
