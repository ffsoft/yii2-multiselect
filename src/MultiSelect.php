<?php
namespace ffsoft\multiselect;

use yii\base\Model;
use yii\bootstrap4\Widget;
use yii\bootstrap4\Html;
use yii\helpers\Json;

/**
 * MultiSelect widget renders a multiple select using Bootstrap templates and Multiple Select plugin
 *
 * @author Alim Shapiev <anyhon@outlook.com>
 * @see http://multiple-select.wenzhixin.net.cn/
 */
class MultiSelect extends Widget
{
    /**
     * @var string $attribute
     * The attribute name or expression for active dropdown list
     */
    public $attribute;

    /**
     * @var Model $model
     * An instance of the model for active dropdown list
     */
    public $model;

    /**
     * @var string $name
     * The attribute name for dropdown list
     */
    public $name;

    /**
     * @var string $name
     * The attribute name for dropdown list
     */
    public $value;

    /**
     * @var array $items
     * Items for any dropdown list
     */
    public $items = [];

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        parent::run();

        if (!isset($this->options['multiple'])) {
            $this->options['multiple'] = 'multiple';
        }

        if ($this->model instanceof Model && isset($this->attribute)) {
            echo Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options);
        } else {
            echo Html::dropDownList($this->name, $this->value, $this->items, $this->options);
        }

        $this->registerScripts();
    }

    /**
     * Registers JS scripts
     */
    public function registerScripts()
    {
        $view = $this->getView();

        MultiSelectAsset::register($view);

        $id = $this->options['id'];

        if ($this->clientOptions !== false) {
            $options = empty($this->clientOptions) ? '' : Json::htmlEncode($this->clientOptions);
            $js = "jQuery('#$id').multipleSelect($options);";
            $view->registerJs($js);
        }

        $this->registerClientEvents();
    }
}