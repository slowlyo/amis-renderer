<?php

namespace Slowlyo\AmisRenderers;

/**
 * JSON 数据展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/json
 * 
 * @author slowlyo
 * @version v2.3.1
 */
class Json extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'json');


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
     * 是否显示数据类型
     */
    public function displayDataTypes($value = true)
    {
        return $this->set('displayDataTypes', $value);
    }

    /**
     * 设置字符串的最大展示长度，超出长度阈值的字符串将被截断，点击value可切换字符串展示方式，默认为false
     */
    public function ellipsisThreshold($value = '')
    {
        return $this->set('ellipsisThreshold', $value);
    }

    /**
     * 是否可复制
     */
    public function enableClipboard($value = true)
    {
        return $this->set('enableClipboard', $value);
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
     * 图标风格 可选值: square | circle | triangle
     */
    public function iconStyle($value = '')
    {
        return $this->set('iconStyle', $value);
    }

    /**
     * 组件唯一 id，主要用于日志采集
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    /**
     * 默认展开的级别
     */
    public function levelExpand($value = '')
    {
        return $this->set('levelExpand', $value);
    }

    /**
     * 是否可修改
     */
    public function mutable($value = true)
    {
        return $this->set('mutable', $value);
    }

    /**
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 是否显示键的引号
     */
    public function quotesOnKeys($value = true)
    {
        return $this->set('quotesOnKeys', $value);
    }

    /**
     * 是否为键排序
     */
    public function sortKeys($value = true)
    {
        return $this->set('sortKeys', $value);
    }

    /**
     * 支持从数据链取值
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * 指定为Json展示类型 可选值: json | static-json
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
