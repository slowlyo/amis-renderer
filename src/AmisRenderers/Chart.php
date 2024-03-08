<?php

namespace Slowlyo\AmisRenderers;

/**
 * Chart 图表渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/carousel
 * 
 * @author slowlyo
 * @version 1.6.0
 */
class Chart extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'chart');


    }

    /**
     * 图表配置接口
     */
    public function api($value = '')
    {
        return $this->set('api', $value);
    }

    /**
     * Chart 主题配置
     */
    public function chartTheme($value = '')
    {
        return $this->set('chartTheme', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 点击行为配置，可以用来满足下钻操作等。
     */
    public function clickAction($value = '')
    {
        return $this->set('clickAction', $value);
    }

    /**
     * 配置echart的config，支持数据映射。如果用了数据映射，为了同步更新，请设置 trackExpression
     */
    public function config($value = '')
    {
        return $this->set('config', $value);
    }

    /**
     * 
     */
    public function dataFilter($value = '')
    {
        return $this->set('dataFilter', $value);
    }

    /**
     * 默认开启 Config 中的数据映射，如果想关闭，请开启此功能。
     */
    public function disableDataMapping($value = true)
    {
        return $this->set('disableDataMapping', $value);
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
     * 高度设置
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
     * 是否初始加载。
     */
    public function initFetch($value = true)
    {
        return $this->set('initFetch', $value);
    }

    /**
     * 是否初始加载用表达式来配置
     */
    public function initFetchOn($value = '')
    {
        return $this->set('initFetchOn', $value);
    }

    /**
     * 刷新时间
     */
    public function interval($value = '')
    {
        return $this->set('interval', $value);
    }

    /**
     * 
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 默认配置时追加的，如果更新配置想完全替换配置请配置为 true.
     */
    public function replaceChartOption($value = true)
    {
        return $this->set('replaceChartOption', $value);
    }

    /**
     * 
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * style样式
     */
    public function style($value = '')
    {
        return $this->set('style', $value);
    }

    /**
     * 跟踪表达式，如果这个表达式的运行结果发生变化了，则会更新 Echart，当 config 中用了数据映射时有用。
     */
    public function trackExpression($value = '')
    {
        return $this->set('trackExpression', $value);
    }

    /**
     * 指定为 chart 类型
     */
    public function type($value = 'chart')
    {
        return $this->set('type', $value);
    }

    /**
     * 不可见的时候隐藏
     */
    public function unMountOnHidden($value = true)
    {
        return $this->set('unMountOnHidden', $value);
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
     * 宽度设置
     */
    public function width($value = '')
    {
        return $this->set('width', $value);
    }


}
