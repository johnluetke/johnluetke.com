FROM nginx:alpine

RUN npm install
RUN npm build

# Paths are relative to dist/
COPY www /usr/share/nginx/html
COPY johnluetke.nginx.conf /etc/nginx/conf.d/default.conf
