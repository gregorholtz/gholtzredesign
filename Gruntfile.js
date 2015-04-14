module.exports = function (grunt) {

  // Load grunt tasks automatically
  require('load-grunt-tasks')(grunt);

  // Define the configuration for all the tasks
  grunt.initConfig({
    watch: {
      js: {
        files: ['assets/js/source/**/*.js'],
        tasks: ['uglify']
      },
      styles: {
        files: ['assets/sass/**/*.{scss,sass}'],
        tasks: ['sass', 'autoprefixer']
      },
    },

    // Compile SASS to CSS
    sass: {
      dist: {
        options: {
          trace: true,
          style: 'compressed',
          cacheLocation: 'assets/.sass-cache',
        },
        files: {
          'assets/css/main.css': 'assets/scss/app.scss'
        }
      }
    },

    // Add vendor prefixed styles
    autoprefixer: {
      options: {
        browsers: ['last 2 version', 'ie 9'],
        map: true
      },
      dist: {
        src: 'assets/css/app.css',
        dest: 'assets/css/app.css'
      }
    },

    // Concatenate and minify JavaScript
    uglify: {
      dist: {
        options: {
          sourceMap: 'assets/js/app.min.js.map'
        },
        files: {
          'assets/js/app.min.js': [
            'assets/js/source/app.js'
          ]
        }
      }
    },

  });

  grunt.registerTask('default', ['watch']);

  // Register the `build` task
  grunt.registerTask('build', ['sass', 'autoprefixer', 'uglify']);

};
