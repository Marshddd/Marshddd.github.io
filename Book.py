name = ['maja' , 'koka' , 'efah']
search = 'maja'
for n in name:
    if search == n:
        print(search+ ' is found in list')
    break
else:
    print('not found')

search = 'koka'
for n in name:
    if search == n:
        print(search+ ' is found in list')
        break

else:
    print('not found!?!?')