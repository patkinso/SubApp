inp = open('mesdSiteLocationPhoneEmailDistrict.csv', 'r')
outp = open('mesdSiteLocationPhoneEmailDistrict.sql', 'w')
arout=[]
for line in inp:
    #0      1       2        3            4      5       6       7      8     9     10    11        12     13
    #crap, name, program, alternative, blood, special, address, city, state, zip, phone, email, district, graderange
    ar=line.split(';')
    ar[13]=ar[13].strip()
    if ar[12]=='Centennial SD 28J': ar[12]='Centennial'
    elif ar[12]=='Corbett Charter School': ar[12]='Corbett'
    elif ar[12]=='Corbett School District 39': ar[12]='Corbett'
    elif ar[12]=='David Douglas School District 40': ar[12]='David Douglas'
    elif ar[12]=='Gresham-Barlow SD 10J': ar[12]='Gresham-Barlow'
    elif ar[12]=='Parkrose School District 3': ar[12]='Parkrose'
    elif ar[12]=='Riverdale School District 51J': ar[12]='Riverdale'
    elif ar[12]=='Reynolds School District 7': ar[12]='Reynolds'
    elif ar[12]=='Portland School District 1J': ar[12]='Portland'
    elif ar[12]=='Multnomah Education Service District': ar[12]='Multnomah Education Service District'
    else: print('Hit a bad district with '+ar[12])

    if ar[2]=='Alternative Education Schools 6-12': ar[2]='Alternative Education Ages 6-12'

    if len(ar[11])<=0:
        outp.write('INSERT INTO location (id, address, city, zip, state_id) SELECT nextval(\'location_id_seq\'),\''+ar[6]+'\',\''+ar[7]+'\',\''+ar[9]+'\',(SELECT id FROM flavor_state WHERE short_name=\'OR\') WHERE NOT EXISTS (SELECT id FROM location WHERE address=\''+ar[6]+'\'); INSERT INTO phone (id, number, phonetype_id) SELECT nextval(\'phone_id_seq\'),\''+ar[10]+'\',(SELECT id FROM flavor_phone WHERE type=\'Site\') WHERE NOT EXISTS (SELECT id FROM location WHERE address=\''+ar[6]+'\'); INSERT INTO site (id, name, grade_range, alternative_education, bbp_registration, special_education) SELECT nextval(\'site_id_seq\'),\''+ar[1]+'\',\''+ar[13]+'\',\''+ar[3]+'\',\''+ar[4]+'\',\''+ar[5]+'\' WHERE NOT EXISTS (SELECT id FROM location WHERE address=\''+ar[6]+'\'); UPDATE location SET site_id=(SELECT id FROM site WHERE id=currval(\'site_id_seq\')) WHERE id=currval(\'location_id_seq\'); UPDATE phone SET site_id=(SELECT id FROM site WHERE id=currval(\'site_id_seq\')) WHERE id=currval(\'phone_id_seq\'); INSERT INTO districts_sites (district_id, site_id) SELECT (SELECT id FROM district WHERE name=\''+ar[12]+'\'),currval(\'site_id_seq\') WHERE NOT EXISTS (SELECT id FROM location WHERE address=\''+ar[6]+'\'); INSERT INTO site_subject (site_id, subject_id) VALUES ((SELECT id FROM site JOIN location ON site.id=location.site_id WHERE address=\''+ar[6]+'\'),(SELECT id FROM subject WHERE name=\''+ar[2]+'\'));\n')

    else:
        outp.write('INSERT INTO location (id, address, city, zip, state_id) SELECT nextval(\'location_id_seq\'),\''+ar[6]+'\',\''+ar[7]+'\',\''+ar[9]+'\',(SELECT id FROM flavor_state WHERE short_name=\'OR\') WHERE NOT EXISTS (SELECT id FROM location WHERE address=\''+ar[6]+'\'); INSERT INTO phone (id, number, phonetype_id) SELECT nextval(\'phone_id_seq\'),\''+ar[10]+'\',(SELECT id FROM flavor_phone WHERE type=\'Site\') WHERE NOT EXISTS (SELECT id FROM location WHERE address=\''+ar[6]+'\'); INSERT INTO email (id, address) SELECT nextval(\'email_id_seq\'),\''+ar[11]+'\' WHERE NOT EXISTS (SELECT id FROM location WHERE address=\''+ar[6]+'\'); INSERT INTO site (id, name, grade_range, alternative_education, bbp_registration, special_education) SELECT nextval(\'site_id_seq\'),\''+ar[1]+'\',\''+ar[13]+'\',\''+ar[3]+'\',\''+ar[4]+'\',\''+ar[5]+'\' WHERE NOT EXISTS (SELECT id FROM location WHERE address=\''+ar[6]+'\'); UPDATE location SET site_id=(SELECT id FROM site WHERE id=currval(\'site_id_seq\')) WHERE id=currval(\'location_id_seq\'); UPDATE phone SET site_id=(SELECT id FROM site WHERE id=currval(\'site_id_seq\')) WHERE id=currval(\'phone_id_seq\'); UPDATE email SET site_id=(SELECT id FROM site WHERE id=currval(\'site_id_seq\')) WHERE id=currval(\'email_id_seq\'); INSERT INTO districts_sites (district_id, site_id) SELECT (SELECT id FROM district WHERE name=\''+ar[12]+'\'),currval(\'site_id_seq\') WHERE NOT EXISTS (SELECT id FROM location WHERE address=\''+ar[6]+'\'); INSERT INTO site_subject (site_id, subject_id) VALUES ((SELECT id FROM site JOIN location ON site.id=location.site_id WHERE address=\''+ar[6]+'\'),(SELECT id FROM subject WHERE name=\''+ar[2]+'\'));\n')




