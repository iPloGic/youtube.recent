# README #

Компонент **youtube.recent** - виджет последних видео канала YouTube.

### Подключение ###

Создайте на сайте директорию `\local\components\iplogic`. Скопируйте в нее скачанную директорию компонента youtube.recent.

В нужном месте сайта добавьте вызов компонента. Код для подключения:

```
<?$APPLICATION->IncludeComponent(
    "iplogic:youtube.recent", 
    ".default", 
    array(
        "CHANNEL_ID" => "UCA6...hzjg",          //  Channel identifier
        "NUM" => "4",                           //  Posts number
        "PREVIEW_FILENAME" => "mqdefault.jpg",  //  Thumbnail filename
        "SHOW_ERRORS" => "Y",                   //  If "N" errors will not be displayed
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "COMPONENT_TEMPLATE" => ".default"
    ),
    false
);?>
```

### Параметры ###

Параметры компонента описаны в таблице. Стандартные параметры для компонента опущены, о них можно узнать в документации Битрикс.

| Параметр | Описание                    |
| ------------- | ------------------------------ |
| CHANNEL_ID      | Идентификатор канала. Можно получить из ссылки на канал.  |
| NUM   | Количество выводимых элементов.     |
| PREVIEW_FILENAME   | Стандартное имя превью картинки из списка возможных для получения от API YouTube.     |
| SHOW_ERRORS   | Выводить или нет ошибки при их возникновении     |

Возможные имена превью изображений

| Название    | Разрешение |
| ----------- | ---------- |
| default.jpg | 120x90 |
| 1.jpg       | 120x90 со сдвигом кадра |
| 2.jpg | 120x90 со сдвигом кадра |
| 3.jpg | 120x90 со сдвигом кадра |
| mqdefault.jpg | 320x180 |
| hqdefault.jpg | 480x360 |
| sddefault.jpg | 640x480 |
| maxresdefault.jpg | Максимальное для видео |