const { DateTime } = require("luxon");

module.exports = function (config) {
  config.addWatchTarget("./src/assets/styles/*.scss");

  // All passthroughs
  config.addPassthroughCopy('.htaccess');
  config.addPassthroughCopy('src/assets/js/*');
  config.addPassthroughCopy('src/assets/project-images/*');
  config.addPassthroughCopy('src/assets/blog-images/*');
  config.addPassthroughCopy('src/assets/skill-icons/*');
  config.addPassthroughCopy('src/favicon.ico');
  config.addPassthroughCopy('src/favicon-16x16.png');
  config.addPassthroughCopy('src/favicon-32x32.png');

  config.addFilter('sortByStartDate', values => {
    return values.sort((a, b) => new Date(b.data.end_date) - new Date(a.data.end_date))
  })

  config.addFilter('sortByPublishedDate', values => {
    return values.sort((a, b) => new Date(b.data.published_date) - new Date(a.data.published_date))
  })

  config.addFilter("postDate", (dateObj) => {
    return DateTime.fromJSDate(dateObj).toLocaleString(DateTime.DATE_MED);
  });

  return {
    dir: {
      input: 'src',
      output: '_site',
    },
    passthroughFileCopy: true,
  };
};
