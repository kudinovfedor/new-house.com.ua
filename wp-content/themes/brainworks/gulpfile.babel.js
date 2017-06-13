'use strict';

import gulp from 'gulp';
import sass from 'gulp-sass';
import rename from 'gulp-rename';
import plumber from 'gulp-plumber';
import cleancss from 'gulp-clean-css';
import sourcemaps from 'gulp-sourcemaps';

gulp.task('sass', () => {
  return gulp.src('sass/**/*.scss')
    .pipe(plumber())
    //.pipe(sourcemaps.init())
    //.pipe(sass(config.sass).on('error', sass.logError))
    .pipe(sass({
      outputStyle: 'expanded', // nested, expanded, compact, compressed
      precision: 5, sourceComments: false
    }))
    //.pipe(sourcemaps.write('/'))
    .pipe(gulp.dest('./'));
});

gulp.task('css', () => {
  return gulp.src('style.css')
  //.pipe(sourcemaps.init())
    .pipe(cleancss({compatibility: 'ie7', debug: true}))
    .pipe(rename({suffix: '.min'}))
    //.pipe(sourcemaps.write('/'))
    .pipe(gulp.dest('./'));
});

gulp.task('default', () => {
  gulp.watch('sass/**/*.scss', gulp.series('sass'));
  //gulp.watch('style.css', gulp.series('css'));
});
