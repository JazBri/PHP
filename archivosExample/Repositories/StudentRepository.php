<?php
    namespace Repositories;

    use Repositories\IStudentRepository as IStudentRepository;
    use Models\Student as Student;

    class StudentRepository implements IStudentRepository{        
        private $studentList = array();
        private $fileName;
        public function __construct(){
            $this->fileName = dirname(__DIR__)."/Data/students.json";
        }

/*Agrega un dato al Json
 *Trae el archivo Json, guarda en el arreglo los objetos del Json
 *En el arreglo con los datos que trajo agrego el estudiante nuevo
 *Y lo volvemos a guardar en el Json
*/
        public function Add(Student $student){
            $this->RetrieveData();            
            array_push($this->studentList, $student);
            $this->SaveData();
        }

//Devuelve el arreglo de estudiantes
        public function GetAll(){
            $this->RetrieveData();
            return $this->studentList;
        }

/*
 *Inicializa el arreglo
 *Lee el arreglo 
 *json_encode devuelve un String con el valor del Json
 *Creamos el archivo con esos datos
*/
        private function SaveData(){
            $arrayToEncode = array();
            foreach($this->studentList as $student){
                $valuesArray["recordId"] = $student->getRecordId();
                $valuesArray["firstName"] = $student->getFirstName();
                $valuesArray["lastName"] = $student->getLastName();
                array_push($arrayToEncode, $valuesArray);
            }

            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            file_put_contents($this->fileName, $jsonContent);
        }


/*Traer el archivo Json
 *Inicializamos el arreglo studentList
 *Si el archivo ya existe en la variable jsonContent guardamos el contenido del archivo: devuelve el conetnido de un fichero a un String
 *En el arreglo arrayToDencode guardamos lo que estaríamos convirtiendo de String a Json con json_decode
 *Se van creando objetos a medida que los lee del arreglo. 
 *Guardamos esos objetos en el arreglo studentList
 *
 *Ternario -> variable = condición ? valor si cierto : valor si falso
*/
        private function RetrieveData(){
            $this->studentList = array();
            if(file_exists($this->fileName)){
                $jsonContent = file_get_contents($this->fileName);
                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();
                foreach($arrayToDecode as $valuesArray){
                    $student = new Student();
                    $student->setRecordId($valuesArray["recordId"]);
                    $student->setFirstName($valuesArray["firstName"]);
                    $student->setLastName($valuesArray["lastName"]);
                    array_push($this->studentList, $student);
                }
            }
        }
    }
?>
