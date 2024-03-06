<?php

namespace Slowlyo\AmisRenderers;

/**
 * JSON 数据展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/json
 *
 * @author  slowlyo
 * @version 1.4.0
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
