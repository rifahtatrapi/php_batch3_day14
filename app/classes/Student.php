<?php


namespace App\classes;


class Student
{
    protected $text;
    protected $students;
    protected $result = [];
    public function __construct($post = null)
    {
        if (isset($post['search']))
        {
            $this->text = $post['search'];
        }
    }

    public function getAllStudent()
    {
        return[
            0=>[
                'name' => 'Rafa',
                'mobile' => '123654',
                'email' => 'rafa@gmail.com',
                'address' => 'rampura'
            ],
            1=>[
                'name' => 'Asha',
                'mobile' => '456321',
                'email' => 'asha@gmail.com',
                'address' => 'mirpur'
            ],
            2=>[
                'name' => 'Nila',
                'mobile' => '789654',
                'email' => 'nila@gmail.com',
                'address' => 'badda'
            ],
            3=>[
                'name' => 'Shimu',
                'mobile' => '741258',
                'email' => 'shimu@gmail.com',
                'address' => 'dhanmondi'
            ],
            4=>[
                'name' => 'Nipu',
                'mobile' => '258963',
                'email' => 'nipu@gmail.com',
                'address' => 'basabo'
            ],
            5=>[
                'name' => 'Odri',
                'mobile' => '9632258',
                'email' => 'odri@gmail.com',
                'address' => 'shamoli'
            ],
        ];

    }
    public function getStudentBySearchText()
    {
       $this->students = $this->getAllStudent();
       foreach ($this->students as $student)
       {
           if($this->text == $student['name'])
           {
               $this->result = $student;
               break;
           }
       }
       return $this->result;
    }

}