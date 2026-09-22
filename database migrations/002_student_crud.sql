-- student sql#1 : select 1 student;
SELECT * FROM students

-- student sql#2 : select students in asc order;
SELECT * FROM students
ORDER BY student_id ASC;

-- student sql#3 : select students in desc order;
SELECT * FROM students
ORDER BY student_id DESC;

-- student sql#4 select students order by last name;
SELECT * FROM students
ORDER BY student_last_name ASC;

-- student sql#5 : select students in desc order by last name;
SELECT * FROM students
ORDER BY student_last_name DESC;

-- student sql#6 : select students in asc order by first name;
SELECT * FROM students
ORDER BY student_first_name ASC;

-- student sql#7 : select students in desc order by last name;
SELECT * FROM students
ORDER BY student_first_name DESC;

-- you can modify displayed columns by selecting specific column after SELECT command 

SELECT student_first_name,
student_last_name
FROM students
ORDER BY student_first_name ASC;

-- student sql #9  LIMIT 1
SELECT student_first_name
student_last_name
FROM students
ORDER BY student_first_name ASC;
LIMIT 1;

--student sql #10 - select student based on id
SELECT student_first_name,
student_last_name
FROM students
WHERE student_id = 1
LIMIT 1;


-- student sql#10 - update student name based on id
UPDATE students
SET student_first_name= 'KRISTIA'
     student_last_name= 'PANLIPUNAN'
WHERE student_id = 1;

