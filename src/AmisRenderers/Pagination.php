<?php

namespace Slowlyo\AmisRenderers;

/**
 * Pagination
 *
 * @author slowlyo
 * @version 1.6.0
 */
class Pagination extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'pagination');
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
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
     * 最多显示多少个分页按钮。
     */
    public function maxButtons($value = '')
    {
        return $this->set('maxButtons', $value);
    }

    /**
     * 模式，默认显示多个分页数字，如果只想简单显示可以配置成 `simple`。 可选值: simple | normal
     */
    public function mode($value = '')
    {
        return $this->set('mode', $value);
    }

    /**
     * 是否显示快速跳转输入框
     */
    public function showPageInput($value = true)
    {
        return $this->set('showPageInput', $value);
    }

    /**
     *
     */
    public function type($value = 'pagination')
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
