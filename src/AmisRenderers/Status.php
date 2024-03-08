<?php

namespace Slowlyo\AmisRenderers;

/**
 * 状态展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/status
 * 
 * @author slowlyo
 * @version 1.6.2
 */
class Status extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'status');


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
     * 文字映射关系
     */
    public function labelMap($value = '')
    {
        return $this->set('labelMap', $value);
    }

    /**
     * 状态图标映射关系
     */
    public function map($value = '')
    {
        return $this->set('map', $value);
    }

    /**
     * 占位符
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 指定为状态展示控件
     */
    public function type($value = 'status')
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
