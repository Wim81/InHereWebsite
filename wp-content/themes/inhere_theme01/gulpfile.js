'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('autoprefixer');

//paths
var sassFiles = 'scss/**/*.scss';
var cssDest = '';
var bootstrapFiles = "bootstrap-4.1.3/scss/**/*.scss"
var bootstrapCSS = '';

gulp.task('sass', function(){
    gulp.src(sassFiles)
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
});

gulp.task('bootstrap', function() {
    gulp.src(bootstrapFiles)
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest(bootstrapCSS));
});

gulp.task('watch',function() {
    gulp.watch(sassFiles,['sass']);
    gulp.watch(bootstrapFiles,['bootstrap']);
});

// Default task
gulp.task('default', function () {
    gulp.start('sass');
    gulp.start('bootstrap');
    gulp.start('watch');
});
