<?php

namespace Slowlyo\AmisRenderers;

/**
 * Link 链接展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/link
 * 
 * @author slowlyo
 * @version 1.5.2
 */
class Link extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'link');


    }

    /**
     * 角标
     */
    public function badge($value = '')
    {
        return $this->set('badge', $value);
    }

    /**
     * 是否新窗口打开。
     */
    public function blank($value = true)
    {
        return $this->set('blank', $value);
    }

    /**
     * 链接内容，如果不配置将显示链接地址。
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
     * a标签原生target属性
     */
    public function htmlTarget($value = '')
    {
        return $this->set('htmlTarget', $value);
    }

    /**
     * 图标
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     * 右侧图标
     */
    public function rightIcon($value = '')
    {
        return $this->set('rightIcon', $value);
    }

    /**
     * 指定为 link 链接展示控件
     */
    public function type($value = 'link')
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
