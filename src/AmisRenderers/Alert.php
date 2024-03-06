<?php

namespace Slowlyo\AmisRenderers;

/**
 * Alert 提示渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/alert
 *
 * @author slowlyo
 * @version 1.6.1
 */
class Alert extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'alert');
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
     * 关闭按钮CSS类名
     */
    public function closeButtonClassName($value = '')
    {
        return $this->set('closeButtonClassName', $value);
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
     * 左侧图标
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     * 图标CSS类名
     */
    public function iconClassName($value = '')
    {
        return $this->set('iconClassName', $value);
    }

    /**
     * 提示类型 可选值: info | warning | success | error | danger
     */
    public function level($value = '')
    {
        return $this->set('level', $value);
    }

    /**
     * 是否显示关闭按钮
     */
    public function showCloseButton($value = true)
    {
        return $this->set('showCloseButton', $value);
    }

    /**
     * 是否显示ICON
     */
    public function showIcon($value = true)
    {
        return $this->set('showIcon', $value);
    }

    /**
     * 提示框标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
    }

    /**
     * 指定为提示框类型
     */
    public function type($value = 'alert')
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
