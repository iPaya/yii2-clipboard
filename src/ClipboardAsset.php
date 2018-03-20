<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 */

namespace iPaya\Yii2\Clipboard;


use yii\web\AssetBundle;

class ClipboardAsset extends AssetBundle
{
    public $sourcePath = '@bower/clipboard/dist';
    public $js = [
        'clipboard.min.js'
    ];
}
