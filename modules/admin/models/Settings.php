<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;

class Settings extends Model {
    
	public $trackLink, $feedbackEmail, $stopList, $theme;
    
	public function rules(){
		return [
			[['trackLink', 'feedbackEmail', 'stopList', 'theme'], 'string'],
		];
	}
	
	public function fields(){
	    return ['trackLink', 'feedbackEmail', 'stopList', 'theme'];
	}
	
	public function attributes(){
	    return ['trackLink', 'feedbackEmail', 'stopList', 'theme'];
	}

	public function themesList(){
        $dirs = scandir(dirname(__FILE__).'/../../../themes');
        $themes = array();
        foreach ($dirs as $name){
            if ($name != '.' AND $name != '..' AND $name != 'default' AND $name != 'Default'){
                $themes[$name] = $name;
            }
        }
        return $themes;
    }
}

?>