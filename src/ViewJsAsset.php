<?php

namespace huijiewei\imageviewer;

use yii\web\AssetBundle;

class ViewJsAsset extends AssetBundle
{
    public $sourcePath = '@npm/viewjs/dist';

    public $css = [
        'viewer.min.css'
    ];

    public $js = [
        'viewer.min.js',
    ];
}
