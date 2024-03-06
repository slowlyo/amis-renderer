<?php

namespace Slowlyo\AmisRenderers;

/**
 * FieldSet 表单项集合 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/fieldset
 * 
 * @author slowlyo
 * @version 1.7.0
 */
class FieldSetControl extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'fieldset');
$this->set('titlePosition', 'top');


    }

    /**
     * 内容区域
     */
    public function body($value = '')
    {
        return $this->set('body', $value);
    }

    /**
     * 配置 Body 容器 className
     */
    public function bodyClassName($value = '')
    {
        return $this->set('bodyClassName', $value);
    }

    /**
     * 容器 css 类名
     */
    public function className($value = '')
    {
        return $this->set('className', $value);
    }

    /**
     * 表单项隐藏时，是否在当前 Form 中删除掉该表单项值。注意同名的未隐藏的表单项值也会删掉
     */
    public function clearValueOnHidden($value = true)
    {
        return $this->set('clearValueOnHidden', $value);
    }

    /**
     * 是否可折叠
     */
    public function collapsable($value = true)
    {
        return $this->set('collapsable', $value);
    }

    /**
     * 收起的标题
     */
    public function collapseHeader($value = '')
    {
        return $this->set('collapseHeader', $value);
    }

    /**
     * 收起的标题
     */
    public function collapseTitle($value = '')
    {
        return $this->set('collapseTitle', $value);
    }

    /**
     * 默认是否折叠
     */
    public function collapsed($value = true)
    {
        return $this->set('collapsed', $value);
    }

    /**
     * 
     */
    public function desc($value = '')
    {
        return $this->set('desc', $value);
    }

    /**
     * 描述内容，支持 Html 片段。
     */
    public function description($value = '')
    {
        return $this->set('description', $value);
    }

    /**
     * 配置描述上的 className
     */
    public function descriptionClassName($value = '')
    {
        return $this->set('descriptionClassName', $value);
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
     * 自定义切换图标
     */
    public function expandIcon($value = '')
    {
        return $this->set('expandIcon', $value);
    }

    /**
     * 标题
     */
    public function header($value = '')
    {
        return $this->set('header', $value);
    }

    /**
     * 标题展示位置 可选值: top | bottom
     */
    public function headerPosition($value = '')
    {
        return $this->set('headerPosition', $value);
    }

    /**
     * 标题 CSS 类名
     */
    public function headingClassName($value = '')
    {
        return $this->set('headingClassName', $value);
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
     * 输入提示，聚焦的时候显示
     */
    public function hint($value = '')
    {
        return $this->set('hint', $value);
    }

    /**
     * 当配置为水平布局的时候，用来配置具体的左右分配。
     */
    public function horizontal($value = '')
    {
        return $this->set('horizontal', $value);
    }

    /**
     * 表单 control 是否为 inline 模式。
     */
    public function inline($value = true)
    {
        return $this->set('inline', $value);
    }

    /**
     * 配置 input className
     */
    public function inputClassName($value = '')
    {
        return $this->set('inputClassName', $value);
    }

    /**
     * 标识
     */
    public function key($value = '')
    {
        return $this->set('key', $value);
    }

    /**
     * 描述标题
     */
    public function label($value = '')
    {
        return $this->set('label', $value);
    }

    /**
     * 配置 label className
     */
    public function labelClassName($value = '')
    {
        return $this->set('labelClassName', $value);
    }

    /**
     * 显示一个小图标, 鼠标放上去的时候显示提示内容, 这个小图标跟 label 在一起
     */
    public function labelRemark($value = '')
    {
        return $this->set('labelRemark', $value);
    }

    /**
     * 配置当前表单项展示模式 可选值: normal | inline | horizontal
     */
    public function mode($value = '')
    {
        return $this->set('mode', $value);
    }

    /**
     * 点开时才加载内容
     */
    public function mountOnEnter($value = true)
    {
        return $this->set('mountOnEnter', $value);
    }

    /**
     * 字段名，表单提交时的 key，支持多层级，用.连接，如： a.b.c
     */
    public function name($value = '')
    {
        return $this->set('name', $value);
    }

    /**
     * 
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
     * 是否只读
     */
    public function readOnly($value = true)
    {
        return $this->set('readOnly', $value);
    }

    /**
     * 显示一个小图标, 鼠标放上去的时候显示提示内容
     */
    public function remark($value = '')
    {
        return $this->set('remark', $value);
    }

    /**
     * 是否为必填
     */
    public function required($value = true)
    {
        return $this->set('required', $value);
    }

    /**
     * 图标是否展示
     */
    public function showArrow($value = true)
    {
        return $this->set('showArrow', $value);
    }

    /**
     * 控件大小 可选值: xs | sm | md | lg | base
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。
     */
    public function subFormHorizontal($value = '')
    {
        return $this->set('subFormHorizontal', $value);
    }

    /**
     * 配置子表单项默认的展示方式。 可选值: normal | inline | horizontal
     */
    public function subFormMode($value = '')
    {
        return $this->set('subFormMode', $value);
    }

    /**
     * 当修改完的时候是否提交表单。
     */
    public function submitOnChange($value = true)
    {
        return $this->set('submitOnChange', $value);
    }

    /**
     * 标题
     */
    public function title($value = '')
    {
        return $this->set('title', $value);
    }

    /**
     * 标题展示位置 可选值: top | bottom
     */
    public function titlePosition($value = '')
    {
        return $this->set('titlePosition', $value);
    }

    /**
     * 指定为表单项集合 可选值: fieldset | fieldSet
     */
    public function type($value = '')
    {
        return $this->set('type', $value);
    }

    /**
     * 卡片隐藏就销毁内容。
     */
    public function unmountOnExit($value = true)
    {
        return $this->set('unmountOnExit', $value);
    }

    /**
     * 远端校验表单项接口
     */
    public function validateApi($value = '')
    {
        return $this->set('validateApi', $value);
    }

    /**
     * 不设置时，当表单提交过后表单项每次修改都会触发重新验证， 如果设置了，则由此配置项来决定要不要每次修改都触发验证。
     */
    public function validateOnChange($value = true)
    {
        return $this->set('validateOnChange', $value);
    }

    /**
     * 验证失败的提示信息
     */
    public function validationErrors($value = '')
    {
        return $this->set('validationErrors', $value);
    }

    /**
     * 
     */
    public function validations($value = '')
    {
        return $this->set('validations', $value);
    }

    /**
     * 默认值，切记只能是静态值，不支持取变量，跟数据关联是通过设置 name 属性来实现的。
     */
    public function value($value = '')
    {
        return $this->set('value', $value);
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
     * 在Table中调整宽度
     */
    public function width($value = '')
    {
        return $this->set('width', $value);
    }


}
