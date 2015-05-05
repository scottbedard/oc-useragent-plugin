<?php namespace Bedard\UserAgent;

use App;
use Illuminate\Foundation\AliasLoader;
use System\Classes\PluginBase;

/**
 * UserAgent Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'User Agent',
            'description' => 'Simple user agent detection for OctoberCMS.',
            'author'      => 'Scott Bedard',
            'icon'        => 'icon-search'
        ];
    }

    /**
     * Register service provider and alias
     */
    public function boot()
    {
        App::register('\Jenssegers\Agent\AgentServiceProvider');

        $alias = AliasLoader::getInstance();
        $alias->alias('Agent', 'Jenssegers\Agent\Facades\Agent');
    }

    /**
     * Register twig extension
     */
    public function registerMarkupTags()
    {
        $agent = $this->app['agent'];

        return [
            'functions' => [
                'agent' => function($option) use ($agent) {
                    return $agent->$option();
                }
            ]
        ];
    }


}
