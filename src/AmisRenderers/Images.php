<?php

namespace Slowlyo\AmisRenderers;

/**
 * 图片集展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/images
 * 
 * @author slowlyo
 * @version 1.7.0
 */
class Images extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'images');


    }

    /**
     * 外层 CSS 类名
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
     * 配置值的连接符
     */
    public function delimiter($value = '')
    {
        return $this->set('delimiter', $value);
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
     * 列表 CSS 类名
     */
    public function listClassName($value = '')
    {
        return $this->set('listClassName', $value);
    }

    /**
     * 关联字段名，也可以直接配置 src
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 
     */
    public function options($value = '')
    {
        return $this->set('options', $value);
    }

    /**
     * 大图地址，不设置用 src 属性，如果不是请配置，如：${imageOriginUrl}
     */
    public function originalSrc($value = '')
    {
        return $this->set('originalSrc', $value);
    }

    /**
     * 列表为空时显示
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 是否显示尺寸。
     */
    public function showDimensions($value = true)
    {
        return $this->set('showDimensions', $value);
    }

    /**
     * 
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * 图片地址，默认读取数据中的 image 属性，如果不是请配置 ,如  ${imageUrl}
     */
    public function src($value = '')
    {
        return $this->set('src', $value);
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
     * 指定为图片集渲染器 可选值: images | static-images
     */
    public function type($value = '')
    {
        return $this->set('type', $value);
    }

    /**
     * 
     */
    public function value($value = '')
    {
        return $this->set('value', $value);
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
