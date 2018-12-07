// https://gist.github.com/leymannx/f7867942184d01aa2311

var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    prefix      = require('gulp-autoprefixer'),
    plumber     = require('gulp-plumber'),
    sassLint    = require('gulp-sass-lint'),
    sourcemaps  = require('gulp-sourcemaps');


// SETTINGS
// ---------------

var sassOptions = {
  outputStyle: 'expanded'
};

var prefixerOptions = {
  browsers: ['ff > 2', '> 2%', 'ie 8']
};


// BUILD SUBTASKS
// ---------------

gulp.task('styles', function() {
	return gulp.src('./style.scss')
		.pipe(sourcemaps.init())
		.pipe(sass(sassOptions))
		.pipe(prefix(prefixerOptions))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./'))
});

gulp.task('sass-lint', function() {
	gulp.src('scss/**/*.scss')
		.pipe(sassLint())
		.pipe(sassLint.format())
		.pipe(sassLint.failOnError());
});

gulp.task('watch', function() {
	gulp.watch('./style.scss', gulp.series('styles'));
	gulp.watch('scss/**/*.scss', gulp.series('styles'));
});


// BUILD TASKS
// ------------

gulp.task('default', gulp.series('styles', 'watch'));
gulp.task('build', gulp.series('styles'));