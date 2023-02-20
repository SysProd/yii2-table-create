<?php
/**
 * Created by PhpStorm.
 * User: SysProd
 * Date: 20.12.17
 * Time: 15:48
 */

namespace SysProd\tableCreate;

use Yii;
use yii\web\AssetBundle;

class CreateTableAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@SysProd/tableCreate/css';

    /**
     * @inheritdoc
     */
    public $css = [
        'table-style.css',
    ];
}
