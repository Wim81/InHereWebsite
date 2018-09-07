'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

//paths
var sassFiles = 'scss/**/*.scss',
    cssDest = '';

gulp.task('sass', function(){
    gulp.src(sassFiles)
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
});

gulp.task('watch',function() {
    gulp.watch(sassFiles,['sass']);
});

// Default task
gulp.task('default', function () {
    gulp.start('sass');
    gulp.start('watch');
});
