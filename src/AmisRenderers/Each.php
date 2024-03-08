<?php

namespace Slowlyo\AmisRenderers;

/**
 * Each 循环功能渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/each
 * 
 * @author slowlyo
 * @version 1.5.3
 */
class Each extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'each');


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
    public function items($value = '')
    {
        return $this->set('items', $value);
    }

    /**
     * 关联字段名
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 关联字段名 支持数据映射
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * 指定为each展示类型
     */
    public function type($value = 'each')
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
