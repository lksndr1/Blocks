const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const browserSync = require('browser-sync').create();

const paths = {
    scss: './inc/acf/blocks/**/*.scss',
    css: './css',
    php: './**/*.php',
};

gulp.task('scss', function () {
    return gulp
        .src('./inc/acf/blocks/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([autoprefixer({ overrideBrowserslist: ['last 2 versions'], cascade: false })]))
        .pipe(gulp.dest(paths.css))
        .pipe(cleanCSS())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(paths.css))
        .pipe(browserSync.stream());
});

gulp.task('serve', function () {
    browserSync.init({
        proxy: 'http://nimrod-blocks/q',
        notify: false,
    });

    gulp.watch(paths.scss, gulp.series('scss'));
    gulp.watch(paths.php).on('change', browserSync.reload);
});

gulp.task('default', gulp.series('scss', 'serve'));
