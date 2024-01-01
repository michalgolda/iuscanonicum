const gulp = require("gulp");
const clean = require("gulp-clean");
const sass = require("gulp-sass")(require("sass"));
const rename = require("gulp-rename");
const cleanCss = require("gulp-clean-css");

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

function watch() {
  gulp.watch("assets/styles/**/*.scss", gulp.series(compileStyles));
}

exports.build = gulp.series(cleanStyleFile, compileStyles);
exports.dev = gulp.series(cleanStyleFile, compileStyles, watch);
