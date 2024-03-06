<?php

namespace Slowlyo\AmisRenderers;

/**
 * 搜索框渲染器
 * 
 * @author slowlyo
 * @version v2.3.1
 */
class SearchBox extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'search-box');


    }

    /**
     * 外层 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 是否可清除
     */
    public function clearable($value = true)
    {
        return $this->set('clearable', $value);
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
     * 是否为加强样式
     */
    public function enhance($value = true)
    {
        return $this->set('enhance', $value);
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
     * 是否为 Mini 样式。
     */
    public function mini($value = true)
    {
        return $this->set('mini', $value);
    }

    /**
     * 关键字名字。
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
     * 是否立马搜索。
     */
    public function searchImediately($value = true)
    {
        return $this->set('searchImediately', $value);
    }

    /**
     * 指定为搜索框。文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/search-box
     */
    public function type($value = 'search-box')
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
