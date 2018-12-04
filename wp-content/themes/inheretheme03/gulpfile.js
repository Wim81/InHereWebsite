// gulpfile.js
var gulp = require("gulp");
var sass = require("gulp-sass");
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var cssnano = require("cssnano");
var sourcemaps = require("gulp-sourcemaps");
var browserSync = require("browser-sync").create();
var rename = require("gulp-rename");
var watch = require("gulp-watch");
var jslint = require("gulp-jslint");
var uglify = require("gulp-uglify");
var imagemin = require("gulp-imagemin");

// Definieer hier de locaties
var paths = {
    styles: {
        // By using styles/**/*.sass we're telling gulp to check all folders for any sass file
        src: "src/scss/**/*.scss",
        // Compiled files will end up in whichever folder it's found in (partials are not compiled)
        dest: "./"
    },
    html: "./*.html",
    scripts: {
        src: "src/js/**/*.js",
        dest: "./"
    },
    images: {
        // later nog toevoegen: png & gif, maar test al eens met jpg
        src: "src/img/**/*.{jpg,png,gif,svg}",
        dest: "img/"
    }
};

// Define tasks after requiring dependencies
function style() {
    // Where should gulp look for the sass files?
    // My .sass files are stored in the styles folder
    // (If you want to use scss files, simply look for *.scss files instead)
    return (
        gulp
            .src(paths.styles.src)
            // Initialize sourcemaps before compilation starts
            .pipe(sourcemaps.init())
            // Use sass with the files found, and log any errors
            .pipe(sass())
            .on("error", sass.logError)
            // Use postcss with autoprefixer and compress the compiled file using cssnano
            .pipe(postcss([autoprefixer(), cssnano()]))
            // Now add/write the sourcemaps
            .pipe(sourcemaps.write())
            .pipe(rename("style.css"))
            // What is the destination for the compiled file?
            .pipe(gulp.dest(paths.styles.dest))
            // Add browsersync stream pipe after compilation
            .pipe(browserSync.stream())
    );
}

// Expose the task by exporting it
// This allows you to run it from the commandline using
// $ gulp style
exports.style = style;

// JS task
function script() {
    return (
        gulp
            .src(paths.scripts.src)
            .pipe(sourcemaps.init())
            .pipe(jslint())
            .pipe(uglify())
            .pipe(sourcemaps.write())
            .pipe(gulp.dest(paths.scripts.dest))
            .pipe(browserSync.stream())
    );
}

exports.script = script;

// images task
function images() {
    return (
        gulp
            .src(paths.images.src)
            .pipe(imagemin({verbose: true}))
            .pipe(gulp.dest(paths.images.dest))
            .pipe(browserSync.stream())
    );
}

exports.images = images;

// A simple task to reload the page
function reload() {
    browserSync.reload();
}


function watcher(){
    browserSync.init({
        // You can tell browserSync to use this directory and serve it as a mini-server
        server: {
            baseDir: "./"
        }
        // If you are already serving your website locally using something like apache
        // You can use the proxy setting to proxy that instead
        // proxy: "yourlocal.dev"
    });
    style();
    script();
    images();
    // gulp.watch takes in the location of the files to watch for changes
    // and the name of the function we want to run on change
    watch(paths.styles.src, style);
    watch(paths.html, reload);
    watch(paths.scripts.src, script);
    watch(paths.images.src, images);
}

// Don't forget to expose the task!
exports.watch = watcher;
