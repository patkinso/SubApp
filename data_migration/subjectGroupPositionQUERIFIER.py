inp = open('subjectGroupPosition.csv', 'r')
outp = open('subjectGroupPosition.sql', 'w')
group=''
position=''
for line in inp:
    ar=line.split(';')
    ar[len(ar)-1]=ar[len(ar)-1].strip()
    #  0       1   2   3    4   5    6    7       8         9      10
    #subject pk-3 k-6 4-6 6-8 9-12 blood special interview nurse classified

    if int(ar[1])==1 or int(ar[2])==1 or int(ar[3])==1:
        if int(ar[4])==1 or int(ar[5])==1:
            print('Special case at '+ar[0])
        group='Elementary K-6'
        position='Teacher (certified licensed)'
    elif int(ar[4])==1:
        group='Middle School 6-8'
        position='Teacher (certified licensed)'
    elif int(ar[5])==1:
        group='High School 9-12'
        position='Teacher (certified licensed)'
    elif int(ar[9])==1:
        group='Nurse'
        position='Nurse / Licensed Practical Nurse'
    elif int(ar[10])==1:
        group='Classified'
        position='Classified (nonlicensed)'
    else:
        print('No group found at '+ar[0])
        group='Special Education Programs'
        position='Teacher (certified licensed)'

    outp.write('INSERT INTO subject (id, group_id, alternative_education, bbp_registration, special_education, interview_required, name) VALUES (nextval(\'subject_id_seq\'),(SELECT id FROM flavor_subject_group WHERE name=\''+group+'\'),\'0\',\''+ar[6]+'\',\''+ar[7]+'\',\''+ar[8]+'\',\''+ar[0]+'\'); INSERT INTO subjects_positions (subject_id, position_id) VALUES (currval(\'subject_id_seq\'),(SELECT id FROM position WHERE name=\''+position+'\'));\n')