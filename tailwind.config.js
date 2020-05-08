module.exports = {
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
  purge: {
      content: [
          'site/templates/**/*.html',
          'site/templates/**/*.php',
          'resources/**/*.js',
          'resources/**/*.vue'
      ],
  },
}
