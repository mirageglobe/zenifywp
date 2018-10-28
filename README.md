Zenify Wordpress
================================================

- Author: Jimmy MG Lim (mirageglobe@gmail.com)
- Twitter: @mirageglobe
- Blog: http://www.mirageglobe.com
- Source: https://github.com/mirageglobe/zenifywordpress
- License: Apache License 2.0

ZenifyWordpress is designed to make the development of wordpress themes simplier. It is built using HTML5 with responsive bootstrap (with bootstrap mobile first in mind). It now includes fontawesome, bootstrap, jquery by default and has a carousel which can be enabled.

![Zenify Screenshot](https://raw.githubusercontent.com/mirageglobe/zenify/master/screenshot.png)

*Inspired/Forked from Bones (Eddie Machado http://themble.com/bones) and Zenhabits*
*Please check out the holder page. You can use this when you are swapping over templates. https://github.com/mirageglobe/zenifywordpressholderpage*


# Features

- WooCommerce Compatible
- Includes Bootstrap (via CDN)
- Includes FontAwesome (via CDN)
- Includes Jquery (via CDN)
- Includes top fonts (Source Sans Pro, OpenSans, Lato)
- Mobile first responsive
- Preset gallery layout supported
- RSS Feed supported
- Modular layout design
- New theme compliant customisation via Appearance > Customize > Zenify Settings
- Options to show one of three menu layouts (left/right/top)
- Options to show/hide author name

# To use

use either method 1

- checkout the repository
- run buildzip.sh which builds a zip file of the theme which can be added to themes in wordpress

method 2

- download from github as source
- compress into zip file as zenifywordpress.zip
- upload to wordpress themes

# Guidelines and Road Map

This project has some primary goals and guidelines:

## Guidelines

- Minimal number of files (php files, settings, etc)
- Use CDN (content delivery network) when possible to reduce hosted repos
- Mobile responsive enabling
- Follow Bootstrap guidelines
- Simple and Clean UX/UI (rule of thumb: if something is not essential, remove it)

## Known bugs

- default value of getopt should be top.

## Roadmap

- [done] using options for enabling / disabling display author
- [done] using options for displaying menuboxtop/bottom/leftside
- [done] support child themes
- [dropped] include postthumbnail. https://codex.wordpress.org/Function_Reference/get_the_post_thumbnail
- [done] set width of content to 420px which is max reading width - http://maxdesign.com.au/news/em/
- [done] activate search tool

# References

- https://codex.wordpress.org/Theme_Development#Template_File_Checklist

# License

Copyright 2010 Jimmy MG Lim

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

  http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

License Breakdown: https://tldrlegal.com/license/apache-license-2.0-(apache-2.0)
