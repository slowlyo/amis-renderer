<?php

namespace Slowlyo\AmisRenderers;

/**
 * 二维码展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/qrcode
 * 
 * @author slowlyo
 * @version v2.1.0
 */
class QRCode extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'qrcode');


    }

    /**
     * 背景色
     */
    public function backgroundColor($value = '')
    {
        return $this->set('backgroundColor', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 二维码的宽高大小，默认 128
     */
    public function codeSize($value = '')
    {
        return $this->set('codeSize', $value);
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
     * 前景色
     */
    public function foregroundColor($value = '')
    {
        return $this->set('foregroundColor', $value);
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
     * 组件唯一 id，主要用于日志采集
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    /**
     * 图片配置
     */
    public function imageSettings($value = '')
    {
        return $this->set('imageSettings', $value);
    }

    /**
     * 二维码复杂级别 可选值: L | M | Q | H
     */
    public function level($value = '')
    {
        return $this->set('level', $value);
    }

    /**
     * 关联字段名。
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 占位符
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * css 类名
     */
    public function qrcodeClassName($value = '')
    {
        return $this->set('qrcodeClassName', $value);
    }

    /**
     *  可选值: qrcode | qr-code
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


}
