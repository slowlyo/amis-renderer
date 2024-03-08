<?php

namespace Slowlyo\AmisRenderers;

/**
 * Service 服务类控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/service
 * 
 * @author slowlyo
 * @version 1.5.2
 */
class Service extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'service');


    }

    /**
     * 页面初始化的时候，可以设置一个 API 让其取拉取，发送数据会携带当前 data 数据（包含地址栏参数），获取得数据会合并到 data 中，供组件内使用。
     */
    public function api($value = '')
    {
        return $this->set('api', $value);
    }

    /**
     * 内容区域
     */
    public function body($value = '')
    {
        return $this->set('body', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 通过调用外部函数来获取数据
     */
    public function dataProvider($value = '')
    {
        return $this->set('dataProvider', $value);
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
     * 
     */
    public function fetchOn($value = '')
    {
        return $this->set('fetchOn', $value);
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
     * 是否默认就拉取？
     */
    public function initFetch($value = true)
    {
        return $this->set('initFetch', $value);
    }

    /**
     * 是否默认就拉取？通过表达式来决定.
     */
    public function initFetchOn($value = '')
    {
        return $this->set('initFetchOn', $value);
    }

    /**
     * 是否默认加载 schemaApi
     */
    public function initFetchSchema($value = true)
    {
        return $this->set('initFetchSchema', $value);
    }

    /**
     * 用表达式来配置。
     */
    public function initFetchSchemaOn($value = '')
    {
        return $this->set('initFetchSchemaOn', $value);
    }

    /**
     * 是否轮询拉取
     */
    public function interval($value = '')
    {
        return $this->set('interval', $value);
    }

    /**
     * 
     */
    public function messages($value = '')
    {
        return $this->set('messages', $value);
    }

    /**
     * 
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 用来获取远程 Schema 的 api
     */
    public function schemaApi($value = '')
    {
        return $this->set('schemaApi', $value);
    }

    /**
     * 是否静默拉取
     */
    public function silentPolling($value = true)
    {
        return $this->set('silentPolling', $value);
    }

    /**
     * 关闭轮询的条件。
     */
    public function stopAutoRefreshWhen($value = '')
    {
        return $this->set('stopAutoRefreshWhen', $value);
    }

    /**
     * 指定为 Service 数据拉取控件。
     */
    public function type($value = 'service')
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
     * WebScocket 地址，用于实时获取数据
     */
    public function ws($value = '')
    {
        return $this->set('ws', $value);
    }


}
