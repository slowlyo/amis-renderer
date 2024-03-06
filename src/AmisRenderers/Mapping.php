<?php

namespace Slowlyo\AmisRenderers;

/**
 * Mapping 映射展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/mapping
 * 
 * @author slowlyo
 * @version v2.3.1
 */
class Mapping extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'map');


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
     * 配置映射规则，值可以使用模板语法。当 key 为 * 时表示 else，也就是说值没有映射到任何规则时用 * 对应的值展示。
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
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 占位符
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 如果想远程拉取字典，请配置 source 为接口。
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * 指定为映射展示控件 可选值: map | mapping
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
