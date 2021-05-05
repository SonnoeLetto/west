<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 28.04.21
 * Time: 17:22
 */
class DownloadForm extends \yii\base\Model
{
    public $name;
    public $phone;

    public function rules() {
        return [
            [['name', 'phone'], 'required']
        ];
    }
}
?>