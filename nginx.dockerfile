FROM nginx:latest

COPY ./nginx.conf /etc/nginx/conf.d/app.conf
COPY . /app/