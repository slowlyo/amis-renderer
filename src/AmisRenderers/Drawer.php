<?php

namespace Slowlyo\AmisRenderers;

/**
 * Drawer 抽出式弹框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/drawer
 * 
 * @author slowlyo
 * @version 1.6.0
 */
class Drawer extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'drawer');


    }

    /**
     * 默认不用填写，自动会创建确认和取消按钮。
     */
    public function actions($value = '')
    {
        return $this->set('actions', $value);
    }

    /**
     * 内容区域
     */
    public function body($value = '')
    {
        return $this->set('body', $value);
    }

    /**
     * 配置 Body 容器 className
     */
    public function bodyClassName($value = '')
    {
        return $this->set('bodyClassName', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 是否支持按 ESC 关闭 Dialog
     */
    public function closeOnEsc($value = true)
    {
        return $this->set('closeOnEsc', $value);
    }

    /**
     * 点击外部的时候是否关闭弹框。
     */
    public function closeOnOutside($value = true)
    {
        return $this->set('closeOnOutside', $value);
    }

    /**
     * 影响自动生成的按钮，如果自己配置了按钮这个配置无效。
     */
    public function confirm($value = true)
    {
        return $this->set('confirm', $value);
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
     * 底部
     */
    public function footer($value = '')
    {
        return $this->set('footer', $value);
    }

    /**
     * 头部
     */
    public function header($value = '')
    {
        return $this->set('header', $value);
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
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 是否显示蒙层
     */
    public function overlay($value = true)
    {
        return $this->set('overlay', $value);
    }

    /**
     * 从什么位置弹出 可选值: left | right | top | bottom
     */
    public function position($value = '')
    {
        return $this->set('position', $value);
    }

    /**
     * 是否可以拖动弹窗大小
     */
    public function resizable($value = true)
    {
        return $this->set('resizable', $value);
    }

    /**
     * 是否显示错误信息
     */
    public function showErrorMsg($value = true)
    {
        return $this->set('showErrorMsg', $value);
    }

    /**
     * Dialog 大小 可选值: xs | sm | md | lg | full
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * 请通过配置 title 设置标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
    }

    /**
     * 
     */
    public function type($value = 'drawer')
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
