'use strict';

const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();

gulp.task('sass', function () {
	return gulp.src('./scss/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
			cascade: false
		}))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('./css'))
		.pipe(browserSync.stream());
});

gulp.task('watch', function () {
	browserSync.init({
		server: {
			baseDir: "./"
		},
		port: 3000
	});
	gulp.watch('./scss/**/*.scss', gulp.series('sass'));
	gulp.watch('./**/*.html').on('change', browserSync.reload);
});