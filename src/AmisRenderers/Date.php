<?php

namespace Slowlyo\AmisRenderers;

/**
 * Date 展示渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/date
 * 
 * @author slowlyo
 * @version v2.0.2
 */
class Date extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'date');


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
     * 展示的时间格式，参考 moment 中的格式说明。
     */
    public function format($value = '')
    {
        return $this->set('format', $value);
    }

    /**
     * 显示成相对时间，比如1分钟前
     */
    public function fromNow($value = true)
    {
        return $this->set('fromNow', $value);
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
     * 占位符
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 指定为日期展示类型 可选值: date | datetime | time | static-date | static-datetime | static-time
     */
    public function type($value = '')
    {
        return $this->set('type', $value);
    }

    /**
     * 更新频率， 默认为1分钟
     */
    public function updateFrequency($value = '')
    {
        return $this->set('updateFrequency', $value);
    }

    /**
     * 值的时间格式，参考 moment 中的格式说明。
     */
    public function valueFormat($value = '')
    {
        return $this->set('valueFormat', $value);
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
