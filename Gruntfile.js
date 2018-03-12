module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        //compass
        compass: {
            dev: {
              options: {
                sassDir: 'dev/sass',
                cssDir: 'site',
                specify: 'dev/sass/style.scss',
                imagesDir: 'dev/i/'
              }
            },
            dist: {
                options: {
                    sassDir: 'dev/sass',
                    cssDir: 'wp/wp-content/themes/summit',
                    specify: 'dev/sass/style.scss',
                    imagesDir: 'dev/i/'
                }
            }
        },

        copy: {
            dev: {
              files: [
                {
                  expand: true,
                  cwd: 'dev',
                  src: ['*.html', '*.php', 'js/**/*', 'partials/*.php', 'i/**/*', 'fonts/**/*', 'data/**/*', 'components/**/*'],
                  dest: 'site/'
                }
              ]
            },
            dist: {
                files: [
                    {
                        expand: true,
                        cwd: 'dev',
                        src: ['*.html', '*.php', 'js/**/*', 'partials/*.php', 'i/**/*', 'fonts/**/*', 'data/**/*'],
                        dest: 'wp/wp-content/themes/summit/'
                    }
                ]
            }
        },
      browserify: {
        dev: {
          files: {
            // destination for transpiled js : source js
            'site/js/site.js': 'site/js/site.js'
          },
          options: {
            transform: [['babelify', { presets: "es2015" }]],
            browserifyOptions: {
              debug: true
            }
          }
        },
        dist: {
          files: {
            // destination for transpiled js : source js
            'site/js/site.js': 'site/js/site.js'
          },
          options: {
            transform: [['babelify', { presets: "es2015" }]],
            browserifyOptions: {
              debug: true
            }
          }
        }
      },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 8', 'ie 9', 'ie 10']
            },
            dev: {
              src: 'site/style.css'
            },

            dist: {
                src: 'wp/wp-content/themes/summit/style.css'
            }

        },

        clean: {
          dev: ['site/'],
            dist: ['wp/wp-content/themes/summit/']
        },

        watch: {
            files: ['dev/**'],
            tasks: ['dev'],
            options: {
                livereload: true
            }
        }

    });

    //Load in plugins
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-browserify');


  grunt.registerTask('dev', ['clean:dev', 'copy:dev', 'compass:dev', 'browserify:dev', 'autoprefixer:dev']);
}