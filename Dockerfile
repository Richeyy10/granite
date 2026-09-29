FROM php:8.3-cli

WORKDIR /app
COPY . /app

# Render/Railway give the port through the PORT variable
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-8080} -t /app"]