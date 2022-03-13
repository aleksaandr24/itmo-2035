<?php
    echo <<<END
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>\n
    END;

    class Student {

        private $name;
        private $age;
        private $group;

        public function setName($student_name) {
            $this->name = $student_name;
        }

        public function getName() {
            return $this->name;
        }

        public function setAge($student_age) {
            $this->age = $student_age;
        }

        public function getAge() {
            return $this->age;
        }

        public function setGroup($student_group) {
            $this->group = $student_group;
        }

        public function getGroup() {
            return $this->group;
        }
    }

    $student_1 = new Student;
    $student_1->setName('Иван');
    $student_1->setAge(21);
    $student_1->setGroup('U1001');

    $student_2 = new Student;
    $student_2->setName('Вася');
    $student_2->setAge(20);
    $student_2->setGroup('U1002');

    $students_age = $student_1->getAge() + $student_2->getAge();

    echo "<p>Группа Ивана: <b>".$student_1->getGroup()."</b></p>\n";
    echo "<p>Группа Васи: <b>".$student_2->getGroup()."</b></p>\n";
    echo "<p>Сумма возрастов Ивана и Васи: <b>".$students_age."</b></p>";

    echo <<<END
    \n</body>
    </html>
    END;
?>