import { defineConfig } from 'vite'
import laravel, { refreshPaths } from 'laravel-vite-plugin'

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: [...refreshPaths, 'site/templates/**'],
    }),
    // Install "npm install --save-dev @vitejs/plugin-react" and uncomment if you need React
    // react(),

    // Install "npm install --save-dev @vitejs/plugin-vue" and uncomment if you need Vue
    // vue({
    //   template: {
    //     transformAssetUrls: {
    //       base: null,
    //       includeAbsolute: false
    //     }
    //   }
    // }),
  ],
  resolve: {
    alias: {
      '@': '/resources/js',
    },
  },
})
