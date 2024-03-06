<?php

namespace Slowlyo\AmisRenderers;

/**
 * 视频播放器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/video
 *
 * @author  slowlyo
 * @version 1.4.0
 */
class Video extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'video');
    }

    /**
     * 视频比率 可选值: auto | 4:3 | 16:9
     */
    public function aspectRatio($value = '')
    {
        return $this->set('aspectRatio', $value);
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
     * 如果显示切帧，通过此配置项可以控制每行显示多少帧
     */
    public function columnsCount($value = '')
    {
        return $this->set('columnsCount', $value);
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
     * 设置后，可以显示切帧.点击帧的时候会将视频跳到对应时间。frames: {  '01:22': 'http://domain/xxx.jpg' }
     */
    public function frames($value = '')
    {
        return $this->set('frames', $value);
    }

    /**
     * 配置帧列表容器className
     */
    public function framesClassName($value = '')
    {
        return $this->set('framesClassName', $value);
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
     * 如果是实时的，请标记一下
     */
    public function isLive($value = true)
    {
        return $this->set('isLive', $value);
    }

    /**
     * 跳转到帧时，往前多少秒。
     */
    public function jumpBufferDuration($value = '')
    {
        return $this->set('jumpBufferDuration', $value);
    }

    /**
     * 点击帧画面时是否跳转视频对应的点
     */
    public function jumpFrame($value = true)
    {
        return $this->set('jumpFrame', $value);
    }

    /**
     * 是否初始静音
     */
    public function muted($value = true)
    {
        return $this->set('muted', $value);
    }

    /**
     * 配置播放器 className
     */
    public function playerClassName($value = '')
    {
        return $this->set('playerClassName', $value);
    }

    /**
     * 视频封面地址
     */
    public function poster($value = '')
    {
        return $this->set('poster', $value);
    }

    /**
     * 视频速率
     */
    public function rates($value = '')
    {
        return $this->set('rates', $value);
    }

    /**
     * 是否将视频和封面分开显示
     */
    public function splitPoster($value = true)
    {
        return $this->set('splitPoster', $value);
    }

    /**
     * 视频播放地址
     */
    public function src($value = '')
    {
        return $this->set('src', $value);
    }

    /**
     * 指定为视频类型
     */
    public function type($value = 'video')
    {
        return $this->set('type', $value);
    }

    /**
     * 视频类型如： video/x-flv
     */
    public function videoType($value = '')
    {
        return $this->set('videoType', $value);
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