<?php

namespace Slowlyo\AmisRenderers;

/**
 * 选项卡控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/tabs
 * 
 * @author slowlyo
 * @version 1.4.0
 */
class Tabs extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'tabs');


    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 内容类名
     */
    public function contentClassName($value = '')
    {
        return $this->set('contentClassName', $value);
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
     * 链接外层类名
     */
    public function linksClassName($value = '')
    {
        return $this->set('linksClassName', $value);
    }

    /**
     * 卡片是否只有在点开的时候加载？
     */
    public function mountOnEnter($value = true)
    {
        return $this->set('mountOnEnter', $value);
    }

    /**
     * 是否支持溢出滚动
     */
    public function scrollable($value = true)
    {
        return $this->set('scrollable', $value);
    }

    /**
     * 关联已有数据，选项卡直接根据目标数据重复。
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
     */
    public function subFormHorizontal($value = '')
    {
        return $this->set('subFormHorizontal', $value);
    }

    /**
     * 配置子表单项默认的展示方式。 可选值: normal | inline | horizontal
     */
    public function subFormMode($value = '')
    {
        return $this->set('subFormMode', $value);
    }

    /**
     * 选项卡成员。当配置了 source 时，选项卡成员，将会根据目标数据进行重复。
     */
    public function tabs($value = '')
    {
        return $this->set('tabs', $value);
    }

    /**
     * 类名
     */
    public function tabsClassName($value = '')
    {
        return $this->set('tabsClassName', $value);
    }

    /**
     * 展示形式 可选值:  | line | card | radio | vertical | tiled
     */
    public function tabsMode($value = '')
    {
        return $this->set('tabsMode', $value);
    }

    /**
     * 可以在右侧配置点其他功能按钮。
     */
    public function toolbar($value = '')
    {
        return $this->set('toolbar', $value);
    }

    /**
     * 
     */
    public function type($value = 'tabs')
    {
        return $this->set('type', $value);
    }

    /**
     * 卡片隐藏的时候是否销毁卡片内容
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
