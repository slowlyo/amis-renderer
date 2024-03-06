<?php

namespace Slowlyo\AmisRenderers;

/**
 * 图片展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/image
 *
 * @author  slowlyo
 * @version 1.4.0
 */
class Image extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'image');
    }

    /**
     * 图片无法显示时的替换文本
     */
    public function alt($value = '')
    {
        return $this->set('alt', $value);
    }

    /**
     * 是否新窗口打开
     */
    public function blank($value = true)
    {
        return $this->set('blank', $value);
    }

    /**
     *
     */
    public function caption($value = '')
    {
        return $this->set('caption', $value);
    }

    /**
     * 外层 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 默认图片地址
     */
    public function defaultImage($value = '')
    {
        return $this->set('defaultImage', $value);
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
     * 是否启动放大功能。
     */
    public function enlargeAble($value = true)
    {
        return $this->set('enlargeAble', $value);
    }

    /**
     * 高度
     */
    public function height($value = '')
    {
        return $this->set('height', $value);
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
     * 链接地址
     */
    public function href($value = '')
    {
        return $this->set('href', $value);
    }

    /**
     * 链接的 target
     */
    public function htmlTarget($value = '')
    {
        return $this->set('htmlTarget', $value);
    }

    /**
     * 图片描述信息
     */
    public function imageCaption($value = '')
    {
        return $this->set('imageCaption', $value);
    }

    /**
     * 图片 css 类名
     */
    public function imageClassName($value = '')
    {
        return $this->set('imageClassName', $value);
    }

    /**
     * 图片展示模式，默认为缩略图模式、可以配置成原图模式 可选值: thumb | original
     */
    public function imageMode($value = '')
    {
        return $this->set('imageMode', $value);
    }

    /**
     * 关联字段名，也可以直接配置 src
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 大图地址，不设置用 src
     */
    public function originalSrc($value = '')
    {
        return $this->set('originalSrc', $value);
    }

    /**
     * 图片地址，如果配置了 name，这个属性不用配置。
     */
    public function src($value = '')
    {
        return $this->set('src', $value);
    }

    /**
     * 图片缩率图外层 css 类名
     */
    public function thumbClassName($value = '')
    {
        return $this->set('thumbClassName', $value);
    }

    /**
     * 预览图模式 可选值: w-full | h-full | contain | cover
     */
    public function thumbMode($value = '')
    {
        return $this->set('thumbMode', $value);
    }

    /**
     * 预览图比率 可选值: 1:1 | 4:3 | 16:9
     */
    public function thumbRatio($value = '')
    {
        return $this->set('thumbRatio', $value);
    }

    /**
     * 图片标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
    }

    /**
     * 指定为图片展示类型 可选值: image | static-image
     */
    public function type($value = '')
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

    /**
     * 宽度
     */
    public function width($value = '')
    {
        return $this->set('width', $value);
    }


}