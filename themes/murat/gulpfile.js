const gulp = require('gulp')
const less = require('gulp-less')
const browserSync = require('browser-sync')

gulp.task('less', () => {
  return gulp.src('css/less/style.less')
    .pipe(less())
    .pipe(gulp.dest('./css/'))
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
})

gulp.task('default', gulp.parallel('watch', 'browser-sync'))
