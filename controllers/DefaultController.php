<?php

namespace arteam\settings\controllers;

/**
 * DefaultController implements General Settings page.
 *
 * @author Taras Makitra <makitrataras@gmail.com>
 */
class DefaultController extends SettingsBaseController
{
    public $modelClass = 'arteam\settings\models\GeneralSettings';
    public $viewPath = '@vendor/rudderrave/ar-team-settings/views/default/index';

}