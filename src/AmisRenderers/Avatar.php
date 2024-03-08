<?php

namespace Slowlyo\AmisRenderers;

/**
 * Avatar
 * 
 * @author slowlyo
 * @version 1.6.1
 */
class Avatar extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'avatar');
$this->set('crossOrigin', 'anonymous');


    }

    /**
     * 图片无法显示时的替换文字地址
     */
    public function alt($value = '')
    {
        return $this->set('alt', $value);
    }

    /**
     * 角标
     */
    public function badge($value = '')
    {
        return $this->set('badge', $value);
    }

    /**
     * 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 图片CORS属性 可选值: anonymous | use-credentials | 
     */
    public function crossOrigin($value = '')
    {
        return $this->set('crossOrigin', $value);
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
     * 图片是否允许拖动
     */
    public function draggable($value = true)
    {
        return $this->set('draggable', $value);
    }

    /**
     * 图片相对于容器的缩放方式 可选值: fill | contain | cover | none | scale-down
     */
    public function fit($value = '')
    {
        return $this->set('fit', $value);
    }

    /**
     * 字符类型距离左右两侧边界单位像素
     */
    public function gap($value = '')
    {
        return $this->set('gap', $value);
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
     * 图标
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     * 图片加载失败的是否默认处理，字符串函数
     */
    public function onError($value = '')
    {
        return $this->set('onError', $value);
    }

    /**
     * 形状 可选值: circle | square | rounded
     */
    public function shape($value = '')
    {
        return $this->set('shape', $value);
    }

    /**
     * 大小
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * 图片地址
     */
    public function src($value = '')
    {
        return $this->set('src', $value);
    }

    /**
     * 自定义样式
     */
    public function style($value = '')
    {
        return $this->set('style', $value);
    }

    /**
     * 文本
     */
    public function text($value = '')
    {
        return $this->set('text', $value);
    }

    /**
     * 
     */
    public function type($value = 'avatar')
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
