<?php

namespace Slowlyo\AmisRenderers;

/**
 * 进度展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/progress
 *
 * @author  slowlyo
 * @version 1.4.0
 */
class Progress extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'progress');
    }

    /**
     * 是否显示动画（只有在开启的时候才能看出来）
     */
    public function animate($value = true)
    {
        return $this->set('animate', $value);
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
     * 配置不通的值段，用不通的样式提示用户
     */
    public function map($value = '')
    {
        return $this->set('map', $value);
    }

    /**
     * 关联字段名。
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 占位符
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 进度外层 CSS 类名
     */
    public function progressBarClassName($value = '')
    {
        return $this->set('progressBarClassName', $value);
    }

    /**
     * 进度条 CSS 类名
     */
    public function progressClassName($value = '')
    {
        return $this->set('progressClassName', $value);
    }

    /**
     * 是否显示值
     */
    public function showLabel($value = true)
    {
        return $this->set('showLabel', $value);
    }

    /**
     * 是否显示背景间隔
     */
    public function stripe($value = true)
    {
        return $this->set('stripe', $value);
    }

    /**
     *
     */
    public function type($value = 'progress')
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