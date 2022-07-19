FROM php:latest AS service

CMD ["tail", "-f", "/dev/null"]
