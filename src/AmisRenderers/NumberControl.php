<?php

namespace Slowlyo\AmisRenderers;

/**
 * 数字输入框 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/number
 * 
 * @author slowlyo
 * @version v2.3.1
 */
class NumberControl extends BaseRenderer
{
    public function __construct()
    {
        $this->set('type', 'input-number');


    }

    /**
     * 是否是大数，如果是的话输入输出都将是字符串
     */
    public function big($value = true)
    {
        return $this->set('big', $value);
    }

    /**
     * 边框模式，全边框，还是半边框，或者没边框。 可选值: full | half | none
     */
    public function borderMode($value = '')
    {
        return $this->set('borderMode', $value);
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
     * 输入框为基础输入框还是加强输入框 可选值: base | enhance
     */
    public function displayMode($value = '')
    {
        return $this->set('displayMode', $value);
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
     * 组件唯一 id，主要用于日志采集
     */
    public function id($value = '')
    {
        return $this->set('id', $value);
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
     * 是否启用键盘行为
     */
    public function keyboard($value = true)
    {
        return $this->set('keyboard', $value);
    }

    /**
     * 是否千分分隔
     */
    public function kilobitSeparator($value = true)
    {
        return $this->set('kilobitSeparator', $value);
    }

    /**
     * 描述标题
     */
    public function label($value = '')
    {
        return $this->set('label', $value);
    }

    /**
     * 描述标题
     */
    public function labelAlign($value = '')
    {
        return $this->set('labelAlign', $value);
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
     * label自定义宽度，默认单位为px
     */
    public function labelWidth($value = '')
    {
        return $this->set('labelWidth', $value);
    }

    /**
     * 最大值
     */
    public function max($value = '')
    {
        return $this->set('max', $value);
    }

    /**
     * 最小值
     */
    public function min($value = '')
    {
        return $this->set('min', $value);
    }

    /**
     * 配置当前表单项展示模式 可选值: normal | inline | horizontal
     */
    public function mode($value = '')
    {
        return $this->set('mode', $value);
    }

    /**
     * 字段名，表单提交时的 key，支持多层级，用.连接，如： a.b.c
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
     * 精度
     */
    public function precision($value = '')
    {
        return $this->set('precision', $value);
    }

    /**
     * 前缀
     */
    public function prefix($value = '')
    {
        return $this->set('prefix', $value);
    }

    /**
     * 只读
     */
    public function readOnly($value = true)
    {
        return $this->set('readOnly', $value);
    }

    /**
     * 只读条件
     */
    public function readOnlyOn($value = '')
    {
        return $this->set('readOnlyOn', $value);
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
     * 默认当然是
     */
    public function showSteps($value = true)
    {
        return $this->set('showSteps', $value);
    }

    /**
     * 表单项大小 可选值: xs | sm | md | lg | full
     */
    public function size($value = '')
    {
        return $this->set('size', $value);
    }

    /**
     * 步长
     */
    public function step($value = '')
    {
        return $this->set('step', $value);
    }

    /**
     * 当修改完的时候是否提交表单。
     */
    public function submitOnChange($value = true)
    {
        return $this->set('submitOnChange', $value);
    }

    /**
     * 后缀
     */
    public function suffix($value = '')
    {
        return $this->set('suffix', $value);
    }

    /**
     * 表单项类型
     */
    public function type($value = 'input-number')
    {
        return $this->set('type', $value);
    }

    /**
     * 单位列表
     */
    public function unitOptions($value = '')
    {
        return $this->set('unitOptions', $value);
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
