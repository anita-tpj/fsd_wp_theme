const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
//const concat = require('gulp-concat');

// Logs Message
gulp.task('message', function(){
  return console.log('Gulp is running...');
});


// Optimize Images
gulp.task('imageMin', () =>
	gulp.src('assets/images/*')
		.pipe(imagemin())
		.pipe(gulp.dest('images'))
);

// Minify JS
gulp.task('minify', function(){
  gulp.src('assets/js/*.js')
      .pipe(uglify())
      .pipe(gulp.dest('js'));
});


// Compile Sass & Inject Into Browser
gulp.task('sass', function(){
  gulp.src('assets/sass/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('assets'))
      .pipe(gulp.dest(''))
      .pipe(browserSync.stream());
});


// Watch & Serve
gulp.task('serve', function() {
  browserSync.init({
      server: "./assets"  
  });

  gulp.watch('assets/js/*.js', ['minify']);
  gulp.watch('assets/images/*', ['imageMin']);
  gulp.watch('assets/sass/*.scss', ['sass']);
  gulp.watch("assets/*.html").on('change', browserSync.reload);
});

// Default Task
gulp.task('default', ['message', 'imageMin', 'sass', 'minify', 'serve']);