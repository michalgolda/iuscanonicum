const gulp = require("gulp");
const clean = require("gulp-clean");
const sass = require("gulp-sass")(require("sass"));
const rename = require("gulp-rename");

function cleanStyleFile() {
  return gulp.src("style.css", { allowEmpty: true, read: false }).pipe(clean());
}

function compileStyles(minify = true) {
  return gulp
    .src("assets/styles/main.scss")
    .pipe(
      sass({
        outputStyle: minify ? "compressed" : "expanded",
        file: "style",
      }).on("error", sass.logError)
    )
    .pipe(rename("style.css"))
    .pipe(gulp.dest("./"));
}

const compileStylesWithoutCompression = () => compileStyles(false);

function watch() {
  gulp.watch(
    "assets/styles/**/*.scss",
    gulp.series(compileStylesWithoutCompression)
  );
}

exports.build = gulp.series(cleanStyleFile, compileStyles);
exports.dev = gulp.series(
  cleanStyleFile,
  compileStylesWithoutCompression,
  watch
);
