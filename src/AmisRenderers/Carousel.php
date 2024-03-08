<?php

namespace Slowlyo\AmisRenderers;

/**
 * Carousel 轮播图渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/carousel
 * 
 * @author slowlyo
 * @version 1.6.2
 */
class Carousel extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'carousel');


    }

    /**
     * 动画类型 可选值: fade | slide
     */
    public function animation($value = '')
    {
        return $this->set('animation', $value);
    }

    /**
     * 是否自动播放
     */
    public function auto($value = true)
    {
        return $this->set('auto', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 配置控件内容
     */
    public function controls($value = '')
    {
        return $this->set('controls', $value);
    }

    /**
     *  可选值: light | dark
     */
    public function controlsTheme($value = '')
    {
        return $this->set('controlsTheme', $value);
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
     * 动画时长
     */
    public function duration($value = '')
    {
        return $this->set('duration', $value);
    }

    /**
     * 设置高度
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
     * 轮播间隔时间
     */
    public function interval($value = '')
    {
        return $this->set('interval', $value);
    }

    /**
     * 配置单条呈现模板
     */
    public function itemSchema($value = '')
    {
        return $this->set('itemSchema', $value);
    }

    /**
     * 
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 配置固定值
     */
    public function options($value = '')
    {
        return $this->set('options', $value);
    }

    /**
     * 占位
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 预览图模式 可选值: contain | cover
     */
    public function thumbMode($value = '')
    {
        return $this->set('thumbMode', $value);
    }

    /**
     * 指定为轮播图类型
     */
    public function type($value = 'carousel')
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
     * 设置宽度
     */
    public function width($value = '')
    {
        return $this->set('width', $value);
    }


}
