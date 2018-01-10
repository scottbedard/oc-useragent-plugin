<?php

namespace Bedard\UserAgent;

use App;
use Illuminate\Foundation\AliasLoader;
use Jenssegers\Agent\AgentServiceProvider;
use Jenssegers\Agent\Facades\Agent;
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
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        App::register(AgentServiceProvider::class);

        $aliasLoader = AliasLoader::getInstance();
        $aliasLoader->alias('Agent', Agent::class);
    }

    /**
     * Register custom twig function.
     *
     * @return array
     */
    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'agent' => function ($method) {
                    return App::make('agent')->$method();
                }
            ]
        ];
    }


}
