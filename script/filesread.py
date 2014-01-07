#!/usr/bin/python
import sys, getopt, os, json
langfontdict = {}
def main(argv):
	path = ''
	fname = ''
	try:
		opts, args = getopt.getopt(argv,"hp:f:",["pathn=","filen="])
	except getopt.GetoptError:
		print 'filesread.py -p <path of file> -f <filename to read>'
		sys.exit(2)

	for opt, arg in opts:
		if opt == '-h':
			print 'filesread.py -p <path of file> -f <filename to read>'
			sys.exit()
		elif opt in ('-p','--pathn'):
			path = arg
		elif opt in ('-f','--filen'):
			fname = arg

	if path == '':
		path = sys.path[0]
	#print path, fname
	s = raw_input('If you want to search this file into subdirectory(yes/no) : ')
	if s == 'yes':
		subdir(path,fname)
	else:
		fileread(path,fname)

	#print langfontdict
	jsondata = dicttojson(langfontdict)
	print jsondata
	fopen = open('langtofontmap.json','w')
	fopen.write(jsondata)

def subdir(path,fname):
	dir_str = os.popen('ls ' + path).read()
	dir_list = dir_str.split('\n') 
	#print dir_list
	for item in dir_list:
		fileread(path+ '/' + item ,fname)

def fileread(path,fname):
	try:
		f = open(path+ '/'+ fname, 'r')
		content = f.read()
		#print content
		extracter(content)
	except Exception, e:
		print e
	
def extracter(content):
	fontname = content[1:content.find(']')]
	if content.find('languages') != -1:
		language = content[content.find('languages') + len('languages=') : content.find('\nversion')]
		dictmake(language,fontname)

def dictmake(language,fontname):
	language = language.replace('*','').replace(' ','')
	langlist = language.split(',')
	#print langlist
	for lang in langlist:
		if langfontdict.has_key(lang):
			val = langfontdict[lang]
			val.append(fontname)
			langfontdict[lang] = val
		else:
			langfontdict[lang] = [fontname]

def dicttojson(dicts):
	return json.dumps(dicts,ensure_ascii=False, indent=4, separators=(',', ': '))

if __name__ == "__main__":
   main(sys.argv[1:])
