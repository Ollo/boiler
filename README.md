# Boiler
### A minimal starting point for WordPress themes.
---

Boiler was created to be my own personal starting point for WordPress theme development. The workflow is opionionated and some of the conventions and utilities are a result of my own personal learnings YMMV.

#### Features

- clean minimal html5 markup with minimal class opinions to delete or build upon
- modular extensible sass starting point with sourcemap support for debugging
- modular `functions.php` structure to aide in larger theme projects
- common wp templates to extend / customize as needed


#### Development

This themes development workflow tools depend on [`node`](https://nodejs.org/en/) and `npm`. I personally use / recommend [NVM](https://github.com/creationix/nvm).

**Install**

```
npm install
```

**Sass**

```
gulp sass
```

**Watch + Livereload**

```
gulp watch
```

#### License

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
