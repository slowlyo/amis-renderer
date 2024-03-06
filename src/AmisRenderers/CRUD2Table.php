<?php

namespace Slowlyo\AmisRenderers;

/**
 * CRUD2Table
 * 
 * @author slowlyo
 * @version v2.0.0
 */
class CRUD2Table extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'crud2');


    }

    /**
     * 是否固定表头
     */
    public function affixHeader($value = true)
    {
        return $this->set('affixHeader', $value);
    }

    /**
     * 底部总结行
     */
    public function affixRow($value = '')
    {
        return $this->set('affixRow', $value);
    }

    /**
     * 初始化数据 API
     */
    public function api($value = '')
    {
        return $this->set('api', $value);
    }

    /**
     * 内容区域占满屏幕剩余空间
     */
    public function autoFillHeight($value = true)
    {
        return $this->set('autoFillHeight', $value);
    }

    /**
     * 开启查询区域，会根据列元素的searchable属性值，自动生成查询条件表单
     */
    public function autoGenerateFilter($value = true)
    {
        return $this->set('autoGenerateFilter', $value);
    }

    /**
     * 是否自动跳顶部，当切分页的时候。
     */
    public function autoJumpToTopOnPagerChange($value = true)
    {
        return $this->set('autoJumpToTopOnPagerChange', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 表格的列信息
     */
    public function columns($value = '')
    {
        return $this->set('columns', $value);
    }

    /**
     * 展示列显示开关，自动即：列数量大于或等于5个时自动开启
     */
    public function columnsTogglable($value = true)
    {
        return $this->set('columnsTogglable', $value);
    }

    /**
     * 合并单元格配置，配置从第几列开始合并。
     */
    public function combineFromIndex($value = '')
    {
        return $this->set('combineFromIndex', $value);
    }

    /**
     * 合并单元格配置，配置数字表示从左到右的多少列自动合并单元格。
     */
    public function combineNum($value = '')
    {
        return $this->set('combineNum', $value);
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
     * 是否开启底部展示功能，适合移动端展示
     */
    public function footable($value = true)
    {
        return $this->set('footable', $value);
    }

    /**
     * 底部外层 CSS 类名
     */
    public function footerClassName($value = '')
    {
        return $this->set('footerClassName', $value);
    }

    /**
     * 底部区域
     */
    public function footerToolbar($value = '')
    {
        return $this->set('footerToolbar', $value);
    }

    /**
     * 顶部外层 CSS 类名
     */
    public function headerClassName($value = '')
    {
        return $this->set('headerClassName', $value);
    }

    /**
     * 顶部区域
     */
    public function headerToolbar($value = '')
    {
        return $this->set('headerToolbar', $value);
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
     * 是否隐藏快速编辑的按钮。
     */
    public function hideQuickSaveBtn($value = true)
    {
        return $this->set('hideQuickSaveBtn', $value);
    }

    /**
     * 组件唯一 id，主要用于日志采集
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
    }

    /**
     * 设置自动刷新时间
     */
    public function interval($value = '')
    {
        return $this->set('interval', $value);
    }

    /**
     * 行角标
     */
    public function itemBadge($value = '')
    {
        return $this->set('itemBadge', $value);
    }

    /**
     * 翻页时是否保留用户已选的数据
     */
    public function keepItemSelectionOnPageChange($value = true)
    {
        return $this->set('keepItemSelectionOnPageChange', $value);
    }

    /**
     * 是否为前端单次加载模式，可以用来实现前端分页。
     */
    public function loadDataOnce($value = true)
    {
        return $this->set('loadDataOnce', $value);
    }

    /**
     * 数据展示模式 无限加载 or 分页 可选值: more | pagination
     */
    public function loadType($value = '')
    {
        return $this->set('loadType', $value);
    }

    /**
     * 指定内容区的展示模式。
     */
    public function mode($value = 'table')
    {
        return $this->set('mode', $value);
    }

    /**
     * 是否可以多选数据，仅当selectable为 true 时生效
     */
    public function multiple($value = true)
    {
        return $this->set('multiple', $value);
    }

    /**
     * 
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
     * 设置分页页码字段名。
     */
    public function pageField($value = '')
    {
        return $this->set('pageField', $value);
    }

    /**
     * 无限加载时，根据此项设置其每页加载数量，可以不限制
     */
    public function perPage($value = '')
    {
        return $this->set('perPage', $value);
    }

    /**
     * 设置分页一页显示的多少条数据的字段名。
     */
    public function perPageField($value = '')
    {
        return $this->set('perPageField', $value);
    }

    /**
     * 占位符
     */
    public function placeholder($value = '')
    {
        return $this->set('placeholder', $value);
    }

    /**
     * 顶部总结行
     */
    public function prefixRow($value = '')
    {
        return $this->set('prefixRow', $value);
    }

    /**
     * 快速编辑后用来批量保存的 API
     */
    public function quickSaveApi($value = '')
    {
        return $this->set('quickSaveApi', $value);
    }

    /**
     * 快速编辑配置成及时保存时使用的 API
     */
    public function quickSaveItemApi($value = '')
    {
        return $this->set('quickSaveItemApi', $value);
    }

    /**
     * 是否可调整列宽
     */
    public function resizable($value = true)
    {
        return $this->set('resizable', $value);
    }

    /**
     * 行样式表表达式
     */
    public function rowClassNameExpr($value = '')
    {
        return $this->set('rowClassNameExpr', $value);
    }

    /**
     * 保存排序的 api
     */
    public function saveOrderApi($value = '')
    {
        return $this->set('saveOrderApi', $value);
    }

    /**
     * 是否可以选择数据，外部事件动作
     */
    public function selectable($value = true)
    {
        return $this->set('selectable', $value);
    }

    /**
     * 是否显示底部
     */
    public function showFooter($value = true)
    {
        return $this->set('showFooter', $value);
    }

    /**
     * 是否显示头部
     */
    public function showHeader($value = true)
    {
        return $this->set('showHeader', $value);
    }

    /**
     * 是否展示已选数据区域，仅当selectable为 true 时生效
     */
    public function showSelection($value = true)
    {
        return $this->set('showSelection', $value);
    }

    /**
     * 静默拉取
     */
    public function silentPolling($value = true)
    {
        return $this->set('silentPolling', $value);
    }

    /**
     * 也可以直接从环境变量中读取，但是不太推荐。
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * 
     */
    public function stopAutoRefreshWhen($value = '')
    {
        return $this->set('stopAutoRefreshWhen', $value);
    }

    /**
     * 是否将过滤条件的参数同步到地址栏,默认为true
     */
    public function syncLocation($value = true)
    {
        return $this->set('syncLocation', $value);
    }

    /**
     * 是否将接口返回的内容自动同步到地址栏，前提是开启了同步地址栏。
     */
    public function syncResponse2Query($value = true)
    {
        return $this->set('syncResponse2Query', $value);
    }

    /**
     * 表格 CSS 类名
     */
    public function tableClassName($value = '')
    {
        return $this->set('tableClassName', $value);
    }

    /**
     * 标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
    }

    /**
     * 工具栏 CSS 类名
     */
    public function toolbarClassName($value = '')
    {
        return $this->set('toolbarClassName', $value);
    }

    /**
     * 指定为 CRUD2 渲染器。
     */
    public function type($value = 'crud2')
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
