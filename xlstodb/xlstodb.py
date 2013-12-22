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
print sheet.cell(135,0).value
print sheet.cell(136,0).value

for row_index in range(2,sheet.nrows): #sheet.nrows
    # we could assign the values directly in the values format string but this is easier to read
    
    #cprint row_index 
    #print sheet.cell(row_index,0).value

    langcodeiso   = sheet.cell(row_index,0).value
    langcodewmf   = sheet.cell(row_index,1).value
    langname      = sheet.cell(row_index,3).value
    langname_a    = sheet.cell(row_index,4).value
    langcodehtml  = sheet.cell(row_index,6).value
    macro_lang    = sheet.cell(row_index,2).value
    wmf_pro_status = sheet.cell(row_index,5).value
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



    #for checking check mark or null value
    langcodehtml = langcodehtml == '' and '-' or langcodehtml
    fallback_code = fallback_code == '' and '-' or fallback_code
    langcodewmf = langcodewmf == '' and '-' or langcodewmf
    langname = langname == '' and '-' or langname
    langname_a = langname_a == '' and '-' or langname_a
    macro_lang = macro_lang == test and '1' or '0'
    wmf_pro_status = wmf_pro_status == 1 and '1' or '0'
    narayam = narayam == test and '1' or '0'
    jquery_ime = jquery_ime == test and '1' or '0'
    webfonts = webfonts == test and '1' or '0'
    jquery_webfonts = jquery_webfonts == test and '1' or '0'
    i18n_mw_core = i18n_mw_core == test and '1' or '0'
    jquery_i18n = jquery_i18n == test and '1' or '0'
    jquery_uls = jquery_uls == test and '1' or '0'
    translate1 = translate1 == test and '1' or '0'
    dictionary = dictionary == test and '1' or '0'
    spellchecker = spellchecker == test and '1' or '0'
    glossary = glossary == test and '1' or '0'

    #print jquery_uls
    froi = '1'
    values = ( langcodeiso, langcodewmf, langname, langname_a, langcodehtml, macro_lang, wmf_pro_status, fallback_code, narayam, jquery_ime, webfonts, jquery_webfonts, i18n_mw_core, jquery_i18n, jquery_uls, translate1, dictionary, spellchecker, glossary ,froi)
    
    
    if row_index == 216 or row_index == 154 or row_index == 302 or row_index == 675 or row_index == 693:
        print sheet.cell(row_index,0).value 
        continue
    
    print values
    
    res = cursor.execute(query, values)
    print "Executed ", row_index
 
# close cursor
cursor.close()
 
# We are using an InnoDB tables so we need to commit the transaction
conn.commit()
 
#close connection
conn.close()