docker run -it --rm --name democi -p 8081:80 -e CI_ENV=development -v $(pwd):/var/www/html democi:v1
