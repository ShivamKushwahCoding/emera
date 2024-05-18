module.exports = function(grunt) {
    const sass = require('node-sass');
    grunt.initConfig({
        sass: {
            options: {
                includePaths: ["node_modules/bootstrap-sass/assets/stylesheets"],
            },
            dist: {
                options: {
                    outputStyle: "compressed",
                },
                files: [{
                    "assets/css/ttm.style.min.css":             [ "assets/scss/main.scss"],
                },],
            },
        },
        uglify: {
            my_target: {
                files: {
                    "assets/bundles/ttm.bundle.js": ["node_modules/jquery/dist/jquery.js","node_modules/bootstrap/dist/js/bootstrap.bundle.js","assets/js/site.js"],
                },
            },
        },
    });
    grunt.loadNpmTasks("grunt-sass");
    grunt.loadNpmTasks('grunt-contrib-uglify');
    
    grunt.registerTask("buildcss", ["sass"]);	
    grunt.registerTask("buildjs", ["uglify"]);
};