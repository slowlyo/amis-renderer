<?php

namespace Slowlyo\AmisRenderers;

/**
 * Nav 导航渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/nav
 * 
 * @author slowlyo
 * @version v2.3.1
 */
class Nav extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'nav');


    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 懒加载 api，如果不配置复用 source 接口。
     */
    public function deferApi($value = '')
    {
        return $this->set('deferApi', $value);
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
     * 仅允许同层级拖拽
     */
    public function dragOnSameLevel($value = true)
    {
        return $this->set('dragOnSameLevel', $value);
    }

    /**
     * 可拖拽
     */
    public function draggable($value = true)
    {
        return $this->set('draggable', $value);
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
     * 
     */
    public function indentSize($value = '')
    {
        return $this->set('indentSize', $value);
    }

    /**
     * 更多操作菜单列表
     */
    public function itemActions($value = '')
    {
        return $this->set('itemActions', $value);
    }

    /**
     * 角标
     */
    public function itemBadge($value = '')
    {
        return $this->set('itemBadge', $value);
    }

    /**
     * 链接地址集合
     */
    public function links($value = '')
    {
        return $this->set('links', $value);
    }

    /**
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 横向导航时自动收纳配置
     */
    public function overflow($value = '')
    {
        return $this->set('overflow', $value);
    }

    /**
     * 保存排序的 api
     */
    public function saveOrderApi($value = '')
    {
        return $this->set('saveOrderApi', $value);
    }

    /**
     * 可以通过 API 拉取。
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * true 为垂直排列，false 为水平排列类似如 tabs。
     */
    public function stacked($value = true)
    {
        return $this->set('stacked', $value);
    }

    /**
     * 指定为 Nav 导航渲染器
     */
    public function type($value = 'nav')
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
