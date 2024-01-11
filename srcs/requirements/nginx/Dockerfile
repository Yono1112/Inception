FROM debian:latest

RUN apt-get update && \
    apt-get install -y nginx openssl

RUN mkdir -p /etc/ssl/private && \
    openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -subj "/C=US/ST=State/L=City/O=Organization/CN=example.com" \
    -keyout /etc/ssl/private/private.key \
    -out /etc/ssl/certs/certs.crt

COPY conf/nginx.conf /etc/nginx/nginx.conf

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]
