#!/bin/python
# -*- coding: utf-8 -*-
import MySQLdb

# Database Connection Info
db_host = "localhost"
db_user = "root"
db_pass = "root"
db_database = "lcmdashboard"

conn = MySQLdb.connect (host=db_host, user=db_user, passwd=db_pass, db=db_database)

# get the cursor
cursor = conn.cursor()

conn.set_character_set('utf8')
cursor.execute('SET NAMES utf8;')
cursor.execute('SET CHARACTER SET utf8;')
cursor.execute('SET character_set_connection=utf8;')

query = 'select langname_eng, langname_autonym from lcmdashboard'

res = cursor.execute(query)
print res
cursor.close()
conn.commit()
conn.close()