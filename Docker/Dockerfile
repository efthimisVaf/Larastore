FROM alpine:edge
RUN apk add composer php-xml py3-pip php7-fileinfo php7-tokenizer php7-dom php7-xmlwriter git php7-pdo php7-pdo_mysql php7-session
RUN python3 -m pip install PyMySQL
COPY ./ /Larastore
WORKDIR /Larastore
RUN cp .env.example .env

ADD Docker/startup.sh /
RUN chmod +x /startup.sh

ENV DB_HOST=""
ENV DB_DATABASE=""
ENV DB_USERNAME=""
ENV DB_PASSWORD=""

ENTRYPOINT ["/startup.sh"]