<?php

namespace Slowlyo\AmisRenderers;

/**
 * Tab
 *
 * @author  slowlyo
 * @version 1.4.0
 */
class Tab extends BaseRenderer
{
    public function __construct()
    {


    }

    /**
     * 徽标
     */
    public function badge($value = '')
    {
        return $this->set('badge', $value);
    }

    /**
     * 内容
     */
    public function body($value = '')
    {
        return $this->set('body', $value);
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
     * 设置以后将跟url的hash对应
     */
    public function hash($value = '')
    {
        return $this->set('hash', $value);
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
     * 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
     */
    public function horizontal($value = '')
    {
        return $this->set('horizontal', $value);
    }

    /**
     * 按钮图标
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     *  可选值: left | right
     */
    public function iconPosition($value = '')
    {
        return $this->set('iconPosition', $value);
    }

    /**
     * 配置子表单项默认的展示方式。 可选值: normal | inline | horizontal
     */
    public function mode($value = '')
    {
        return $this->set('mode', $value);
    }

    /**
     * 点开时才加载卡片内容
     */
    public function mountOnEnter($value = true)
    {
        return $this->set('mountOnEnter', $value);
    }

    /**
     * 设置以后内容每次都会重新渲染
     */
    public function reload($value = true)
    {
        return $this->set('reload', $value);
    }

    /**
     * 内容
     */
    public function tab($value = '')
    {
        return $this->set('tab', $value);
    }

    /**
     * Tab 标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
    }

    /**
     * 卡片隐藏就销毁卡片节点。
     */
    public function unmountOnExit($value = true)
    {
        return $this->set('unmountOnExit', $value);
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