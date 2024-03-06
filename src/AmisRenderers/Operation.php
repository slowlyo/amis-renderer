<?php

namespace Slowlyo\AmisRenderers;

/**
 * 操作栏渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/operation
 *
 * @author  slowlyo
 * @version 1.4.0
 */
class Operation extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'operation');
    }

    /**
     *
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
     * 设置label
     */
    public function label($value = '')
    {
        return $this->set('label', $value);
    }

    /**
     * 占位符
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 指定为操作栏
     */
    public function type($value = 'operation')
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
