module.exports = function(grunt) {
    // Project configuration.
    grunt.initConfig({
        concat: {
            js: {
              src: ['assets/js/*.js'],
              dest: 'build/scripts.js',
            }   
        }
    });
  
    // Load the plugin.
    grunt.loadNpmTasks('grunt-contrib-concat');

    // Register tasks
    grunt.registerTask('concat-js', ['concat:js']);
}