# Gama Core

Gama Core adds Custom Post Types, Taxonomies, Responsive Multi-Level Menu and more...

Gama Core is based on The WordPress Plugin Boilerplate,"A standardized, organized, object-oriented foundation for building high-quality WordPress Plugins." The Boilerplate is based on the [Plugin API](http://codex.wordpress.org/Plugin_API), [Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards), and [Documentation Standards](http://make.wordpress.org/core/handbook/inline-documentation-standards/php-documentation-standards/).

## Features

* Custom Post Types: Portfolio, Review, Testimonial and Team
* Add new Taxonomies
* Responsive Multi-Level Menu "A responsive multi-level menu that shows its submenus in their own context, allowing for a space-saving presentation and usage."

## Contents

The WordPress Plugin Boilerplate includes the following files:

* `.gitignore`. Used to exclude certain files from the repository.
* `CHANGELOG.md`. The list of changes to the core project.
* `README.md`. The file that you’re currently reading.
* A `gama-core` subdirectory that contains the source code - a fully executable WordPress plugin.

## Installation

Gama Core can be installed in one of two ways both of which are documented below. Note that because of its directory structure

Instead, the options are:

### Copying a Directory

1. Copy the `trunk` directory into your `wp-content/plugins` directory. You may wish to rename this to something else.
2. In the WordPress admin area, navigation to the *Plugins* page
Locate the menu item that reads “Gama Core.”
3. Click on *Activate.*

### Creating a Symbolic Link

#### On Linux or OS X

1. Copy the `gama-core` directory into your `wp-content/plugins` directory.
2. Create a symbolic link between the `trunk` directory and the plugin. For example: `ln -s plugin-name/trunk /path/to/wordpress/wp-content/plugins/gama-core`
3. In the WordPress admin area, navigation to the *Plugins* page
Locate the menu item that reads “Gama Core.”
4. Click on *Activate.*

#### On Windows

1. Copy the `gama-core` directory into your `wp-content/plugins` directory.
2. Create a symbolic link between the `trunk` directory and the plugin. For example: `mklink /J path\to\wp-content\plugins \path\to\Gama-Core\trunk\gama-core`
3. In the WordPress admin area, navigation to the *Plugins* page
Locate the menu item that reads “The WordPress Plugin Boilerplate.”
4. Click on *Activate.*

## Recommended Tools

### i18n Tools

Gama Core uses a variable to store the text domain used when internationalizing strings throughout the Boilerplate. To take advantage of this method, there are tools that are recommended for providing correct, translatable files:

* [Poedit](http://www.poedit.net/)
* [makepot](http://i18n.svn.wordpress.org/tools/trunk/)
* [i18n](https://github.com/grappler/i18n)

Any of the above tools should provide you with the proper tooling to internationalize the plugin.

## License

Gama Core is licensed under the GPL v2 or later. All plugin files are licensed under the GNU Public License 2.0 unless specified as otherwise within the file itself. Some files may be licensed under alternative open source licenses such as MIT, BSD or OFL. Refer to individual files for licensing information. If no license is stated, then the file is placed under the GPL 2.0.

> This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License, version 2, as published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

> You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

A copy of the license is included in the root of the plugin’s directory. The file is named `LICENSE`.

## Important Notes

### Licensing

The WordPress Plugin Boilerplate is licensed under the GPL v2 or later;

### Includes

Classes, or third-party libraries, there are three locations in which said files may go:

* `plugin-name/includes` is where functionality shared between the admin area and the public-facing parts of the site reside
* `plugin-name/admin` is for all admin-specific functionality
* `plugin-name/public` is for all public-facing functionality

Note that previous versions of the Boilerplate did not include `Gama_Core_Loader` but this class is used to register all filters and actions with WordPress.

### Assets

The `assets` directory contains three files.

1. `banner-772x250.png` is used to represent the plugin’s header image.
2. `icon-256x256.png` is a used to represent the plugin’s icon image (which is new as of WordPress 4.0).
3. `screenshot-1.png` is used to represent a single screenshot of the plugin that corresponds to the “Screenshots”.

The WordPress Plugin Repository directory structure contains three directories:

1. `assets`
2. `branches`
3. `trunk`

# Credits

* [The WordPress Plugin Repository](http://wppb.io/)
* [Responsive Multi-Level Menu](http://tympanus.net/codrops/2013/04/19/responsive-multi-level-menu/)
* [Font Awesome](http://fontawesome.io)
* [IcoMoon](http://keyamoon.com/icomoon/)

## Documentation, FAQs, and More

Coming Soon