// IMPORTS
var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var del = require('del');
var path = require('path');
var sourcemaps = require('gulp-sourcemaps');

// Sass
var sass = require('gulp-sass');
var postCSS = require('gulp-postcss');
var cleanCSS = require('postcss-clean');
var normalize = require('node-normalize-scss').includePaths;

// Grids
var susy = 'node_modules/susy/sass';

// Javascript
var babel = require('gulp-babel');
var theme = path.join(__dirname, 'wp-content/themes/mstores');

// CONFIGURATION
var config = {
    img: {
        in: path.join(theme, 'assets/images'),
        out: path.join(theme, 'images/')
    },
    fonts: {
        in: path.join(theme, 'assets/fonts'),
        out: path.join(theme, 'fonts/')
    },
    css: {
        in: path.join(theme, 'assets/scss/'),
        out: path.join(theme, 'css/'),
        maps: 'maps/'
    },
    js: {
        in: path.join(theme, 'assets/js/'),
        out: path.join(theme, 'js/'),
        maps: 'maps/'
    }
};

// TASKS

/**
 * FONTS compilation
 */

gulp.task('clean:fonts', function () {
    return del.sync([
        config.fonts.out + '/**'
    ]);
});

gulp.task('bundle:fonts', ['clean:fonts'], function () {
    return gulp.src(config.fonts.in + '/**/*.*')
        .pipe(gulp.dest(config.fonts.out));
});

gulp.task('watch:fonts', ['bundle:fonts'], function () {
    return gulp.watch(config.fonts.in + '/**/*.*', ['bundle:fonts']);
});

/**
 * IMAGES compilation
 */

gulp.task('clean:images', function () {
    return del.sync([
        config.img.out + '/**'
    ]);
});

gulp.task('bundle:images', ['clean:images'], function () {
    return gulp.src(config.img.in + '/**/*.*')
        .pipe(gulp.dest(config.img.out));
});

gulp.task('watch:images', ['bundle:images'], function () {
    return gulp.watch(config.img.in + '/**/*.*', ['bundle:images']);
});


// Sass / css
gulp.task('bundle:css', function () {
    gulp.src(config.css.in + '*.scss')
        .pipe(sass({
            includePaths: [].concat(normalize, susy),
            outputStyle: 'nested'
        }).on('error', sass.logError))
        .pipe(postCSS([
            cleanCSS({compatibility: 'ie9'})
        ]))
        .pipe(rename('app.min.css'))
        .pipe(gulp.dest(config.css.out));
});

gulp.task('watch:css', ['bundle:css'], function () {
    return gulp.watch(config.css.in + '/**/*.scss', ['bundle:css']);
});

// Javascript
gulp.task('clean:js', function () {
    return del.sync([
        config.js.out + '/**'
    ]);
});

gulp.task('bundle:js', ['clean:js'], function () {
    return gulp.src(config.js.in + '*.js')
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(concat('app.js'))
        .pipe(rename('app.min.js'))
        .pipe(uglify())
        .pipe(sourcemaps.write(config.js.maps))
        .pipe(gulp.dest(config.js.out));
});

gulp.task('watch:js', ['bundle:js'], function () {
    return gulp.watch(config.js.in + '/**/*.*', ['bundle:js']);
});

// DEFAULT
gulp.task('default', ['bundle:fonts', 'bundle:images', 'bundle:css', 'bundle:js']);

// WATCHES
gulp.task('watch', ['watch:fonts','watch:images','watch:css','watch:js']);
