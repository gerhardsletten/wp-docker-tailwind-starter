const glob = require('glob')

module.exports = {
  mode: 'jit',
  content: [
    './assets/**/*.js',
  ].concat(glob.sync("./**/*.php")),
  theme: {
    extend: {
      colors: {
        primary: 'rgb(30 41 59)',
      },
      fontFamily: {
        'serif': ['Abril Fatface', 'serif']
      },
    },
  },
  variants: {},
  plugins: [],
}
