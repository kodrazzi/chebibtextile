"use strict";
var gulp = require('gulp');
var pug = require('gulp-pug');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var php = require('gulp-connect-php');
var browserSync = require('browser-sync');
var reload = browserSync.reload;

// Pug
gulp.task('pug', function () {
  return gulp.src('./pug/*.pug')
    .pipe(pug({
      pretty: true
    }))
    .pipe(gulp.dest('./html'))
    .pipe(reload({
      stream: true
    }));
});

// Sass
gulp.task('sass', function () {
  return gulp.src('./scss/**/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(cssmin())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(sourcemaps.write('/'))
    .pipe(gulp.dest('./css'))
    .pipe(reload({
      stream: true
    }));
});

// Script
gulp.task('scripts', function () {
  return gulp.src('./js/app.js')
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./js'))
    .pipe(reload({
      stream: true
    }));
});

// Php
gulp.task('php', function () {
  php.server({
    base: 'build',
    keepalive: true
  });
});

// Browser Sync
gulp.task('browser-sync', function () {
  browserSync({
    proxy: 'localhost',
    port: 4446,
    open: true,
    notify: false
  });
});

// Watch
gulp.task('watch', function () {

  // Watch .pug files
  gulp.watch('./pug/**/*.pug', ['pug']);

  // Watch .scss files
  gulp.watch('./scss/**/*.scss', ['sass']);

  // Watch .js files
  gulp.watch('./js/*.js', ['scripts']);

  // Watch .html files
  gulp.watch('./html/*.html').on('change', browserSync.reload);

  // Watch .php files
  gulp.watch('*.php').on('change', browserSync.reload);

});

// Default task
gulp.task('default', ['pug', 'sass', 'scripts', 'php', 'browser-sync', 'watch']);