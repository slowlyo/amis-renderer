<?php

namespace Slowlyo\AmisRenderers;

/**
 * 二维布局渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/grid-2d
 * 
 * @author slowlyo
 * @version 1.6.3
 */
class Grid2D extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'grid-2d');


    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 列数量，默认是 12
     */
    public function cols($value = '')
    {
        return $this->set('cols', $value);
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
     * 格子间距，默认 0，包含行和列
     */
    public function gap($value = '')
    {
        return $this->set('gap', $value);
    }

    /**
     * 格子行级别的间距，如果不设置就和 gap 一样
     */
    public function gapRow($value = '')
    {
        return $this->set('gapRow', $value);
    }

    /**
     * 每个格子的配置
     */
    public function grids($value = '')
    {
        return $this->set('grids', $value);
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
     * 单位行高度，默认 50 px
     */
    public function rowHeight($value = '')
    {
        return $this->set('rowHeight', $value);
    }

    /**
     * 指定为 grid-2d 展示类型
     */
    public function type($value = 'grid-2d')
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
     * grid 2d 容器宽度，默认是 auto
     */
    public function width($value = '')
    {
        return $this->set('width', $value);
    }


}
