Introduction
============

The Basis Theme is a combination of two separate themes, [Bones][] and [Genesis][]. That's where we get the name "Basis". I also thought the meaning of the word "basis" perfectly described what the Basis Theme attempts to accomplish.

According to the dictionary on my Mac, the word basis is defined as:

> basis |ˈbāsis|
> noun ( pl. -ses |-sēz|)
> the underlying support or foundation for an idea, argument, or process : trust is the only basis for a good working relationship.
> -the system or principles according to which an activity or process is carried on : she needed coaching on a regular basis | flea markets operate on a cash-only basis.
> -the justification for or reasoning behind something : on the basis of these statistics, important decisions are made.
> ORIGIN late 16th cent. (denoting a base or pedestal): via Latin from Greek, ‘stepping’.

[Bones]: http://themble.com/bones/
[Genesis]: http://www.studiopress.com/themes/genesis

Bones
-----

According to the Bones website:

> Bones was created to make Developer's lives easier. It's meant to be hacked and edited until it fits the mold you're looking for. Luckily everything is well documented and all the files are detailed so you'll never be staring at the page thinking "What does this code do?"

Bones is designed as a starting point to be customized to create a final theme. This can make future updates to the core Bones codebase hard to implement and integrate into an existing site. Eddie Machado has built the template around the amazing work of Paul Irish and Divya Manian along with the rest of the contributors to the [HTML5Boilerplate][] Project. HTML5Boilerplate is a base starting point designed to get an HTML5 compliant site up with a minimal amount of effort. It includes a specially designed CSS reset as well as custom JavaScripts that are used to bring HTML5 compliance to a maximum number of browsers.

[HTML5Boilerplate]: http://html5boilerplate.com/

Special thanks from the original Bones library/log.txt:
* Paul Irish & the HTML5 Boilerplate
* Yoast for some WP functions & optimization ideas
* Andrew Rogers for code optimization
* David Dellanave for speed & code optimization
* and several other developers. :)

Genesis
-------

According to the Genesis website:

> The Genesis Framework empowers you to quickly and easily build incredible websites with WordPress. Whether you're a novice or advanced developer, Genesis provides the secure and search-engine-optimized foundation that takes WordPress to places you never thought it could go.

The Genesis framework is based on the parent/child theme design. This makes it extremely easy to customize the theme using a separate "child folder" that overrides the parent and still updates with the click of a button. However, the Genesis framework can be cumbersome and clumsy to customize because of the need to override all the built in hooks, actions and filters to alter its behavior. While these hooks, actions and filters have been designed to deliver the advanced functionality of Genesis they tend to hide the framework from the developer requiring them to work backwards to implement their desired functionality.

Basis
-----

Both Bones and Genesis provide incredibly powerful plugin functionality built in. A lot of attention has been paid to including features that the user and designer can benefit from. Basis attempts to mitigate both of the "downsides" to each framework by combining the best of each, the parent/child relationship from Genesis with the ease of customization from Bones. The Basis codebase is HEAVILY borrowed from Bones. As of 2/14/11 it is basically a fork of the Bones GitHub project. Basis shares no code whatsoever with Genesis. We've simply borrowed their approach to theme design by focusing on keeping core Basis functionality in the parent theme and user/developer specific customizations in child themes.

The Basis Theme has been designed as a modular system. You will find all of the usual files in the root directory of the parent theme, however, once you did deeper in to the library file you begin to notice that all of the extra functionality provided by Basis has been subdivided into directories that are named to help describe what they do. All of these files can be included or excluded through the functions.php file. That one file allows the theme designer complete control over what is and is not included in the final site design.

##

&copy; 2011 Dominic Giglio, All Rights Reserved. Released under the GPLv3 License. See the LICENSE file for further information.