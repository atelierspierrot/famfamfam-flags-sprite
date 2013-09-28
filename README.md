FamFamFam - Flags icons CSS sprite
==================================

The **UNOFFICIAL** sprites of the *FamFamFam Flags icons*
by [FamFamFam](http://www.famfamfam.com).

**!! - This work is unofficial and is not liable for FamFamFam.**


## Overview

This package proposes a CSS sprite constructed on the
[FamFamFam Flags web-icons set](http://www.famfamfam.com/lab/icons/flags/)
proposed under a free license.

To learn more about "CSS sprites" conception, see the
[Sprite (computer graphics) wikipedia's page](http://en.wikipedia.org/wiki/Sprite_%28computer_graphics%29#Sprites_by_CSS).


## Usage

### Installation

This package is a "standalone" CSS framework. To use it, you just need to get its sources
from GitHub and include the `src/` content of the package in your project assets.

If you are a [Bower](http://bower.io/) user, the package is registered so you can write
in your `bower.json`:

    "dependencies": {
        ...
        "atelierspierrot/famfamfam-flags-sprite": "dev-master"
    }

If you are a [Composer](http://getcomposer.org/) user, the package is referenced to 
Packagist so you can write in your `composer.json`:

    "require": {
        ...
        "atelierspierrot/famfamfam-flags-sprite": "dev-master"
    }

The package has a `library-assets` type to allow handling by the
[Assets Manager](http://github.com/atelierspierrot/assets-manager) Composer's extension. If
you plan to use the manager, you can use the `assets-install` branch of the package, which
has the AssetsManager in its requirements (to be sure it will be loaded before the sprite
and be able to move it in the project assets).

### HTML usage

Once the package is included in your project, you can start to use the sprites framework.

To do so, you first need to include the CSS definitions:

	<link rel="stylesheet" href="path/to/package/src/flags-sprite.min.css" />

Then you can start writing some Flag icons spans using the framework explained below.

A demonstration page is available in the global package in `demo/` ; it shows in particular
the list of available icons and their names.

### CSS Framework

The package defines some **CSS sprite** classes to render some icons easily and with
least of work.

The CSS framework to use the sprites is based on two classes:

-   the first one to prepare a flag icon, that is common and global: `flag-icon`,
-   the last one to choose the icon itself, which is the name of the icon, which is itself
    the code of a country following the
    [ISO 3166-1 alpha-2 specifications](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2).

For instance, to render the United States flag (which code is "us"), you will write:

    <span class="flag-icon us"></span>

As the sprite is not defined with restrictive CSS rules, you may encounter rendering
problems (such as margins or paddings defined globally in your document) that can be avoid
adding a `reset` class to your icons:

    <span class="flag-icon reset print"></span>


## Credits

As mentioned above, the original set of icons is made by [FamFamFam](http://www.famfamfam.com/)
(Mark James - UK) and proposed under a free license.

The sprite was generated with the help of [website-performance.org](http://spritegen.website-performance.org/)
and is CSS3 valid.

The minified version of the CSS file of the package was processed with the [YUI Compressor](http://refresh-sf.com/yui/).

The PNG sprite is optimized using [Smush.it (TM)](http://www.smushit.com/ysmush.it/).
