
# zenifywp

- maintainer : Jimmy MG Lim (mirageglobe@gmail.com) / www.mirageglobe.com
- source : https://github.com/mirageglobe/zenifywp

zenifywp is designed to make the development of wordpress themes simplier. it is built using html5 with responsive bootstrap (with bootstrap mobile first in mind). it now includes fontawesome, bootstrap, jquery by default and has a carousel which can be enabled.

![Zenify Screenshot](https://raw.githubusercontent.com/mirageglobe/zenify/master/screenshot.png)

*inspired/forked from bones (eddie machado http://themble.com/bones) and zenhabits*

# features

- woocommerce compatible
- includes bootstrap (via cdn)
- includes fontawesome (via cdn)
- includes jquery (via cdn)
- includes top fonts (source sans pro, opensans, lato)
- mobile first responsive
- preset gallery layout supported
- rss feed supported
- modular layout design
- new theme compliant customisation via appearance > customize > zenify settings
- options to show one of three menu layouts (left/right/top)
- options to show/hide author name

# to use

method 1

- checkout the repository
- run buildzip.sh which builds a zip file of the theme which can be added to themes in wordpress

method 2

- download from github as source
- compress into zip file as zenifywp.zip
- upload to wordpress themes

# guidelines

- minimal number of files (php files, settings, etc)
- use cdn (content delivery network) when possible to reduce hosted repos
- mobile responsive enabling
- follow bootstrap guidelines
- simple and clean ux/ui (rule of thumb: if something is not essential, remove it)

# roadmap / bugs

- share social media snippet code at end of page
- [done] default value of getopt should be top
- [done] using options for enabling / disabling display author
- [done] using options for displaying menuboxtop/bottom/leftside
- [done] support child themes
- [done] include postthumbnail. https://codex.wordpress.org/function_reference/get_the_post_thumbnail
- [done] set width of content to 420px which is max reading width - http://maxdesign.com.au/news/em/
- [done] activate search tool

# references

- https://codex.wordpress.org/theme_development#template_file_checklist

