<?php

namespace Slowlyo\AmisRenderers;

/**
 * TableSchema2
 * 
 * @author slowlyo
 * @version v2.3.0
 */
class TableSchema2 extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'table2');


    }

    /**
     * 操作列配置
     */
    public function actions($value = '')
    {
        return $this->set('actions', $value);
    }

    /**
     * 是否展示边框
     */
    public function bordered($value = true)
    {
        return $this->set('bordered', $value);
    }

    /**
     * 数据源嵌套自定义字段名
     */
    public function childrenColumnName($value = '')
    {
        return $this->set('childrenColumnName', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 表格列配置
     */
    public function columns($value = '')
    {
        return $this->set('columns', $value);
    }

    /**
     * 表格可自定义列
     */
    public function columnsTogglable($value = true)
    {
        return $this->set('columnsTogglable', $value);
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
     * 表格行可展开配置
     */
    public function expandable($value = true)
    {
        return $this->set('expandable', $value);
    }

    /**
     * 指定表尾
     */
    public function footer($value = '')
    {
        return $this->set('footer', $value);
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
     * 行角标内容
     */
    public function itemBadge($value = '')
    {
        return $this->set('itemBadge', $value);
    }

    /**
     * 翻页是否保存数据
     */
    public function keepItemSelectionOnPageChange($value = true)
    {
        return $this->set('keepItemSelectionOnPageChange', $value);
    }

    /**
     * 嵌套展开记录的唯一标识
     */
    public function keyField($value = '')
    {
        return $this->set('keyField', $value);
    }

    /**
     * 是否固定内容行高度
     */
    public function lineHeight($value = '')
    {
        return $this->set('lineHeight', $value);
    }

    /**
     * 加载中
     */
    public function loading($value = '')
    {
        return $this->set('loading', $value);
    }

    /**
     * 批量操作最大限制数
     */
    public function maxKeepItemSelectionLength($value = '')
    {
        return $this->set('maxKeepItemSelectionLength', $value);
    }

    /**
     * 接口报错信息配置
     */
    public function messages($value = '')
    {
        return $this->set('messages', $value);
    }

    /**
     * 事件动作配置
     */
    public function onEvent($value = '')
    {
        return $this->set('onEvent', $value);
    }

    /**
     * 指定挂载dom
     */
    public function popOverContainer($value = '')
    {
        return $this->set('popOverContainer', $value);
    }

    /**
     * 快速编辑关键字段
     */
    public function primaryField($value = '')
    {
        return $this->set('primaryField', $value);
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
     * 重新加载的组件名称
     */
    public function reload($value = '')
    {
        return $this->set('reload', $value);
    }

    /**
     * 自定义行样式
     */
    public function rowClassNameExpr($value = '')
    {
        return $this->set('rowClassNameExpr', $value);
    }

    /**
     * 表格可选择配置
     */
    public function rowSelection($value = '')
    {
        return $this->set('rowSelection', $value);
    }

    /**
     * 是否展示行角标
     */
    public function showBadge($value = true)
    {
        return $this->set('showBadge', $value);
    }

    /**
     * 是否展示表头
     */
    public function showHeader($value = true)
    {
        return $this->set('showHeader', $value);
    }

    /**
     * 表格数据源
     */
    public function source($value = '')
    {
        return $this->set('source', $value);
    }

    /**
     * 粘性头部
     */
    public function sticky($value = true)
    {
        return $this->set('sticky', $value);
    }

    /**
     * 表格标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
    }

    /**
     * 指定为表格类型
     */
    public function type($value = 'table2')
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
