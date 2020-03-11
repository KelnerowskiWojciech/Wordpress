const gulp = require('gulp');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const pump = require('pump');
const uglify = require('gulp-uglify');
const imagemin = require('gulp-imagemin');
const rename = require('gulp-rename');

gulp.task('sass', function() {
    //gulp.src(badInvalidGlobs, { allowEmpty: true })
    return gulp.src('/src/scss/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('dist/css'))
    //.pipe(cleanCSS())
    .pipe(rename({suffix: 'style.min.css'}))
    .pipe(gulp.dest('/dist/css'))
});