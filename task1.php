<?php

/**
 * Класс Item
 * 
 * @property-read int $id id объекта
 * @property string $name имя объекта
 * @property int $status статус объекта
 * @property bool $changed отвечает за изменения в объекте
 * 
 */
final class Item {

	private int $id;
    private string $name;
    private int $status;
    private bool $changed;


    /**
     * Конструктор класса Item
     * @param $id 
     * @return
     */
	function __construct($id) {
		$this->id = $id;
        $this->init($id);
	}

    /**
     * Получение из таблицы objects данных name и status и заполнение их в свойства экземпляра
     * @param $id 
     * @return
     */
    private function init(int $id){
    	$query = "SELECT name, status FROM objects WHERE id=[$id];";
        $result = $mysqli->query($query);
        $this->name = $result[0];
        $this->name = $result[1];   
    }
    
    /**
     * Получение свойств объекта
     * @param $property 
     * @return
     */
    public function __get($property)
    {
        if (property_exists($this, $property)){
            return $this->$property;
        } else {
            throw new Exception('Свойство недоступно или не существует!');
        }
    }

    /**
     * Задание свойств объекта с проверкой вводимого значения на заполненность и тип значения
     * @param $property 
     * @param $value 
     * @return
     */
    public function __set($property, $value)
    {

        if (empty($value)){
            throw new Exception("Пустое значение");
        }
        else{
            switch ($property) {
                case 'name':
                    if(is_string($value)){
                        $this->$property = $value;
                    }
                    else{
                        hrow new Exception('Не строкововый тип данных!');
                    }
                    break;
                case 'status':
                    if(is_int($value)) {
                        $this->$property = $value;
                    } else {
                        throw new Exception('Не целочисленный тип данных!');
                    }
                    break;
                case 'changed':
                    if(is_bool($value)) {
                        $this->$property = $value;
                    } else {
                        throw new Exception('Не логический тип данных!');
                    }
                    break;
            }
        }
    }
    /**
     *  Сохраняет установленные значения name и status в случае, если свойства объекта были изменены извне.
     * @param $name 
     * @param $status 
     * @return
     */
    public function save($name, $status){
    	if ($this->changed == false){
            $this->name = $name;
            $this->status = $status;
            $this->changed = true;
        }
    }
}

?>
