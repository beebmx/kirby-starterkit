module.exports = {
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp'),
  ],
  content: [
    'site/templates/**/*.html',
    'site/templates/**/*.php',
    'resources/**/*.js',
    'resources/**/*.vue',
  ],
}
