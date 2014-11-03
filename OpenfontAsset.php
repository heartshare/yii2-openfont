<?php

namespace huijiewei\openfont;

use yii\web\AssetBundle;

class OpenfontAsset extends AssetBundle
{
    public $sourcePath = '@bower/open-font/';
    public $css = [
        'css/open-font.css',
    ];
}
