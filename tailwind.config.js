module.exports = {
  purge: [
    
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    
    fontFamily:{
      'sans':['PT Sans'],
      'ind':['Indie Flower'],
      'teg':['New Tegomin'],
    },

    container:{
      center: true,
    },
    extend: {
      gridTemplateColumns: {
        // Simple 16 column grid
      '16': 'repeat(16, minmax(0, 1fr))',

        // Complex site-specific column configuration
      'footer': '200px minmax(900px, 1fr) 100px',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
