<?php namespace Bradley\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
      return[
        'Bradley\Contact\Components\ContactForm' => 'contactform',
      ];
    }

    public function registerSettings()
    {
    }
}
