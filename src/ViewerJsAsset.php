<?php

namespace huijiewei\imageviewer;

use yii\web\AssetBundle;

class ViewerJsAsset extends AssetBundle
{
    public $sourcePath = '@npm/viewerjs/dist';

    public $css = [
        'viewer.min.css'
    ];

    public $js = [
        'viewer.min.js',
    ];
}
