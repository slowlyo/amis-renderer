<?php

namespace Slowlyo\AmisRenderers;

/**
 * Collapse 折叠渲染器，格式说明。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/collapse
 *
 * @author  slowlyo
 * @version 1.4.0
 */
class Collapse extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'collapse');
        $this->set('titlePosition', 'top');
    }

    /**
     * 内容区域
     */
    public function body($value = '')
    {
        return $this->set('body', $value);
    }

    /**
     * 配置 Body 容器 className
     */
    public function bodyClassName($value = '')
    {
        return $this->set('bodyClassName', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 是否可折叠
     */
    public function collapsable($value = true)
    {
        return $this->set('collapsable', $value);
    }

    /**
     * 收起的标题
     */
    public function collapseTitle($value = '')
    {
        return $this->set('collapseTitle', $value);
    }

    /**
     * 默认是否折叠
     */
    public function collapsed($value = true)
    {
        return $this->set('collapsed', $value);
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
     * 标题 CSS 类名
     */
    public function headingClassName($value = '')
    {
        return $this->set('headingClassName', $value);
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
     * 点开时才加载内容
     */
    public function mountOnEnter($value = true)
    {
        return $this->set('mountOnEnter', $value);
    }

    /**
     * 控件大小 可选值: xs | sm | md | lg | base
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * 标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
    }

    /**
     * 标题展示位置 可选值: top | bottom
     */
    public function titlePosition($value = '')
    {
        return $this->set('titlePosition', $value);
    }

    /**
     * 指定为折叠器类型
     */
    public function type($value = 'collapse')
    {
        return $this->set('type', $value);
    }

    /**
     * 卡片隐藏就销毁内容。
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
