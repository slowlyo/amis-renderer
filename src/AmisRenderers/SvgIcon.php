<?php

namespace Slowlyo\AmisRenderers;

/**
 * SvgIcon
 * 
 * @author slowlyo
 * @version v3.3.0
 */
class SvgIcon extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'custom-svg-icon');


    }

    /**
     * 设置图标的类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 设置图标的名称
     */
    public function icon($value = '')
    {
        return $this->set('icon', $value);
    }

    /**
     * 指定为 custom-svg-icon 渲染器。
     */
    public function type($value = 'custom-svg-icon')
    {
        return $this->set('type', $value);
    }


}
