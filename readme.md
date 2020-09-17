# WP Flexible Starter template
Our Wordpress starter template which uses Flexible Grid System 
Documentation: https://dnomak.com/flexiblegs/learn/wrap/?method=css

## Manual Installation
1. Clone the theme into the "wp-content/themes/" folder:
```bash
git clone https://github.com/twelve12/wp-flexible-starter-template.git theme-name
```
2. Update the template information in "style.scss" file (Theme Name, Description, etc.)
3. Open terminal in the the template folder you just clonned and configured, and run:
```bash
npm run build
```
4. Activate the theme from the Wordpress Admin panel


## Optional: Installation with [Projector](https://github.com/bilaltas/projector) (Only with Docker on Mac)
1. Install projector (See: https://github.com/bilaltas/projector)
2. Run the command
```bash
projector starter
```
3. Answer the following questions


## Local Usage
1. Open terminal in the the template folder you just clonned and configured, and run:
```bash
npm start
```
2. Then "gulp" will be watching the .scss files that are in "scss" folder.