<?php

namespace Slowlyo\AmisRenderers;

/**
 * Calendar
 * 
 * @author slowlyo
 * @version v2.0.2
 */
class Calendar extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'calendar');


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
     * 组件唯一 id，主要用于日志采集
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    /**
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 日程点击展示
     */
    public function scheduleAction($value = '')
    {
        return $this->set('scheduleAction', $value);
    }

    /**
     * 日程显示颜色自定义
     */
    public function scheduleClassNames($value = '')
    {
        return $this->set('scheduleClassNames', $value);
    }

    /**
     * 日程
     */
    public function schedules($value = '')
    {
        return $this->set('schedules', $value);
    }

    /**
     * 指定为日历选择控件
     */
    public function type($value = 'calendar')
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
