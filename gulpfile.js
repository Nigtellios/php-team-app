'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const concat = require('gulp-concat');

gulp.task('sass', function () {
  return gulp.src('./views/**/*.scss')
    .pipe(concat('custom.scss'))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./views/'));
});
