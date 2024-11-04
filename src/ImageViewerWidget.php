<?php

namespace huijiewei\imageviewer;

use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

class ImageViewerWidget extends Widget
{
    public $clientOptions = [];

    public $thumbUrl;
    public $imageUrl;

    public $thumbWidth = 160;
    public $title;

    public function init()
    {
        parent::init();

        if (empty($this->imageUrl)) {
            throw new InvalidConfigException('请设置 imageUrl');
        }

        if (empty($this->thumbUrl)) {
            $this->thumbUrl = $this->imageUrl;
        }

        $this->clientOptions = ArrayHelper::merge([
            'movable' => false,
            'scalable' => false,
            'navbar' => false,
            'fullscreen' => false,
            'url' => $this->imageUrl,
        ], $this->clientOptions);

        ImageViewerAsset::register($this->getView());

        $this->registerScript();
    }

    public function registerScript()
    {
        $clientOptions = Json::encode($this->clientOptions);

        $js = <<<EOD
$('.imageviewer').viewer({$clientOptions});
EOD;

        $this->getView()->registerJs($js);
    }

    public function run()
    {
        $html = '<img alt="' . $this->title . '" class="imageviewer" src="' . $this->thumbUrl . '" style="width:' . $this->thumbWidth . 'px;">';

        return $html;
    }
}
