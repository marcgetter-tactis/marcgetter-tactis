const autoprefixer = require("autoprefixer");
const csso = require("postcss-csso");
const gulp = require("gulp");
const postcss = require("gulp-postcss");
const replace = require("gulp-replace");
const sass = require("gulp-sass");
const sourcemaps = require("gulp-sourcemaps");
const del = require('del');
const svgSprite = require('gulp-svg-sprite');
const rename = require('gulp-rename');

sass.compiler = require("sass");

/*
----------------------------------------
PATHS
----------------------------------------
- All paths are relative to the
  project root
- Don't use a trailing `/` for path
  names
----------------------------------------
*/

// Project Sass source directory
const PROJECT_SASS_SRC = "./sass";

// Images destination
const IMG_DEST = "./assets/img";

// Fonts destination
const FONTS_DEST = "./assets/fonts";

// Javascript destination
const JS_DEST = "./assets/js";

// Compiled CSS destination
const CSS_DEST = "./css";

// Site CSS destination
// Like the _site/assets/css directory in Jekyll, if necessary.
// If using, uncomment line 106
const SITE_CSS_DEST = "./css";

/*
----------------------------------------
TASKS
----------------------------------------
*/

gulp.task("build-sass", function(done) {
  var plugins = [
    // Autoprefix
    autoprefixer({
      cascade: false,
      grid: true
    })
    // Minify
    // csso({ forceMediaMerge: false }),
  ];
  return (
      gulp
          .src([`${PROJECT_SASS_SRC}/*.scss`])
          .pipe(sourcemaps.init({ largeFile: true }))
          .pipe(
              sass.sync({
                includePaths: [
                  `${PROJECT_SASS_SRC}`,
                ]
              })
          )
          .pipe(postcss(plugins))
          .pipe(sourcemaps.write("."))
          // uncomment the next line if necessary for Jekyll to build properly
          //.pipe(gulp.dest(`${SITE_CSS_DEST}`))
          .pipe(gulp.dest(`${CSS_DEST}`))
  );
});

// SVG sprite configuration
config = {
  shape: {
    dimension: { // Set maximum dimensions
      maxWidth: 24,
      maxHeight: 24
    },
    id: {
      separator: "-"
    },
    spacing: { // Add padding
      padding: 0
    }
  },
  mode: {
    symbol: true // Activate the «symbol» mode
  }
};

gulp.task(
    "init",
    gulp.series(
        "build-sass"
    )
);

gulp.task("watch-sass", function() {
  gulp.watch(`${PROJECT_SASS_SRC}/**/*.scss`, gulp.series("build-sass"));
});

gulp.task("watch", gulp.series("build-sass", "watch-sass"));

gulp.task("default", gulp.series("watch"));
