<?php

namespace Slowlyo\AmisRenderers;

/**
 * AnchorNav 锚点导航渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/anchor-nav
 * 
 * @author slowlyo
 * @version 1.10.0
 */
class AnchorNav extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'anchor-nav');


    }

    /**
     * 被激活（定位）的楼层
     */
    public function active($value = '')
    {
        return $this->set('active', $value);
    }

    /**
     * 样式名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     *  可选值: vertical | horizontal
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
     * 导航样式名
     */
    public function linkClassName($value = '')
    {
        return $this->set('linkClassName', $value);
    }

    /**
     * 楼层集合
     */
    public function links($value = '')
    {
        return $this->set('links', $value);
    }

    /**
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 楼层样式名
     */
    public function sectionClassName($value = '')
    {
        return $this->set('sectionClassName', $value);
    }

    /**
     * 指定为 AnchorNav 锚点导航渲染器
     */
    public function type($value = 'anchor-nav')
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
