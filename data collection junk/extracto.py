import re

inp = open('test', 'r')
outp = open('output', 'w')
for line in inp:
    ar = line.split('title', 20)
    if len(ar) > 1:
        outp.write(ar[1])