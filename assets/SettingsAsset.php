<?php

namespace arteam\settings\assets;

use yii\web\AssetBundle;

/**
 * SettingsAsset.
 *
 * @author Taras Makitra <makitrataras@gmail.com>
 */
class SettingsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/rudderrave/ar-team-settings/assets/source';
    public $css = [
        'css/settings.css',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\JqueryAsset',
        'arteam\assets\YeeAsset'
    ];

}