# INSERT INTO location (id, address, city, zip, state_id)
# SELECT nextval('location_id_seq'),'+ar[6]+','+ar[7]+','+ar[9]+',(SELECT id FROM flavor_state WHERE short_name='OR') WHERE NOT EXISTS (SELECT id FROM location WHERE address='+ar[6]+');

# INSERT INTO phone (id, number, phonetype_id)
# VALUES (nextval('phone_id_seq'),'+ar[10]+',(SELECT id FROM flavor_phone WHERE type='Site')) WHERE NOT EXISTS (SELECT id FROM location WHERE address='+ar[6]+');

# INSERT INTO email (id, address)
# VALUES (nextval('email_id_seq'),'+ar[11]+') WHERE NOT EXISTS (SELECT id FROM location WHERE address='+ar[6]+');
# INSERT INTO site (id, name, grade_range, alternative_education, bbp_registration, special_education)
# VALUES (nextval('site_id_seq'),'+ar[1]+','+ar[13]+','+ar[3]+','+ar[4]+','+ar[5]+') WHERE NOT EXISTS (SELECT id FROM location WHERE address='+ar[6]+');
# UPDATE location SET site_id=(SELECT id FROM site WHERE id=currval('site_id_seq')) WHERE id=curval('location_id_seq');
# UPDATE phone SET site_id=(SELECT id FROM site WHERE id=currval('site_id_seq')) WHERE id=currval('phone_id_seq');
# UPDATE email SET site_id=(SELECT id FROM site WHERE id=currval('site_id_seq')) WHERE id=currval('email_id_seq');
# INSERT INTO districts_sites (district_id, site_id)
# VALUES ((SELECT id FROM district WHERE name='+ar[12]+'),currval('site_id_seq')) WHERE NOT EXISTS (SELECT id FROM location WHERE address='+ar[6]+');
# INSERT INTO site_subject (site_id, subject_id)
# VALUES ((SELECT id FROM site JOIN location ON site.id=location.site_id WHERE address='+ar[6]+'),(SELECT id FROM subject WHERE name='+ar[2]+'));