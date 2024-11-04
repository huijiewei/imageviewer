<?php

namespace huijiewei\imageviewer;

use yii\web\AssetBundle;

class ImageViewerAsset extends AssetBundle
{
    public $sourcePath = '@huijiewei/imageviewer/assets';

    public $css = [
        'custom.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        ViewerJsAsset::class,
        JqueryViewerAsset::class,
    ];
}
