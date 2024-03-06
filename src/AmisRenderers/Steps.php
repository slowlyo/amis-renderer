<?php

namespace Slowlyo\AmisRenderers;

/**
 * Steps
 *
 * @author slowlyo
 * @version 1.6.1
 */
class Steps extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'steps');
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
     * 展示模式 可选值: horizontal | vertical
     */
    public function mode($value = '')
    {
        return $this->set('mode', $value);
    }

    /**
     * 变量映射
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * API 或 数据映射
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     *
     */
    public function status($value = '')
    {
        return $this->set('status', $value);
    }

    /**
     * 步骤
     */
    public function steps($value = '')
    {
        return $this->set('steps', $value);
    }

    /**
     * 指定为 Steps 步骤条渲染器
     */
    public function type($value = 'steps')
    {
        return $this->set('type', $value);
    }

    /**
     * 指定当前步骤
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
