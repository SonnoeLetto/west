const gulp = require('gulp'),
    browserSync = require('browser-sync'),
    sourcemaps = require('gulp-sourcemaps'),
    sass = require('gulp-sass'),
    bourbon = require('node-bourbon'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    babel = require('gulp-babel'),
    del = require('del'),
    imagemin = require('gulp-imagemin'),
    cache = require('gulp-cache');


gulp.task('sass', function(){
    return gulp.src(['app/sass/*.sass'])
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: bourbon.includePaths
        }).on("error", sass.logError))
        .pipe(autoprefixer(['last 15 versions', '>1%', 'ie 8']))
        .pipe(cssnano({
            zindex: false
        }))
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('web/css'))
        .pipe(browserSync.reload({stream: true}));
});


gulp.task('scripts', function() {
    return gulp.src([
        'app/scripts/get_url.js',
        'app/scripts/main.js'
    ])
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['env'],
        }))
        .pipe(concat('main.js'))
        .pipe(gulp.dest('app/js'))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('web/js'))
        .pipe(browserSync.reload({stream: true}));
});

gulp.task('browser-sync', function() {
    browserSync({
        proxy: 'http://west.ua/',
        notify: false
    });
});

gulp.task('default', ['browser-sync', 'sass', 'scripts'], function() {
    gulp.watch(['app/sass/*.sass'], ['sass']);
    gulp.watch(['app/scripts/*.js'], ['scripts']);
    gulp.watch('views/**', browserSync.reload);
});

gulp.task('clear', function() {
    return cache.clearAll();
});
