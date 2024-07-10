let mix = require("laravel-mix")
const path = require("path")
const fs = require("fs")

mix.setPublicPath('/');

const compileDirectory = (directory, extension, outputDirectory) => {
  fs.readdirSync(directory).forEach((item) => {
    const fullPath = path.join(directory, item)

    if (fs.lstatSync(fullPath).isDirectory()) {
      const newOutputDirectory = path.join(outputDirectory, item)
      compileDirectory(fullPath, extension, newOutputDirectory)
    } else if (path.extname(item) === `.${extension}`) {
      if (extension === "scss") {
        mix.sass(fullPath, outputDirectory).options({
          processCssUrls: false,
        })
      } else if (extension === "js") {
        mix.js(fullPath, outputDirectory)
      }
    }
  })
}

compileDirectory("scss/", "scss", "dist/css-dist")
compileDirectory("js/", "js", "dist/js-dist")
compileDirectory("acf-blocks/", "scss", "dist/acf-blocks")
compileDirectory("acf-blocks/", "js", "dist/acf-blocks")
compileDirectory("page-templates/", "scss", "dist/page-templates")
compileDirectory("page-templates/", "js", "dist/page-templates")
compileDirectory("template-parts/", "scss", "dist/template-parts")
compileDirectory("template-parts/", "js", "dist/template-parts")
compileDirectory("single-pages/", "scss", "dist/single-pages")
compileDirectory("single-pages/", "js", "dist/single-pages")

mix.version();

