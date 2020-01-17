'use strict';

var gulp         = require('gulp');
var sass         = require('gulp-sass');
var plumber      = require('gulp-plumber');
var postcss      = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
// var minify       = require('gulp-csso');
// var rename       = require('gulp-rename');
var  sourcemaps  = require ('gulp-sourcemaps');
var  imagemin    = require ('gulp-imagemin');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./css'))
    // .pipe(minify())
    // .pipe(rename('style.min.css'))
    // .pipe(gulp.dest('./css'));

});

gulp.task('watch', function () {
  gulp.watch(['./sass/**/*.scss', '*.html', './js/**/*.js'], gulp.parallel('sass'));
});

gulp.task('imagemin', function () {
  return gulp.src('./images/**/*{png,jpg,svg}')
    .pipe(imagemin([
      imagemin.optipng({optimizationLevel: 3}),
      imagemin.jpegtran({progressive: true}),
      imagemin.svgo()
    ]))
    .pipe(gulp.dest('./build/images'));
});

gulp.task('default', gulp.parallel('watch'));

gulp.task('copy', function () {
  return gulp.src([
    'fonts/**/*.{woff,woff2}',
    'js/**/*.js',
    'css/**/*.css',
    '*.html'
  ], {
    base: '.'
  })
  .pipe(gulp.dest('build'));
});
