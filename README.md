# Amis Renderer

## 示例

```php
$page = amis()->Page()->title('My Page')->body([
    amis()->Card()->body(['hahaha']),
    amis()->Form()->api('xxx.com/api')->body([
        amis()->TextControl('name', 'Name')->required()->clearable()
    ])
]);
```
