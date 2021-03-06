/**
 * Created by Tamara on 7/28/2016.
 */

var gulp = require('gulp'),
    less = require('gulp-less');

gulp.task('watch', function () {
    gulp.watch('./less/*.less', ['less']);
});

gulp.task('less', function () {
    gulp.src('./less/*.less')
        .pipe(less())
        .pipe(gulp.dest('./css/'))
});

gulp.task('default', ['less', 'watch']);