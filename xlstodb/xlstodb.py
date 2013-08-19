#!/bin/python
# -*- coding: utf-8 -*-

from xlrd import open_workbook ,cellname
import MySQLdb
 
# Database Connection Info
db_host = "localhost"
db_user = "root"
db_pass = "root"
db_database = "lcmdashboard"
 
# Assign path to Excel file
file_to_import = 'lcmdashboard.xlsx'

# Assign column count
# This can be detected but to get a subset
# of the existing column cells I assign it manually
column_count=19
 
# open the entire workbook
# you can work with multiple page workbooks
book = open_workbook(file_to_import)
 
# we are only using the first sheet
sheet = book.sheet_by_index(0)
 
# Print Sheet name and number of rows
print "Workbook sheet name:%s" % sheet.name
print "Number of rows in sheet: %s" % sheet.nrows
 
# get a connection handle to MySQL
conn = MySQLdb.connect (host=db_host, user=db_user, passwd=db_pass, db=db_database)
 
# get the cursor
cursor = conn.cursor()

conn.set_character_set('utf8')
cursor.execute('SET NAMES utf8;')
cursor.execute('SET CHARACTER SET utf8;')
cursor.execute('SET character_set_connection=utf8;')
 
# since we are using placeholders, we really only need to assign the query string sans values once, outside the loop
query = """INSERT INTO langdetail ( langcode_iso, langcode_wmf, langname_eng, langname_autonym, langname_html, macro_lang, wmf_proj_status, fallback_code, narayam, jquery_ime, webfonts, jquery_webfonts, i18n_mw_core, jquery_i18n, jquery_uls, translate, dictionary, spellchecker, glossary ,f_or_i) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s,%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)"""
 
test = u"\u2714"
# iterate through ieach row
for row_index in range(135,sheet.nrows): #sheet.nrows
 
    # we could assign the values directly in the values format string but this is easier to read
    langcodeiso   = sheet.cell(row_index,0).value
    langcodewmf   = sheet.cell(row_index,1).value
    langname      = sheet.cell(row_index,3).value
    langname_a    = sheet.cell(row_index,4).value
    #langname_a = 'testinf'
    langcodehtml  = sheet.cell(row_index,5).value
    macro_lang    = sheet.cell(row_index,2).value
    wmf_pro_status = sheet.cell(row_index,6).value
    fallback_code = sheet.cell(row_index,7).value
    narayam       = sheet.cell(row_index,8).value
    jquery_ime    = sheet.cell(row_index,9).value
    webfonts      = sheet.cell(row_index,10).value
    jquery_webfonts = sheet.cell(row_index,11).value
    i18n_mw_core  = sheet.cell(row_index,12).value
    jquery_i18n   = sheet.cell(row_index,14).value
    jquery_uls    = sheet.cell(row_index,13).value
    translate1    = sheet.cell(row_index,15).value
    dictionary    = sheet.cell(row_index,16).value
    spellchecker  = sheet.cell(row_index,17).value
    glossary      = sheet.cell(row_index,18).value
    # the row contents are different every time so we put this in the loop

    #for checking check mark
    if macro_lang == test:
        macro_lang = '1'
    else:
        macro_lang = '0'

    if narayam.decode == test:
        narayam = '1'
    else:
        narayam = '0'

    if jquery_uls == test:
        jquery_uls = '1'
    else:
        jquery_uls = '0'

    if jquery_ime == test:
        jquery_ime = '1'
    else:
        jquery_ime = '0'

    if jquery_webfonts == test:
        jquery_webfonts = '1'
    else:
        jquery_webfonts = '0'

    if jquery_i18n == test:
        jquery_i18n = '1'
    else:
        jquery_i18n = '0'

    if translate1 == test:
        translate1 = '1'
    else:
        translate1 = '0'

    if dictionary == test:
        dictionary = '1'
    else:
        dictionary = '0'

    if spellchecker == test:
        spellchecker = '1'
    else:
        spellchecker = '0'

    if glossary == test:
        jquery_uls = '1'
    else:
        jquery_uls = '0'

    if i18n_mw_core == test:
        i18n_mw_core = '1'
    else:
        i18n_mw_core = '0'

    if wmf_pro_status == test:
        wmf_pro_status = '1'
    else:
        wmf_pro_status = '0'

    if webfonts == test:
        webfonts = '1'
    else:
        webfonts = '0'

    #print jquery_uls
    froi = 'f'
    values = ( langcodeiso, langcodewmf, langname, langname_a, langcodehtml, macro_lang, wmf_pro_status, fallback_code, narayam, jquery_ime, webfonts, jquery_webfonts, i18n_mw_core, jquery_i18n, jquery_uls, translate1, dictionary, spellchecker, glossary ,froi)
    
    
    print values
    res = cursor.execute(query, values)
    print "Executed ", row_index
 
# close cursor
cursor.close()
 
# We are using an InnoDB tables so we need to commit the transaction
conn.commit()
 
#close connection
conn.close()