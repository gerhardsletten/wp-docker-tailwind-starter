# Wordpress docker tailwind starter

Wordpress theme and docker-compose workflow for development.

## Usage development

Run `docker-compose up` and within `wp-theme` run `npm run dev` and open [localhost:3000/](http://localhost:3000/)

## Build for production

```
cd wp-theme
npm run build::prod
```
Ready to upload theme will be found in `wp-theme/dist`

## Credits

Docker-compose setup [davidyeiser/docker-wordpress-theme-setup](https://github.com/davidyeiser/docker-wordpress-theme-setup).
