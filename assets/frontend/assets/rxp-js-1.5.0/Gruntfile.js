'use strict';

module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        // Metadata.
        pkg: grunt.file.readJSON('package.json'),
        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd") %>' +
        '\n * <%= pkg.description %>' +
        '<%= pkg.homepage ? "\\n * " + pkg.homepage : "" %>' +
        '\n * Licensed <%= _.map(pkg.licenses, "type").join(", ") %>' +
        '\n */\n',
        // Task configuration.
        concat: {
            options: {
                banner: '<%= banner %>',
                stripBanners: true
            },
            dist: {
                src: ['lib/*.js'],
                dest: 'dist/<%= pkg.name %>.js'
            },
        },
        uglify: {
            options: {
                banner: '<%= banner %>'
            },
            dist: {
                src: '<%= concat.dist.dest %>',
                dest: 'dist/<%= pkg.name %>.min.js'
            },
        },
        jshint: {
            options: {
                jshintrc: '.jshintrc'
            },
            gruntfile: {
                src: 'Gruntfile.js'
            },
            lib: {
                options: {
                    jshintrc: 'lib/.jshintrc'
                },
                src: ['lib/**/*.js']
            }
        },
        watch: {
            gruntfile: {
                files: '<%= jshint.gruntfile.src %>',
                tasks: ['jshint:gruntfile']
            },
            lib: {
                files: '<%= jshint.lib.src %>',
                tasks: ['jshint:lib', 'jasmine']
            },
            specs: {
                files: 'specs/unit/*.js',
                tasks: ['jasmine']
            }
        },
        jasmine : {
            src : 'lib/*.js',
            options: {
                specs: 'specs/unit/*spec.js',
                helpers: 'specs/unit/*helper.js'
            }
        },
        intern: {
            client: {
                options: {
                    config: 'specs/intern.config'
                }
            },
            runner: {
                options: {
                    config: 'specs/intern.config',
                    runType: 'runner',
                    // leaveRemoteOpen: true
                }
            }
        },
        php: {
            test: {
                options: {
                    port: '8989',
                    silent: true,
                }
            }
        }
    });

    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-jasmine');
    grunt.loadNpmTasks('intern');
    grunt.loadNpmTasks('grunt-php');

    grunt.registerTask('test:functional', ['php', 'intern:runner']);
    grunt.registerTask('test:unit', ['jasmine']);
    grunt.registerTask('test', ['test:unit', 'test:functional']);

    // Default task.
    grunt.registerTask('default', ['jshint', 'concat', 'uglify']);

};
