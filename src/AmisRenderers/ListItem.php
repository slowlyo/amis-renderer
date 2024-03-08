<?php

namespace Slowlyo\AmisRenderers;

/**
 * ListItem
 * 
 * @author slowlyo
 * @version 1.6.1
 */
class ListItem extends BaseRenderer
{
    public function __construct()
    {
        

    }

    /**
     * 
     */
    public function actions($value = '')
    {
        return $this->set('actions', $value);
    }

    /**
     * 操作位置，默认在右侧，可以设置成左侧。 可选值: left | right
     */
    public function actionsPosition($value = '')
    {
        return $this->set('actionsPosition', $value);
    }

    /**
     * 图片地址
     */
    public function avatar($value = '')
    {
        return $this->set('avatar', $value);
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
     * 描述
     */
    public function desc($value = '')
    {
        return $this->set('desc', $value);
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
     * tooltip 说明
     */
    public function remark($value = '')
    {
        return $this->set('remark', $value);
    }

    /**
     * 副标题
     */
    public function subTitle($value = '')
    {
        return $this->set('subTitle', $value);
    }

    /**
     * 标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
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
