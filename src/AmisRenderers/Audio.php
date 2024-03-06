<?php

namespace Slowlyo\AmisRenderers;

/**
 * Audio 音频渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/audio
 *
 * @author  slowlyo
 * @version 1.4.0
 */
class Audio extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'audio');
    }

    /**
     * 是否自动播放
     */
    public function autoPlay($value = true)
    {
        return $this->set('autoPlay', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 可以配置控制器
     */
    public function controls($value = '')
    {
        return $this->set('controls', $value);
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
     * 是否是内联模式
     */
    public function inline($value = true)
    {
        return $this->set('inline', $value);
    }

    /**
     * 是否循环播放
     */
    public function loop($value = true)
    {
        return $this->set('loop', $value);
    }

    /**
     * 配置可选播放倍速
     */
    public function rates($value = '')
    {
        return $this->set('rates', $value);
    }

    /**
     * "视频播放地址, 支持 $ 取变量。
     */
    public function src($value = '')
    {
        return $this->set('src', $value);
    }

    /**
     * 指定为音频播放器
     */
    public function type($value = 'audio')
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