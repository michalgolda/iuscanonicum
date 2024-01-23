const gulp = require("gulp");
const clean = require("gulp-clean");
const sass = require("gulp-sass")(require("sass"));
const rename = require("gulp-rename");
const cleanCss = require("gulp-clean-css");
const esbuild = require("gulp-esbuild");
const uglify = require("gulp-uglify");

function cleanStyleFile() {
  return gulp.src("style.css", { allowEmpty: true, read: false }).pipe(clean());
}

function compileStyles() {
  return gulp
    .src("assets/styles/main.scss")
    .pipe(sass({ file: "style" }).on("error", sass.logError))
    .pipe(rename("style.css"))
    .pipe(cleanCss({ level: 2 }))
    .pipe(gulp.dest("./"));
}

function buildSwiperScriptBundle() {
  return gulp
    .src("assets/scripts/swiper.js")
    .pipe(
      esbuild({
        outfile: "swiper.bundle.js",
        bundle: true,
      })
    )
    .pipe(uglify())
    .pipe(gulp.dest("./assets/scripts/"));
}

function buildSwiperStylesBundle() {
  return gulp
    .src("assets/styles/swiper.scss")
    .pipe(sass({ file: "style" }).on("error", sass.logError))
    .pipe(rename("swiper.bundle.css"))
    .pipe(cleanCss({ level: 2 }))
    .pipe(gulp.dest("./"));
}

function watch() {
  gulp.watch("assets/styles/**/*.scss", gulp.series(compileStyles));
}

exports.build = gulp.series(
  cleanStyleFile,
  compileStyles,
  buildSwiperScriptBundle,
  buildSwiperStylesBundle
);
exports.dev = gulp.series(cleanStyleFile, compileStyles, watch);
