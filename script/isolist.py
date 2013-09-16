# -*- coding: utf-8 -*-
import requests,json

s = requests.get('http://www.loc.gov/standards/iso639-2/php/code_list.php')

data = s.text

s = '<td scope="row">'
datadict = {}
datalist = []

while data.find(s) != -1:
	iso = data[data.find(s) + len(s) : data.find(s) + len(s) + 3]
	td = '<td>'
	temp = data[data.find(s) + len(s) : data.find(s) + len(s) + 100]
	temp = temp[temp.find(td) + len(td):]
	temp = temp[temp.find(td) + len(td):]
	engname = temp[:temp.find('</td>')]
	data = data[data.find(s)+ len(s) :]
	datadict[iso] = engname
	datalist.append(iso)

<<<<<<< HEAD
data = json.dumps(datalist,ensure_ascii = False, indent = 4, separators = (',', ': '))

json = json.dumps(datadict,ensure_ascii = False, indent = 4, separators = (',', ': '))
=======
data = json.dumps(datalist,ensure_ascii=False, indent=4, separators=(',', ': '))
>>>>>>> 406a5a51e3fba01bcf6855e4b4f5d2cfc5cb7b18

f = open('../data/isolist.json','w')
f.write(json)

f1 = open('../data/isodropdown.json','w')
f1.write(data)