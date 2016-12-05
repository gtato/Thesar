#!/usr/bin/python
# coding=iso-8859-1

import requests
from bs4 import BeautifulSoup


url = 'http://www.fjalori.shkenca.org/text.php'
payload = {'eingabe': 'a'}
last = last_last = ''

results={}
while True:
    sw = "%s" % raw_input("next search: ")
    if sw == 'break':
        break
    payload['eingabe'] = sw
    r = requests.post(url, data=payload)
    soup = BeautifulSoup(r.content, 'html.parser')
    entries = soup.find_all('dt')
    descs = soup.find_all('dd')
    for last in entries:pass
    if last == last_last:
        print 'last search "%s" was useless move on' % payload['eingabe']
    else:
        for i in range(len(entries)):
            id = "%s:%s" % (entries[i].b.text, entries[i].i.text)
            results[id] = "%s%s" % (entries[i],descs[i])
            results[id] = results[id].replace('\n', '').replace('\r', '')
            print id
            #print "%s-%s" % (entries[i], descs[i])
    last_last = last

out = open('out', 'a')
for k, v in results.items():
    out.write(v+'\n')