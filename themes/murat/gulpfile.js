const gulp = require('gulp')
const less = require('gulp-less')
const browserSync = require('browser-sync')
const uglify = require('gulp-uglify')
const rename = require('gulp-rename')

gulp.task('less', () => {
  return gulp.src('css/less/style.less')
    .pipe(less())
    .pipe(gulp.dest('./css/'))
})

gulp.task('js', () => {
  return gulp.src(['js/*.js', '!js/*.min*.js'])
    .pipe(uglify())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('js/'))
})

gulp.task('browser-sync', () => {
  browserSync.init({
    proxy: {
      target: 'http://murathaffner.local',
      ws: true,
    },
  })
  gulp.watch('./css/*.css').on('change', browserSync.reload)
})

gulp.task('watch', () => {
  gulp.watch('./css/less/**/*.less', gulp.series('less'))
  gulp.watch(['js/*.js', '!js/*.min*.js'], gulp.series('js'))
})

gulp.task('default', gulp.parallel('watch', 'browser-sync'))
