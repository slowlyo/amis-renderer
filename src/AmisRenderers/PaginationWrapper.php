<?php

namespace Slowlyo\AmisRenderers;

/**
 * 分页容器功能性渲染器。详情请见：https://aisuda.bce.baidu.com/amis/zh-CN/components/pagination-wrapper
 * 
 * @author slowlyo
 * @version v2.3.0
 */
class PaginationWrapper extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'pagination-wrapper');


    }

    /**
     * 内容区域
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
     * 输入字段名
     */
    public function inputName($value = '')
    {
        return $this->set('inputName', $value);
    }

    /**
     * 最多显示多少个分页按钮。
     */
    public function maxButtons($value = '')
    {
        return $this->set('maxButtons', $value);
    }

    /**
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 输出字段名
     */
    public function outputName($value = '')
    {
        return $this->set('outputName', $value);
    }

    /**
     * 每页显示多条数据。
     */
    public function perPage($value = '')
    {
        return $this->set('perPage', $value);
    }

    /**
     * 分页显示位置，如果配置为 none 则需要自己在内容区域配置 pagination 组件，否则不显示。 可选值: top | bottom | none
     */
    public function position($value = '')
    {
        return $this->set('position', $value);
    }

    /**
     * 是否显示快速跳转输入框
     */
    public function showPageInput($value = true)
    {
        return $this->set('showPageInput', $value);
    }

    /**
     * 指定为分页容器功能性渲染器
     */
    public function type($value = 'pagination-wrapper')
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
