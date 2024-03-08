<?php

namespace Slowlyo\AmisRenderers;

/**
 * CollapseGroup 折叠渲染器，格式说明。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/collapse
 * 
 * @author slowlyo
 * @version v2.3.1
 */
class CollapseGroup extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'collapse-group');


    }

    /**
     * 手风琴模式
     */
    public function accordion($value = true)
    {
        return $this->set('accordion', $value);
    }

    /**
     * 激活面板
     */
    public function activeKey($value = '')
    {
        return $this->set('activeKey', $value);
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
     * 自定义切换图标
     */
    public function expandIcon($value = '')
    {
        return $this->set('expandIcon', $value);
    }

    /**
     * 设置图标位置 可选值: left | right
     */
    public function expandIconPosition($value = '')
    {
        return $this->set('expandIconPosition', $value);
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
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 指定为折叠器类型
     */
    public function type($value = 'collapse-group')
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
