import re
import json
import urllib.request

urls = open('school_url.txt', 'r', encoding='utf-8')
json_file = open('courses.json', 'w', encoding='utf-8')
escuelas = { }
# all_courses = set()

for line in urls:
    temp = line.strip().split(' => ')
    id = temp[0]
    name = temp[1]

    if len(temp) == 3:
        with urllib.request.urlopen(temp[2]) as html:
            content = html.read()
            content = content.decode('utf-8')
            content = str(content)

        x = re.findall(r'</tr><tr><td>(.*?)</td>(\s*)<td>(.*?)</td>(\s*)<td>(.*?)</td>(\s*)<td>(.*?)</td>', content)
        x = [[t[2],t[4],t[6].replace('&nbsp', '')] for t in x if len(t[2]) > 3]

        courses = set()
        for t in x:
            courses.add(t[1])
        escuelas[name] = {  "id": id, "courses": list(courses) }

        # all_courses = all_courses.union(courses)




course_seeder = open('course_table.txt', 'w', encoding='utf-8')
course_school_seeder = open('course_school_table.txt', 'w', encoding='utf-8')


k = 1
# all_courses = set()
all_courses = []
for escuela in escuelas:
    for course in escuelas[escuela]['courses']:
        if course not in all_courses:
            # all_courses.add(course)
            all_courses.append(course)
            # print("CS ", k, course)
            course_seeder.write("\t\t\t[ 'id' => " + str(k) +  ", 'name' => '" + course  + "' ],\n")
            # print("CSS", k, escuelas[escuela]['id'])
            course_school_seeder.write("\t\t\t[ 'course_id' => " + str(k) + ", 'school_id' => " + str(escuelas[escuela]['id']) + " ],\n")
            k += 1
        else:
            # print("CS ", k, course)
            # course_seeder.write("\t\t\t[ 'id' => " + str(all_courses.index(course) + 1) +  ", 'name' => '" + course  + "' ],\n")
            # print("CSS", k, escuelas[escuela]['id'])
            course_school_seeder.write("\t\t\t[ 'course_id' => " + str(all_courses.index(course) + 1) + ", 'school_id' => " + str(escuelas[escuela]['id']) + " ],\n")

json.dump(escuelas, json_file, indent=4, ensure_ascii=False)

# close files
urls.close()
json_file.close()
course_seeder.close()
course_school_seeder.close()
