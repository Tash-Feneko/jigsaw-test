const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  purge: {
    content: [
      'source/**/*.html',
      'source/**/*.md',
      'source/**/*.js',
      'source/**/*.php',
      'source/**/*.vue',
    ],
    options: {
      whitelist: [
        /language/,
        /hljs/,
        /algolia/,
        'py-1',
        'lg:py-0',
        'mt-4'
      ],
    },
  },
  theme: {
    extend: {
      screens: {
        'dark': {'raw': '(prefers-color-scheme: dark)'}
      },
      colors: {
        gray: {
          ...colors.gray,
          '100': '#F6F8F9',
          '350': '#D6DEE8',
          '850': '#242C3A'
        },
        pink: {
          '600': '#d9a8b5',
          '700': '#d9a8b5'
        }
      },
      fontFamily: {
        sans: [
          'Inter, Arial, sans-serif'
        ],
        mono: [
          'monospace',
        ],
      },
      lineHeight: {
        normal: '1.6',
        loose: '1.75',
      },
      maxWidth: {
        none: 'none',
        '7xl': '80rem',
        '8xl': '88rem'
      },
      spacing: {
        '7': '1.75rem',
        '9': '2.25rem'
      },
      boxShadow: {
        'lg': '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
      }
    },
    fontSize: {
      'xs': '.8rem',
      'sm': '.925rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.75rem',
      '4xl': '2.125rem',
      '5xl': '2.625rem',
      '6xl': '10rem',
    },
    opacity: {
      '5': '0.05',
      '10': '0.1'
    },
    scale: {
      '-100': '-1',
    }
  },
  variants: {
    borderRadius: ['responsive', 'focus'],
    borderWidth: ['responsive', 'active', 'focus'],
    width: ['responsive', 'focus'],
    textColor: ['responsive', 'active', 'focus', 'hover', 'group-hover'],
  },
  plugins: [
    function({ addUtilities }) {
      const newUtilities = {
        '.transition-fast': {
          transition: 'all .2s ease-out',
        },
        '.transition': {
          transition: 'all .5s ease-out',
        },
      }
      addUtilities(newUtilities)
    }
  ]
}
