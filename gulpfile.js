var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('scss', function() {
	return gulp.src('scss/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({errLogToConsole:true,
			outputStyle: 'expanded'
		}))
	.pipe(sourcemaps.write())
	// .pipe(gulp.dest('css/'))
	// .pipe(gulp.dest('/'));
	.pipe(gulp.dest(''));

});

gulp.task('watch', function() {
	gulp.watch('scss/*.scss', ['scss']);
});
