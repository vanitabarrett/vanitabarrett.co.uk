module.exports = function (config) {
  // All passthroughs
  config.addPassthroughCopy('.htaccess');
  config.addPassthroughCopy('src/assets/project-images/*');
  config.addPassthroughCopy('src/assets/blog-images/*');
  config.addPassthroughCopy('src/favicon.ico');
  config.addPassthroughCopy('src/favicon-16x16.png');
  config.addPassthroughCopy('src/favicon-32x32.png');

  return {
    dir: {
      input: 'src',
      output: '_site',
    },
    passthroughFileCopy: true,
  };
};
