FROM node:alpine AS build

WORKDIR /app

# Install dependencies before building the Angular app.
COPY . .
RUN npm ci
RUN ls -l

# Build static assets for production.
RUN npm run build
RUN ls -l

FROM nginx:alpine

# Copy the compiled frontend output into nginx's served directory.
COPY --from=build /app/www /usr/share/nginx/html

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
