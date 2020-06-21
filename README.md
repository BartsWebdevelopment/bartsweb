#Barts web design pagina
## Stappenplan hoe een webpagina op te bouwen
### Creëer een github repository
* maak een file aan waar je de website wilt opbouwen C:\...\ __naam-website__ \app\public\wp-content\themes\ __naam_thema__
* maak een Github repository aan
* open de command line
	* type: echo "# test" >> README.md
	* type: git init
	* type: git add README.mc
	* type: git commit -m "first commit"
	* type: git remote add origin git@github.com:BartsWebdevelopment/naam-repository.git
	* type: git push -u origin master

### index.html file
 * Google font toevoegen
 * styesheet toevoegen
 * favicon toevoegen
 
### style.css file
 * perform a basic reset - normalize css
 * define standard font properties - html tag set **font-size** to 10px = **62.5%**. then use rem
 
### install node
  * versie node: cm: _node -v_ --> toont versie node eg: v12.16.3
  * npm installeren in project:
        * naar project folder gaan
        * _npm init_  --> project installeren.
  * install node-sass compiler: _npm install node-sass --save-dev_
  * insert into package.json: `"scripts": {
                                    "compile:sass": "node-sass sass/main.scss css/style.css"
                                  },`
  * run _npm run compile:sass__
  * add "compile:sass": "node-sass sass/main.scss css/style.css **-w**"
  * _npm install live-server -g_ --> install it global
  * run live-server: command line: _live-server_
### build sass folder structure
##### base folder
  * main-directory/sass/base/_animations.scss
  * main-directory/sass/base/_base
  * main-directory/sass/base/_typography
  * main-directory/sass/base/_utilities
##### abstract folder
  * main-directory/sass/abstract/_variables.scss
  * main-directory/sass/abstract/_mixins.scss
  * main-directory/sass/abstract/_functions.scss
##### components folder
##### layout folder
##### pages folder
   * main-directory/sass/pages/_home.scss
   
## Wordpress site
   * screenshot.png toevoegen aan hoofdfolder
#STANDAARD
## FONT
 * google font: Lato
 * font-weight: 400
 * font-size: 16px
 * line-height: 1.7
 * text-kleur: grijs : #777
  
## AFBEELDINGS FORMATEN
 * favicon 16x16px
 * hero-afbeelding:
    genereren via foto-generator voor verschillende formaten
    daarna afbeeldingen verkleinen tot kleinere bestandsgrootte
    
 * logo afbeelding aanbevolen:The normal site logo range is between 250 x 100px and 400px X 100px for a horizontal logo, and 160px X 160 px for a vertical one. There are other schools of thought that recommend smaller logo sizes (less than 100px) as the ideal.
   --> logo afbeelding - keuze = 160 x 160 px.
 * screenshot.png 1200x900px
   
## KLEUREN
 * blue-dark: #1129A8
 * blue-darker: #2F3A75
 * blue-light: #0096DB
 * orange-light: #E07B38
 * orange-dark: #A83711