# User Agent
Simple user agent detection for OctoberCMS.

### Documentation
This plugin is just a simple Twig wrapper for [jenssegers/agent](https://github.com/jenssegers/agent), please refer to their repository for documentation.

### Examples
Detecting devices...
```twig
{% if agent('isDesktop') %}
    You're using a desktop!
{% elseif agent('isTablet') %}
    You're using a tablet!
{% elseif agent('isMobile') %}
    You're using a mobile device!
{% endif %}
```

Detecting robots...
```twig
{% if agent('isRobot') %}
    Hello robot!
{% endif %}
````

Detecting a specific browser...
```twig
{% if agent('browser') == 'Chrome' %}
    Welcome Chrome user!
{% endif %}
```

Detecting a specific device...
```twig
{% if agent('device') == 'iPhone' %}
    Aloha iPhone user!
{% endif %}
```

Detecting a specific platform...
```twig
{% if agent('platform') == 'OS X' %}
   You're using OS X!
{% endif %}
```