#!/bin/bash
set -e

touch /var/www/project_env.sh /var/www/cron.log
touch /var/log/cron.log
rsyslogd
cron

: ${XDEBUG:=0}
: ${ROOT:=0}

printenv | sed 's/^\(.*\)$/export \1/g' | grep -E "^export SYMFONY" > /var/www/project_env.sh
chown www-data:www-data /var/www/project_env.sh /var/www/cron.log

if [ "$XDEBUG" = "0" ]; then
    rm -f /usr/local/etc/php/conf.d/xdebug.ini
fi

# Change www-data's uid & guid to be the same as directory in host
sed -ie "s/`id -u www-data`:`id -g www-data`/`stat -c %u /var/www/html`:`stat -c %g /var/www/html`/g" /etc/passwd

if [ "$1" = '/usr/local/sbin/php-fpm' ]; then
    exec "$@"
fi

if [ "$ROOT" = "0" ]; then
    su www-data -s /bin/sh -c "$*"
else
    su root -s /bin/sh -c "$*"
fi
