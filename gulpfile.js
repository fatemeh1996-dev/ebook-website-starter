const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function compileSass() {
    return gulp.src('assets/scss/main.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(gulp.dest('assets/css'));
}

function watchFiles() {
    gulp.watch('assets/scss/**/*.scss', compileSass);
}

exports.default = gulp.series(compileSass, watchFiles);
