FROM php:8.4-cli-alpine

# Install dependensi sistem, tools kompresi, Node.js, NPM, dan Git
RUN apk add --no-cache \
    git \
    curl \
    unzip \
    zip \
    tar \
    openssh-client \
    nodejs \
    npm

# Install Composer resmi dari image composer
COPY --from=docker.io/composer:latest /usr/bin/composer /usr/bin/composer

# Tentukan direktori kerja utama
WORKDIR /app

# Opsional: Jika ingin meng-copy seluruh source code saat build image lokal
COPY . .

# Verifikasi versi tool (Opsional untuk debugging log)
RUN node -v && npm -v && composer --version