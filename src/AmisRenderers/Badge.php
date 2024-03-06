<?php

namespace Slowlyo\AmisRenderers;

/**
 * Badge 角标。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/badge
 *
 * @author slowlyo
 * @version 1.6.1
 */
class Badge extends BaseRenderer
{
    public function __construct()
    {


    }

    /**
     * 是否显示动画
     */
    public function animation($value = true)
    {
        return $this->set('animation', $value);
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
     * 提示类型
     */
    public function level($value = '')
    {
        return $this->set('level', $value);
    }

    /**
     * 角标类型 可选值: text | dot | ribbon
     */
    public function mode($value = '')
    {
        return $this->set('mode', $value);
    }

    /**
     * 角标位置，优先级大于position
     */
    public function offset($value = '')
    {
        return $this->set('offset', $value);
    }

    /**
     * 封顶的数字值
     */
    public function overflowCount($value = '')
    {
        return $this->set('overflowCount', $value);
    }

    /**
     * 角标位置 可选值: top-right | top-left | bottom-right | bottom-left
     */
    public function position($value = '')
    {
        return $this->set('position', $value);
    }

    /**
     * 大小
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * 角标的自定义样式
     */
    public function style($value = '')
    {
        return $this->set('style', $value);
    }

    /**
     * 文本内容
     */
    public function text($value = '')
    {
        return $this->set('text', $value);
    }

    /**
     * 是否显示
     */
    public function visible($value = true)
    {
        return $this->set('visible', $value);
    }

    /**
     * 动态控制是否显示
     */
    public function visibleOn($value = '')
    {
        return $this->set('visibleOn', $value);
    }


}
