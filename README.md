# User Agent
Simple user agent detection for OctoberCMS.

### Documentation
This plugin is just a simple Twig wrapper for [Laravel User Agent](https://github.com/jenssegers/Laravel-Agent), please refer to their repository for documentation.

### Examples
Detecting devices...
```html
{% if agent('isDesktop') %}
    You're using a desktop!
{% elseif agent('isTablet') %}
    You're using a tablet!
{% elseif agent('isMobile') %}
    You're using a mobile device!
{% endif %}
```

Detecting robots...
```html
{% if agent('isRobot') %}
    Hello robot!
{% endif %}
````

Detecting a specific browser...
```html
{% if agent('browser') == 'Chrome' %}
    Welcome Chrome user!
{% endif %}
```

Detecting a specific device...
```html
{% if agent('device') == 'iPhone' %}
    Aloha iPhone user!
{% endif %}
```
