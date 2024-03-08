<?php

namespace Slowlyo\AmisRenderers;

/**
 * Timeline
 * 
 * @author slowlyo
 * @version 1.9.0
 */
class Timeline extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'timeline');


    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 展示方向 可选值: horizontal | vertical
     */
    public function direction($value = '')
    {
        return $this->set('direction', $value);
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
     * 组件唯一 id，主要用于日志采集
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    /**
     * 节点数据
     */
    public function items($value = '')
    {
        return $this->set('items', $value);
    }

    /**
     * 文字相对于时间轴展示方向 可选值: left | right | alternate
     */
    public function mode($value = '')
    {
        return $this->set('mode', $value);
    }

    /**
     * 节点倒序
     */
    public function reverse($value = true)
    {
        return $this->set('reverse', $value);
    }

    /**
     * API 或 数据映射
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * 指定为 Timeline 时间轴渲染器
     */
    public function type($value = 'timeline')
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
