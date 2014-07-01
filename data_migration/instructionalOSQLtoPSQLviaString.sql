SELECT
        ''
        ||'INSERT INTO location (id, address, city, zip, state_id) '
        ||'SELECT nextval(''location_id_seq''), '''
        ||mesd_hssschool.address||','''
        ||mesd_hssschool.city||','''
        ||mesd_hssschool.postal||','''
        ||'(SELECT id FROM flavor_state WHERE short_name='''
        ||mesd_hssschool.state||''') '
        ||'WHERE NOT EXISTS (SELECT id FROM location WHERE '
        ||'address = '''
        ||mesd_hssschool.address
        ||''' AND '
        ||'city ='''
        ||mesd_hssschool.city
        ||''' AND '
        ||'zip = '''
        ||mesd_hssschool.postal
        ||''';'
        ''
        ||'INSERT INTO phone (id, number, phonetype_id) '
        ||'SELECT nextval(''phone_id_seq''), '''
        ||mesd_hssschool.phone||','''
        ||'(SELECT id FROM flavor_phone WHERE type='''Site''') '
        ||'WHERE NOT EXISTS (SELECT id FROM location WHERE '
        ||'number = '''
        ||mesd_hssschool.phone
        ||''';'

FROM    mesd_hrschool join mesd_hssschool on mesd_hrschool.schid=mesd_hssschool.schid;



INSERT INTO location (id, address, city, zip, state_id) SELECT nextval('location_id_seq'), '22565 NE  Halsey St,'Fairview,'97024,'(SELECT id FROM flavor_state WHERE short_name='OR') WHERE NOT EXISTS (
SELECT id FROM location WHERE address = '22565 NE  Halsey St' AND city ='Fairview' AND zip = '97024';




INSERT INTO location (id, address, city, zip, state_id)
VALUES (nextval('location_id_seq'),''+ar[4]+'',''+ar[5]+'',''+ar[7]+'',(SELECT id FROM flavor_state WHERE short_name='OR'));

INSERT INTO phone (id, number, phonetype_id)
VALUES (nextval('phone_id_seq'),''+ar[2]+'',(SELECT id FROM flavor_phone WHERE type='Site'));

INSERT INTO email (id, address)
VALUES (nextval('email_id_seq'),''+ar[3]+'');

INSERT INTO site (id, name, grade_range, alternative_education, bbp_registration, special_education)
VALUES (nextval('site_id_seq'),''+ar[0]+'', ''+ar[1]+'',''+ar[9]+'',''+ar[10]+'',''+ar[11]+'');

UPDATE location SET site_id=(SELECT id FROM site WHERE id=currval('site_id_seq')) WHERE id=currval('location_id_seq');

UPDATE phone SET site_id=(SELECT id FROM site WHERE id=currval('site_id_seq')) WHERE id=currval('phone_id_seq');

UPDATE email SET site_id=(SELECT id FROM site WHERE id=currval('site_id_seq')) WHERE id=currval('email_id_seq');

INSERT INTO districts_sites (district_id, site_id) VALUES ((SELECT id FROM district WHERE name=''+ar[8]+''),currval('site_id_seq'));