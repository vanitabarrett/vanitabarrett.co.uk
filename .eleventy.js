module.exports = function (config) {
  // All passthroughs
  config.addPassthroughCopy('.htaccess');
  config.addPassthroughCopy('src/assets/project-images/*');
  config.addPassthroughCopy('src/assets/blog-images/*');
  config.addPassthroughCopy('src/favicon.ico');
  config.addPassthroughCopy('src/favicon-16x16.png');
  config.addPassthroughCopy('src/favicon-32x32.png');

  config.addFilter('sortByStartDate', values => {
    console.log(values)
    return values.sort((a, b) => new Date(b.data.end_date) - new Date(a.data.end_date))
  })

  return {
    dir: {
      input: 'src',
      output: '_site',
    },
    passthroughFileCopy: true,
  };
};
