var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    rucksack    = require('gulp-rucksack'),
    sourcemaps  = require('gulp-sourcemaps'),
    concat      = require('gulp-concat'),
    cleanCSS    = require('gulp-clean-css'),
    rename      = require('gulp-rename'), // to rename any file
    notify      = require('gulp-notify'),
    order       = require('gulp-order'),
    uglify      = require('gulp-uglify'),
    browserSync = require('browser-sync').create();

var mainBowerFiles = require('main-bower-files');



// ==========
// = STYLES =
// ==========

    gulp.task('styles', function() {
        gulp.src('assets/sass/**/*.scss')
            .pipe(sourcemaps.init())
            .pipe(sass({
                style: 'expanded',
                errLogToConsole: true
            }))
            .pipe(rucksack())
            .pipe(sourcemaps.write())
            .pipe(gulp.dest(''))
            .pipe(rename({ basename: "style" }))
            .pipe(cleanCSS())
            .pipe(gulp.dest('css/'))
            .pipe(notify({ message: 'Styles task complete' }))
            .pipe(browserSync.reload({stream:true}));
    });


// ===========
// = SCRIPTS =
// ===========

    //  Bower Scripts
    gulp.task('bower', function() {
        return gulp.src(mainBowerFiles([['**/*.js']]), {
            debugging:true,
            checkExistence: true
        })
        .pipe(concat('libs.js'))
        .pipe(gulp.dest('build/scripts'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify({
            outSourceMap: true
        }))
        .pipe(gulp.dest('build/scripts'))
        .pipe(notify({ message: 'Bower scripts task complete' }));
    });

    // Scripts
    gulp.task('scripts', function() {
        return gulp.src('assets/scripts/**/*.js')
        .pipe(order([
            "assets/scripts/libs/velocity.js",
            "assets/scripts/libs/*.js",
            "assets/scripts/main.js"
        ], {
            base: process.cwd()
        }))
        .pipe(concat('main.js'))
        .pipe(gulp.dest('build/scripts'))
        .pipe(rename({ suffix: '.min' }))
        .pipe(uglify({
            outSourceMap: true
        }))
        .pipe(gulp.dest('build/scripts'))
        .pipe(notify({ message: 'Scripts task complete' }));
    });


// =========
// = WATCH =
// =========

    gulp.task('watch', function() {

        browserSync.init({
            proxy: "hoganmicro.wp",
            port: 6000
        });

        // Watch .scss files
        gulp.watch('assets/sass/**/*.scss', ['styles']);

        // Watch .js files
        gulp.watch('assets/scripts/**/*.js', ['scripts']);

        // Watch image files
        // gulp.watch('assets/images/**/*', ['images']);

    });