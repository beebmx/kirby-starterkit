import theme from 'tailwindcss/defaultTheme'
import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

/** @type {import('tailwindcss').Config} */
module.exports = {
  theme: {
    extend: {}
  },
  variants: {
    extend: {}
  },
plugins: [forms, typography],
  content: [
    "site/templates/**/*.html",
    "site/templates/**/*.php",
    "resources/**/*.js",
    "resources/**/*.vue"
  ]
};
