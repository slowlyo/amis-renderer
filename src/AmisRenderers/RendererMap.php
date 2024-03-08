<?php

namespace Slowlyo\AmisRenderers;

class RendererMap
{
    public static array $map = [
		'alert' => Alert::class,
		'anchor-nav' => AnchorNav::class,
		'app' => Component::class,
		'audio' => Audio::class,
		'avatar' => Avatar::class,
		'barcode' => Barcode::class,
		'bat-editor' => EditorControl::class,
		'breadcrumb' => Breadcrumb::class,
		'button' => VanillaAction::class,
		'button-group' => ButtonGroup::class,
		'button-group-select' => ButtonGroupControl::class,
		'button-toolbar' => ButtonToolbar::class,
		'c-editor' => EditorControl::class,
		'calendar' => Calendar::class,
		'card' => Card::class,
		'card2' => Card2::class,
		'cards' => Cards::class,
		'carousel' => Carousel::class,
		'chained-select' => ChainedSelectControl::class,
		'chart' => Chart::class,
		'chart-radios' => ChartRadios::class,
		'checkbox' => CheckboxControl::class,
		'checkboxes' => CheckboxesControl::class,
		'code' => Code::class,
		'coffeescript-editor' => EditorControl::class,
		'collapse' => Collapse::class,
		'collapse-group' => CollapseGroup::class,
		'color' => Color::class,
		'combo' => ComboControl::class,
		'condition-builder' => ConditionBuilderControl::class,
		'container' => Container::class,
		'control' => FormControl::class,
		'cpp-editor' => EditorControl::class,
		'crud' => CRUDTable::class,
		'csharp-editor' => EditorControl::class,
		'css-editor' => EditorControl::class,
		'custom' => Custom::class,
		'date' => Date::class,
		'datetime' => Date::class,
		'dialog' => Dialog::class,
		'diff-editor' => DiffControl::class,
		'divider' => Divider::class,
		'dockerfile-editor' => EditorControl::class,
		'drawer' => Drawer::class,
		'dropdown-button' => DropdownButton::class,
		'each' => Each::class,
		'editor' => EditorControl::class,
		'fieldSet' => FieldSetControl::class,
		'fieldset' => FieldSetControl::class,
		'flex' => Flex::class,
		'flex-item' => Component::class,
		'form' => Form::class,
		'formula' => FormulaControl::class,
		'fsharp-editor' => EditorControl::class,
		'go-editor' => EditorControl::class,
		'grid' => Grid::class,
		'grid-2d' => Grid2D::class,
		'grid-nav' => GridNav::class,
		'group' => GroupControl::class,
		'handlebars-editor' => EditorControl::class,
		'hbox' => HBox::class,
		'hidden' => HiddenControl::class,
		'html' => Html::class,
		'html-editor' => EditorControl::class,
		'icon' => Icon::class,
		'icon-picker' => IconPickerControl::class,
		'iframe' => IFrame::class,
		'image' => Image::class,
		'images' => Images::class,
		'ini-editor' => EditorControl::class,
		'input-array' => ArrayControl::class,
		'input-city' => InputCityControl::class,
		'input-color' => InputColorControl::class,
		'input-date' => DateControl::class,
		'input-date-range' => DateRangeControl::class,
		'input-datetime' => DateTimeControl::class,
		'input-datetime-range' => DateRangeControl::class,
		'input-email' => TextControl::class,
		'input-excel' => InputExcel::class,
		'input-file' => FileControl::class,
		'input-formula' => Component::class,
		'input-group' => InputGroupControl::class,
		'input-image' => ImageControl::class,
		'input-month' => MonthControl::class,
		'input-month-range' => MonthRangeControl::class,
		'input-number' => NumberControl::class,
		'input-password' => TextControl::class,
		'input-quarter' => QuarterControl::class,
		'input-quarter-range' => QuarterRangeControl::class,
		'input-range' => RangeControl::class,
		'input-rating' => RatingControl::class,
		'input-repeat' => RepeatControl::class,
		'input-rich-text' => RichTextControl::class,
		'input-sub-form' => SubFormControl::class,
		'input-table' => TableControl::class,
		'input-tag' => TagControl::class,
		'input-text' => TextControl::class,
		'input-time' => TimeControl::class,
		'input-time-range' => DateRangeControl::class,
		'input-tree' => TreeControl::class,
		'input-url' => TextControl::class,
		'input-year' => YearControl::class,
		'java-editor' => EditorControl::class,
		'javascript-editor' => EditorControl::class,
		'json' => Json::class,
		'json-editor' => EditorControl::class,
		'json-schema-editor' => JSONSchemaEditorControl::class,
		'less-editor' => EditorControl::class,
		'link' => Link::class,
		'list' => ListRenderer::class,
		'list-select' => ListControl::class,
		'location-picker' => LocationControl::class,
		'log' => Log::class,
		'lua-editor' => EditorControl::class,
		'map' => Mapping::class,
		'mapping' => Mapping::class,
		'markdown' => Markdown::class,
		'markdown-editor' => EditorControl::class,
		'matrix-checkboxes' => MatrixControl::class,
		'month' => Date::class,
		'msdax-editor' => EditorControl::class,
		'multi-select' => SelectControl::class,
		'native-date' => TextControl::class,
		'native-number' => TextControl::class,
		'native-time' => TextControl::class,
		'nav' => Nav::class,
		'nested-select' => NestedSelectControl::class,
		'objective-c-editor' => EditorControl::class,
		'operation' => Operation::class,
		'page' => Page::class,
		'pagination' => Pagination::class,
		'pagination-wrapper' => PaginationWrapper::class,
		'panel' => Panel::class,
		'php-editor' => EditorControl::class,
		'picker' => PickerControl::class,
		'plain' => Plain::class,
		'plaintext-editor' => EditorControl::class,
		'portlet' => Portlet::class,
		'postiats-editor' => EditorControl::class,
		'powershell-editor' => EditorControl::class,
		'progress' => Progress::class,
		'property' => Property::class,
		'pug-editor' => EditorControl::class,
		'python-editor' => EditorControl::class,
		'qr-code' => QRCode::class,
		'qrcode' => QRCode::class,
		'r-editor' => EditorControl::class,
		'radios' => RadiosControl::class,
		'razor-editor' => EditorControl::class,
		'remark' => Remark::class,
		'reset' => VanillaAction::class,
		'ruby-editor' => EditorControl::class,
		'sb-editor' => EditorControl::class,
		'scss-editor' => EditorControl::class,
		'search-box' => SearchBox::class,
		'select' => SelectControl::class,
		'service' => Service::class,
		'sol-editor' => EditorControl::class,
		'sparkline' => SparkLine::class,
		'spinner' => Spinner::class,
		'sql-editor' => EditorControl::class,
		'static' => StaticExactControl::class,
		'static-date' => StaticExactControl::class,
		'static-datetime' => StaticExactControl::class,
		'static-image' => StaticExactControl::class,
		'static-images' => Component::class,
		'static-json' => Component::class,
		'static-list' => Component::class,
		'static-month' => StaticExactControl::class,
		'static-table' => StaticExactControl::class,
		'static-time' => StaticExactControl::class,
		'status' => Status::class,
		'steps' => Steps::class,
		'submit' => VanillaAction::class,
		'swift-editor' => EditorControl::class,
		'switch' => SwitchControl::class,
		'table' => Table::class,
		'table-v2' => TableSchemaV2::class,
		'table-view' => TableView::class,
		'tabs' => Tabs::class,
		'tabs-transfer' => TabsTransferControl::class,
		'tabs-transfer-picker' => TabsTransferPickerControl::class,
		'tag' => Component::class,
		'tasks' => Tasks::class,
		'text' => Component::class,
		'textarea' => TextareaControl::class,
		'time' => Date::class,
		'timeline' => Timeline::class,
		'tooltip-wrapper' => TooltipWrapper::class,
		'tpl' => Tpl::class,
		'transfer' => TransferControl::class,
		'transfer-picker' => TransferPickerControl::class,
		'tree-select' => TreeSelectControl::class,
		'typescript-editor' => EditorControl::class,
		'uuid' => UUIDControl::class,
		'vb-editor' => EditorControl::class,
		'vbox' => VBox::class,
		'video' => Video::class,
		'web-component' => WebComponent::class,
		'wizard' => Wizard::class,
		'wrapper' => Wrapper::class,
		'xml-editor' => EditorControl::class,
		'yaml-editor' => EditorControl::class,
    ];
}