<?php

namespace huijiewei\imageviewer;

use yii\web\AssetBundle;

class JqueryViewerAsset extends AssetBundle
{
    public $sourcePath = '@npm/jquery-viewer/dist';

    public $js = [
        'jquery-viewer.min.js',
    ];
}
