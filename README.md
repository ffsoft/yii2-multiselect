# yii2-multiselect-widget
Yii2 widget for Multiple Select JQuery plugin

This is a simple Yii2 widget implementing [Multiple Select JQuery plugin](https://github.com/wenzhixin/multiple-select) by Zhixin Wen.

#### Example usage:

```php
<?= $form->field($model, '...')->widget(MultiSelect::class, [
	'items' => [...],
	'clientOptions' => [
		/**
		* If we don't set width by CSS or JS, the input will most likely be very short
		*/
		'width' => '100%'
	]
]); ?>
```
