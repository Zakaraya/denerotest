# denerotest
## ЗАДАЧА #1 (ООП)
1. Создать класс Item, который не наследуется. В конструктор класса передается ID объекта.
2. Описать свойства (int) id, (string) name, (int) status, (bool) changed. Свойства доступны только внутри класса.
3. Создать метод init(). Предусмотреть одноразовый вызов метода.
4. Метод доступен только внутри класса.
5. Метод получает из таблицы objects. данные name и status и заполняет их в свойства экземпляра (реализация работы с базой не требуется, представим что класс уже работает с бд). 6. Эти данные также необходимо хранить в сыром виде внутри объекта, до сохранения.
7. Сделать возможным получение свойств объекта, используя magic methods.
8. Сделать возможным задание свойств объекта, используя magic methods с проверкой вводимого значения на заполненность и тип значения. Свойство ID не поддается записи.
9. Создать метод save().
10. Метод публичный.
11. Метод сохраняет установленные значения name и status в случае, если свойства объекта были изменены извне.
12. Класс должен быть задокументирован в стиле PHPDocumentor.

## ЗАДАЧА #2 (SQL ЗАПРОСЫ)
Есть несколько таблиц в БД: users, objects
1. users: id, login, password, object_id
2. objects: id, name, status  


Нужно сделать выборку пользователей из базы данных с использованием конструкции JOIN у которых есть запись в таблице objects, соответствующая значению object_id.

## ЗАДАЧА #3 (JQUERY)
1. Написать функцию перехвата нажатия клавиш left arrow, right arrow, up arrow, down arrow
2. При нажатии на любую из клавиш появляется alert с названием нажатой клавиши
3. Запрещается использовать любые плагины, которые осуществляют перехват 
