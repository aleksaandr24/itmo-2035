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

    class User {

        protected $name;
        protected $age;

        public function setName($user_name) {
            $this->name = $user_name;
        }

        public function getName() {
            return $this->name;
        }

        public function setAge($user_age) {
            $this->age = $user_age;
        }

        public function getAge() {
            return $this->age;
        }
    }

    class Worker extends User {

        private $salary;

        public function setSalary($worker_salary) {
            $this->salary = $worker_salary;
        }

        public function getSalary() {
            return $this->salary;
        }
    }

    $worker_1 = new Worker;
    $worker_1->setName('Иван');
    $worker_1->setAge(25);
    $worker_1->setSalary(1000);

    $worker_2 = new Worker;
    $worker_2->setName('Вася');
    $worker_2->setAge(26);
    $worker_2->setSalary(2000);

    $workers_salary = $worker_1->getSalary() + $worker_2->getSalary();

    echo "Сумма зарплат Ивана и Васи: <b>".$workers_salary."</b>";

    echo <<<END
    \n</body>
    </html>
    END;
?>