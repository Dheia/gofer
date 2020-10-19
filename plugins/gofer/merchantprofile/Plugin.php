<?php namespace Gofer\MerchantProfile;

use System\Classes\PluginBase;
use RainLab\User\Models\User as UserModel;
use RainLab\User\Controllers\Users as UsersController;
use Gofer\Merchantprofile\Models\Merchantprofile as MerchantModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function pluginDetails()
    {
        return[
            'name'  => 'Profile',
            'description' => 'No description provided yet...',
            'author' => 'Gofer',
            'icon' =>  'icon-leaf'
        ];
    }

    public function boot()
    {
        UserModel::extend(function($model){
            $model->hasOne['merchantprofile'] = ['Gofer\Merchantprofile\Models\Merchantprofile'];
        });

        UsersController::extendFormFields(function($form, $model, $context){

            if (!$model instanceof UserModel)
                return;

            if (!$model->exists)
                return;

            //Ensures that the model always exist...
            MerchantModel::getFromUser($model);

            $form->addTabFields([
                'merchantprofile[name]' => [
                    'label' => 'Name',
                    'tab' => 'Profile',
                    'type' => 'textarea',
                ],
                'merchantprofile[desciption]'=> [
                    'label' => 'Desciption',
                    'tab' => 'Profile',
                    'type' => 'textarea',
                ],
                'merchantprofile[address]'=> [
                    'label' => 'Address',
                    'tab' => 'Profile',
                    'type' => 'textarea',
                ],
                'merchantprofile[category]'=> [
                    'label' => 'Category',
                    'tab' => 'Profile',
                    'type' => 'textarea',
                ],
            ]);

        });
    }
}
