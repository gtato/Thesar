#!/usr/bin/python
# -*- coding: utf-8 -*-

import requests
from bs4 import BeautifulSoup


def pop(str):

    abc = 'a,b,c,ç,d,dh,e,ë,f,g,gj,h,i,j,k,l,ll,m,n,nj,o,p,q,r,rr,s,sh,t,th,u,v,x,xh,y,z,zh'
    #      0,1,2,3,4,5 ,6,7,8,9,1 ,1,1,1,1,1,1 ,1,1,1 ,2,2,2,2,2 ,2,2 ,2,2 ,2,3,3,3 ,3,3,3
    #                           0 ,1,2,3,4,5,6 ,7,8,9 ,0,1,2,3,4 ,5,6 ,7,8 ,9,0,1,2 ,3,4,5
    vowelPos = [0,6,7,12,20,29,33]
    arrabc = abc.split(',')
    # arrabc[3] = u'ç'.encode('utf-8','ignore')
    # arrabc[7] = u'ë'.encode('utf8')
    matabc = [[0 for x in range(len(arrabc))] for y in range(len(arrabc))]
    for x in range(len(arrabc)):
        for y in range(len(arrabc)):
            if x!=y and y in vowelPos:
                matabc[x][y] = 1

    # me a
    matabc[0] = [1 if x != 0 else 0 for x in range(len(arrabc))]
    # me b
    matabc[1][2]=matabc[1][4]=matabc[1][13]=matabc[1][15]=matabc[1][16]=matabc[1][23]=matabc[1][24]=matabc[1][34] = 1
    # me c
    matabc[2][13]=matabc[2][14]=matabc[2][23]=matabc[2][14]=1
    # me cc
    matabc[3] = [1 if x != 3 else 0 for x in range(len(arrabc))]
    # me d
    matabc[4][13]=matabc[4][15]=matabc[4][23]=1
    # me dh
    matabc[5][13]



    print matabc
    


pop('')

# url = 'http://www.fjalori.shkenca.org/text.php'
# payload = {'eingabe': 'a'}
# last = last_last = ''
#
# results={}
# while True:
#     sw = "%s" % raw_input("next search: ")
#     if sw == 'break':
#         break
#     payload['eingabe'] = sw
#     r = requests.post(url, data=payload)
#     soup = BeautifulSoup(r.content, 'html.parser')
#     entries = soup.find_all('dt')
#     descs = soup.find_all('dd')
#     for last in entries:pass
#     if last == last_last:
#         print 'last search "%s" was useless move on' % payload['eingabe']
#     else:
#         for i in range(len(entries)):
#             id = "%s:%s" % (entries[i].b.text, entries[i].i.text)
#             results[id] = "%s%s" % (entries[i],descs[i])
#             results[id] = results[id].replace('\n', '').replace('\r', '')
#             print id
#             #print "%s-%s" % (entries[i], descs[i])
#     last_last = last
#
# out = open('out', 'a')
# for k, v in results.items():
#     out.write(v+'\n')