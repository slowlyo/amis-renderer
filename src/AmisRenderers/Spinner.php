<?php

namespace Slowlyo\AmisRenderers;

/**
 * Spinner
 * 
 * @author slowlyo
 * @version v2.0.2
 */
class Spinner extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'spinner');


    }

    /**
     * 作为容器使用时内容
     */
    public function body($value = '')
    {
        return $this->set('body', $value);
    }

    /**
     * 自定义spinner的class
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 延迟显示
     */
    public function delay($value = '')
    {
        return $this->set('delay', $value);
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
     * 自定义icon
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     * 组件唯一 id，主要用于日志采集
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    /**
     * 
     */
    public function mode($value = '')
    {
        return $this->set('mode', $value);
    }

    /**
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 是否显示遮罩层
     */
    public function overlay($value = true)
    {
        return $this->set('overlay', $value);
    }

    /**
     * 控制Spinner显示与隐藏
     */
    public function show($value = true)
    {
        return $this->set('show', $value);
    }

    /**
     * spinner Icon 大小 可选值: sm | lg | 
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * spin图标位置包裹元素的自定义class
     */
    public function spinnerClassName($value = '')
    {
        return $this->set('spinnerClassName', $value);
    }

    /**
     * 作为容器使用时最外层元素的class
     */
    public function spinnerWrapClassName($value = '')
    {
        return $this->set('spinnerWrapClassName', $value);
    }

    /**
     * spinner文案
     */
    public function tip($value = '')
    {
        return $this->set('tip', $value);
    }

    /**
     * spinner文案位置 可选值: top | right | bottom | left
     */
    public function tipPlacement($value = '')
    {
        return $this->set('tipPlacement', $value);
    }

    /**
     * 组件类型
     */
    public function type($value = 'spinner')
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
