<?php

namespace Slowlyo\AmisRenderers;

/**
 * Tasks 渲染器，格式说明 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/tasks
 *
 * @author slowlyo
 * @version 1.6.2
 */
class Tasks extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'tasks');
    }

    /**
     *
     */
    public function btnClassName($value = '')
    {
        return $this->set('btnClassName', $value);
    }

    /**
     * 操作按钮文字
     */
    public function btnText($value = '')
    {
        return $this->set('btnText', $value);
    }

    /**
     *
     */
    public function canRetryStatusCode($value = '')
    {
        return $this->set('canRetryStatusCode', $value);
    }

    /**
     * 用来获取任务状态的 API，当没有进行时任务时不会发送。
     */
    public function checkApi($value = '')
    {
        return $this->set('checkApi', $value);
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
     *
     */
    public function errorStatusCode($value = '')
    {
        return $this->set('errorStatusCode', $value);
    }

    /**
     *
     */
    public function finishStatusCode($value = '')
    {
        return $this->set('finishStatusCode', $value);
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
    public function initialStatusCode($value = '')
    {
        return $this->set('initialStatusCode', $value);
    }

    /**
     * 当有任务进行中，会每隔一段时间再次检测，而时间间隔就是通过此项配置，默认 3s。
     */
    public function interval($value = '')
    {
        return $this->set('interval', $value);
    }

    /**
     *
     */
    public function items($value = '')
    {
        return $this->set('items', $value);
    }

    /**
     *
     */
    public function loadingStatusCode($value = '')
    {
        return $this->set('loadingStatusCode', $value);
    }

    /**
     *
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 操作列说明
     */
    public function operationLabel($value = '')
    {
        return $this->set('operationLabel', $value);
    }

    /**
     * 如果任务失败，且可以重试，提交的时候会使用此 API
     */
    public function reSubmitApi($value = '')
    {
        return $this->set('reSubmitApi', $value);
    }

    /**
     *
     */
    public function readyStatusCode($value = '')
    {
        return $this->set('readyStatusCode', $value);
    }

    /**
     * 备注列说明
     */
    public function remarkLabel($value = '')
    {
        return $this->set('remarkLabel', $value);
    }

    /**
     * 配置容器重试按钮 className
     */
    public function retryBtnClassName($value = '')
    {
        return $this->set('retryBtnClassName', $value);
    }

    /**
     * 重试操作按钮文字
     */
    public function retryBtnText($value = '')
    {
        return $this->set('retryBtnText', $value);
    }

    /**
     * 状态列说明
     */
    public function statusLabel($value = '')
    {
        return $this->set('statusLabel', $value);
    }

    /**
     * 状态显示对应的类名配置。
     */
    public function statusLabelMap($value = '')
    {
        return $this->set('statusLabelMap', $value);
    }

    /**
     * 状态显示对应的文字显示配置。
     */
    public function statusTextMap($value = '')
    {
        return $this->set('statusTextMap', $value);
    }

    /**
     * 提交任务使用的 API
     */
    public function submitApi($value = '')
    {
        return $this->set('submitApi', $value);
    }

    /**
     * 配置 table className
     */
    public function tableClassName($value = '')
    {
        return $this->set('tableClassName', $value);
    }

    /**
     * 任务名称列说明
     */
    public function taskNameLabel($value = '')
    {
        return $this->set('taskNameLabel', $value);
    }

    /**
     * 指定为任务类型
     */
    public function type($value = 'tasks')
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
