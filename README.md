# wpbp
A WordPress Boilerplate Theme

1. npm install

2. Add sass libraries to /assets/styles and import in wpbp.scss

3. Add js libraries to /assets/scripts and require in wpbp.js

4. Add image files to /assets/images

5. Add svg files to /assets/icons

6. npm run dist

## Template Heirarchy

No need to learn some abstracted template logic, just use the native WordPress stuff.

https://developer.wordpress.org/themes/basics/template-hierarchy/

## Bower

1. bower install \<package>

2. add *require('../../bower_components/\<package>');* to wpbp.js

3. add *@import '../../bower_components/\<package>';* to wpbp.scss
