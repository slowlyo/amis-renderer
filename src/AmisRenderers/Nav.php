<?php

namespace Slowlyo\AmisRenderers;

/**
 * Nav 导航渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/nav
 * 
 * @author slowlyo
 * @version 1.4.0
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
    public function indentSize($value = '')
    {
        return $this->set('indentSize', $value);
    }

    /**
     * 链接地址集合
     */
    public function links($value = '')
    {
        return $this->set('links', $value);
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
