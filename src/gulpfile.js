var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

// Server
gulp.task('serve', ['sass'], function() {

  browserSync.init({
    server: "../"
  });

  gulp.watch("src/scss/*.scss", ['sass']);
  gulp.watch("src/scss/*/*.scss", ['sass']);
  gulp.watch("src/js/*.js").on('change', browserSync.reload);
});

// Sass -> CSS
gulp.task('sass', function() {
  return gulp.src("src/scss/style.scss")
    .pipe(sass())
    .pipe(gulp.dest("../"))
    .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);
