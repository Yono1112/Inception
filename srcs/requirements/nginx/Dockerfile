FROM debian:latest

RUN apt-get update && \
    apt-get install -y nginx

# EXPOSE 80

# COPY nginx.conf /etc/nginx/nginx.conf

CMD ["nginx", "-g", "daemon off;"]
