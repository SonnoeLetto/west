<?php
namespace frontend\components;

use Yii;
use yii\bootstrap\Dropdown;

class LanguageWidget extends Dropdown
{
    private $_appLanguage;

    public function init()
    {
        $route = Yii::$app->controller->route;
        $this->_appLanguage = Yii::$app->language;
        $params = $_GET;

        array_unshift($params, '/' . $route);

        foreach (Yii::$app->urlManager->languages as $language) {
            $isWildcard = substr($language, -2) === '-*';
            if (
                $language === $this->_appLanguage ||
                // Also check for wildcard language
                $isWildcard && substr($this->_appLanguage, 0, 2) === substr($language, 0, 2)
            ) {
                continue;   // Exclude the current language
            }
            if ($isWildcard) {
                $language = substr($language, 0, 2);
            }
            $params['language'] = $language;
            $this->items[] = [
                'label' => $language,
                'url' => $params,
            ];
        }
        parent::init();
    }

    public function run()
    {
        return '<div class="dropdown dropdown-languages textTransform">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle textTransform">
                        '. Yii::t('language', $this->_appLanguage) .'
                    </a>'.
            parent::run()
            .'</div>';
    }
}