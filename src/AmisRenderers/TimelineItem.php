<?php

namespace Slowlyo\AmisRenderers;

/**
 * TimelineItem
 *
 * @author  slowlyo
 * @version 1.6.2
 */
class TimelineItem extends BaseRenderer
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
     * 时间点圆圈颜色
     */
    public function color($value = '')
    {
        return $this->set('color', $value);
    }

    /**
     * 详细内容
     */
    public function detail($value = '')
    {
        return $this->set('detail', $value);
    }

    /**
     * detail折叠时文案
     */
    public function detailCollapsedText($value = '')
    {
        return $this->set('detailCollapsedText', $value);
    }

    /**
     * detail展开时文案
     */
    public function detailExpandedText($value = '')
    {
        return $this->set('detailExpandedText', $value);
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
     * 时间点
     */
    public function time($value = '')
    {
        return $this->set('time', $value);
    }

    /**
     * 时间节点标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
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