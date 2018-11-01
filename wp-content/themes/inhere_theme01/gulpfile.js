'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var browsersync = require('browser-sync').create();
/*
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');

*/

//paths
var sassFiles = 'scss/**/*.scss';
var cssDest = './';
var bootstrapFiles = "bootstrap-4.1.3/scss/**/*.scss"
var bootstrapCSS = './';

gulp.task('sass', function () {
    return gulp.src(sassFiles)
        .pipe(sourcemaps.init())
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(cssDest))
        .pipe(browsersync.reload({stream: true}));
});

gulp.task('bootstrap', function () {
    return gulp.src(bootstrapFiles)
        .pipe(sourcemaps.init())
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(bootstrapCSS));
});

gulp.task('browser-sync', function() {
    browsersync.init({
        server: false,
        proxy: {
            target: "localhost/W005_InHereSite/", // can be [virtual host, sub-directory, localhost with port]
            ws: true // enables websockets
        },
    });
});


// Default task
gulp.task('default', function() {
    gulp.task('browser-sync');
    gulp.watch(sassFiles, gulp.parallel(['sass']));
    gulp.watch(bootstrapFiles,gulp.parallel(['bootstrap']));
});
