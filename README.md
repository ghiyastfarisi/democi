# democi
php, codeigniter, yarn, parceljs, docker, apache

## requirement
- docker installation
- yarn or npm installation (yarn recommended)

## how to run
- run `yarn install` or `npm install`
- run `yarn run build`
- run `docker-build.sh`
- run `docker-run-dev.sh`

## framework structure

### [ PHP Codeigniter ]
- able to create own base template builder -> views/builder/$custom_template_name/index.php
- managed template by pages -> views/pages/$custom_pages_group_name/$custom_file_name.php

### [ Javascript ]
- asset bundler with ParcelJS
- default folder for bundler is `project_file/bundle`
- bundle separated into `application`, `dist`, and `template`
- `application` folder used for asset development of the main application, it consists of `builder`, `pages` and `lib`
- `dist` folder used as output for asset entry included at webpage, it will automatically generated by parcel-bundler after `yarn run build`
- `template` used as mixed assets if you're develop some different style