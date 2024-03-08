<?php

namespace Slowlyo\AmisRenderers;

/**
 * 栏目容器渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/portlet
 * 
 * @author slowlyo
 * @version 1.6.1
 */
class PortletTab extends BaseRenderer
{
    public function __construct()
    {
        

    }

    /**
     * 内容
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
     * 按钮图标
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     *  可选值: left | right
     */
    public function iconPosition($value = '')
    {
        return $this->set('iconPosition', $value);
    }

    /**
     * 点开时才加载卡片内容
     */
    public function mountOnEnter($value = true)
    {
        return $this->set('mountOnEnter', $value);
    }

    /**
     * 设置以后内容每次都会重新渲染
     */
    public function reload($value = true)
    {
        return $this->set('reload', $value);
    }

    /**
     * 内容
     */
    public function tab($value = '')
    {
        return $this->set('tab', $value);
    }

    /**
     * Tab 标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
    }

    /**
     * 可以在右侧配置点其他功能按钮，随着tab切换而切换
     */
    public function toolbar($value = '')
    {
        return $this->set('toolbar', $value);
    }

    /**
     * 卡片隐藏就销毁卡片节点。
     */
    public function unmountOnExit($value = true)
    {
        return $this->set('unmountOnExit', $value);
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
