#!/bin/bash

set -e

sed -ie "s/`id -u mysql`/`stat -c %u /var/lib/mysql`/g" /etc/passwd

chown -R mysql:mysql /var/lib/mysql
chown -R mysql:mysql /var/run/mysqld

./entrypoint.sh $@
