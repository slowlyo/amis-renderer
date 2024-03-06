<?php

namespace Slowlyo\AmisRenderers;

/**
 * FeedbackDialog
 * 
 * @author slowlyo
 * @version 1.9.0
 */
class FeedbackDialog extends BaseRenderer
{
    public function __construct()
    {
        

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
     * 是否支持点其它区域关闭 Dialog
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
     * 
     */
    public function footer($value = '')
    {
        return $this->set('footer', $value);
    }

    /**
     * 
     */
    public function header($value = '')
    {
        return $this->set('header', $value);
    }

    /**
     * 
     */
    public function headerClassName($value = '')
    {
        return $this->set('headerClassName', $value);
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
     * 
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 是否显示关闭按钮
     */
    public function showCloseButton($value = true)
    {
        return $this->set('showCloseButton', $value);
    }

    /**
     * 是否显示错误信息
     */
    public function showErrorMsg($value = true)
    {
        return $this->set('showErrorMsg', $value);
    }

    /**
     * 是否显示 spinner
     */
    public function showLoading($value = true)
    {
        return $this->set('showLoading', $value);
    }

    /**
     * Dialog 大小 可选值: xs | sm | md | lg | xl | full
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * feedback 弹框取消是否中断后续操作
     */
    public function skipRestOnCancel($value = true)
    {
        return $this->set('skipRestOnCancel', $value);
    }

    /**
     * feedback 弹框确认是否中断后续操作
     */
    public function skipRestOnConfirm($value = true)
    {
        return $this->set('skipRestOnConfirm', $value);
    }

    /**
     * 请通过配置 title 设置标题
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
     * 可以用来配置 feedback 的出现条件
     */
    public function visibleOn($value = '')
    {
        return $this->set('visibleOn', $value);
    }


}
