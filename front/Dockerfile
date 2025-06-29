# Stage 1: build Angular app
FROM node:22-alpine AS builder
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm ci --silent
COPY . .
ARG CONFIGURATION=production
RUN npm run build -- --configuration $CONFIGURATION

# Stage 2: serve build with Nginx
FROM nginx:stable-alpine
# Copy compiled Angular dist
COPY --from=builder /app/dist/front/browser /usr/share/nginx/html
# Copy custom Nginx config for SPA
COPY ../config/nginx.conf /etc/nginx/conf.d/default.conf:ro
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
