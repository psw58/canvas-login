// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('sass', function() {
    gulp.src('./src/sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest("./src/css/"))
});

gulp.task('default', ['sass'], function() {
    gulp.watch('./src/sass/*.scss', ['sass']);
})