inp = open('siteLocationPhoneEmailDistrict.csv', 'r')
outp = open('siteLocationPhoneEmailDistrict.sql', 'w')
arout=[]
for line in inp:
    #0     1      2      3       4         5    6      7    8      9    10      11
    #name, range, phone, email, address, city, state, zip, dist,  alt, blood, special
    ar=line.split(';')
    ar[11]=ar[11].strip()
    arout.append(ar[8])
    if ar[8]=='Centennial SD 28J': ar[8]='Centennial'
    elif ar[8]=='Corbett Charter School': ar[8]='Corbett'
    elif ar[8]=='Corbett School District 39': ar[8]='Corbett'
    elif ar[8]=='David Douglas School District 40': ar[8]='David Douglas'
    elif ar[8]=='Gresham-Barlow SD 10J': ar[8]='Gresham-Barlow'
    elif ar[8]=='Parkrose School District 3': ar[8]='Parkrose'
    elif ar[8]=='Riverdale School District 51J': ar[8]='Riverdale'
    elif ar[8]=='Reynolds School District 7': ar[8]='Reynolds'
    else: print('Hit a bad district with '+ar[8])
    if len(ar[3])<=0:
        outp.write('INSERT INTO location (id, address, city, zip, state_id)VALUES (nextval(\'location_id_seq\'),\''+ar[4]+'\',\''+ar[5]+'\',\''+ar[7]+'\',(SELECT id FROM flavor_state WHERE short_name=\'OR\')); INSERT INTO phone (id, number, phonetype_id) VALUES (nextval(\'phone_id_seq\'),\''+ar[2]+'\',(SELECT id FROM flavor_phone WHERE type=\'Site\'));INSERT INTO site (id, name, grade_range, alternative_education, bbp_registration, special_education) VALUES (nextval(\'site_id_seq\'),\''+ar[0]+'\', \''+ar[1]+'\',\''+ar[9]+'\',\''+ar[10]+'\',\''+ar[11]+'\'); UPDATE location SET site_id=(SELECT id FROM site WHERE id=currval(\'site_id_seq\')) WHERE id=currval(\'location_id_seq\'); UPDATE phone SET site_id=(SELECT id FROM site WHERE id=currval(\'site_id_seq\')) WHERE id=currval(\'phone_id_seq\'); INSERT INTO districts_sites (district_id, site_id) VALUES ((SELECT id FROM district WHERE name=\''+ar[8]+'\'),currval(\'site_id_seq\'));\n')
        # print('is None hit with ['+ar[3]+']')
    else:
        outp.write('INSERT INTO location (id, address, city, zip, state_id)VALUES (nextval(\'location_id_seq\'),\''+ar[4]+'\',\''+ar[5]+'\',\''+ar[7]+'\',(SELECT id FROM flavor_state WHERE short_name=\'OR\')); INSERT INTO phone (id, number, phonetype_id) VALUES (nextval(\'phone_id_seq\'),\''+ar[2]+'\',(SELECT id FROM flavor_phone WHERE type=\'Site\'));INSERT INTO email (id, address) VALUES (nextval(\'email_id_seq\'),\''+ar[3]+'\'); INSERT INTO site (id, name, grade_range, alternative_education, bbp_registration, special_education) VALUES (nextval(\'site_id_seq\'),\''+ar[0]+'\', \''+ar[1]+'\',\''+ar[9]+'\',\''+ar[10]+'\',\''+ar[11]+'\'); UPDATE location SET site_id=(SELECT id FROM site WHERE id=currval(\'site_id_seq\')) WHERE id=currval(\'location_id_seq\'); UPDATE phone SET site_id=(SELECT id FROM site WHERE id=currval(\'site_id_seq\')) WHERE id=currval(\'phone_id_seq\'); UPDATE email SET site_id=(SELECT id FROM site WHERE id=currval(\'site_id_seq\')) WHERE id=currval(\'email_id_seq\'); INSERT INTO districts_sites (district_id, site_id) VALUES ((SELECT id FROM district WHERE name=\''+ar[8]+'\'),currval(\'site_id_seq\'));\n')
        # print('is None skipped with ['+ar[3]+']')
# arout.sort()
# for i in arout:
#     print(i)