# bitrix-helper

# Подключение файла
требуется в файл init.php добавить регистрацию класса

function helper() {
    Loader::registerAutoLoadClasses(null, [
        'lib\Helper\Helper' => '/local/lib/Helper/Helper.php'
    ]);
}
helper();

# Добавлен метод getIBlockID()
Предназначен для получения ID Инфоблока по символьному коду
