module.exports = function (config) {
  // All passthroughs
  config.addPassthroughCopy('.htaccess');

  return {
    dir: {
      input: 'src',
      output: '_site',
    },
    passthroughFileCopy: true,
  };
};
