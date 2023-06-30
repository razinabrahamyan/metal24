#!/bin/bash

DATE=`date +%Y-%m-%d`

mysqldump -u ct51360_lmkmsk --password=3uadP3UY  ct51360_lmkmsk  > backup/db_backup_$DATE.sql

find backup -type f -name '*.sql' -mtime +30 -exec rm {} \;