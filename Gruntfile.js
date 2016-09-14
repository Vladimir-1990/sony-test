module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'public/css/style.css' : 'resources/assets/sass/style.scss'
				}
			}
		},
		concat: {
			options: {
				separator: ';',
			},
			dist: {
				src: ['resources/assets/js/jquery.min.js','resources/assets/js/app.js'],
				dest: 'public/js/script.js',
			},
		},
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.registerTask('default',['sass','concat']);
}