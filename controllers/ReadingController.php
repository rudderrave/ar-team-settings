<?php

namespace arteam\settings\controllers;

/**
 * ReadingController implements Reading Settings page.
 *
 * @author Taras Makitra <makitrataras@gmail.com>
 */
class ReadingController extends SettingsBaseController
{
    public $modelClass = 'arteam\settings\models\ReadingSettings';
    public $viewPath = '@vendor/rudderrave/ar-team-settings/views/reading/index';

}