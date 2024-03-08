<?php

namespace Slowlyo\AmisRenderers;

/**
 * tpl 渲染器
 * 
 * @author slowlyo
 * @version 1.9.0
 */
class Tpl extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'tpl');


    }

    /**
     * 角标
     */
    public function badge($value = '')
    {
        return $this->set('badge', $value);
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
     * 
     */
    public function html($value = '')
    {
        return $this->set('html', $value);
    }

    /**
     * 组件唯一 id，主要用于日志采集
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    /**
     * 是否内联显示？
     */
    public function inline($value = true)
    {
        return $this->set('inline', $value);
    }

    /**
     * 
     */
    public function raw($value = '')
    {
        return $this->set('raw', $value);
    }

    /**
     * 自定义样式
     */
    public function style($value = '')
    {
        return $this->set('style', $value);
    }

    /**
     * 
     */
    public function text($value = '')
    {
        return $this->set('text', $value);
    }

    /**
     * 
     */
    public function tpl($value = '')
    {
        return $this->set('tpl', $value);
    }

    /**
     * 指定为模板渲染器。文档：https://aisuda.bce.baidu.com/amis/zh-CN/concepts/template 可选值: tpl | html
     */
    public function type($value = '')
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
