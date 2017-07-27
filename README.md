# wpbp
A WordPress Boilerplate Theme

### Install

```bash
$ npm install
```

#### Styles

Add sass libraries to /assets/styles and import in wpbp.scss

https://github.com/sass/node-sass

#### Scripts

Add js libraries to /assets/scripts and require in wpbp.js

https://github.com/webpack/webpack

#### Images

Add image files to /assets/images

https://github.com/imagemin/imagemin-cli

#### Icons

Add svg files to /assets/icons

https://github.com/Workshape/icon-font-generator

### Build

```bash
$ npm run dist
```

or

```bash
$ npm run watch
```

### Template Hierarchy

No need to learn some abstracted template logic, just use the native WordPress stuff.

https://developer.wordpress.org/themes/basics/template-hierarchy/

### Bower

```bash
$ bower install <package>
```

http://bower.io/

#### Styles

Add the following to wpbp.scss:

```scss
@import '../../bower_components/<package>'
```

#### Scripts

Add the following to wpbp.js:

```js
require('../../bower_components/<package>');
```
