<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('bg', array (
  'validators' => 
  array (
    'This value should be false.' => 'Стойността трябва да бъде лъжа (false).',
    'This value should be true.' => 'Стойността трябва да бъде истина (true).',
    'This value should be of type {{ type }}.' => 'Стойността трябва да бъде от тип {{ type }}.',
    'This value should be blank.' => 'Стойността трябва да бъде празна.',
    'The value you selected is not a valid choice.' => 'Избраната стойност е невалидна.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Трябва да изберете поне {{ limit }} опция.|Трябва да изберете поне {{ limit }} опции.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Трябва да изберете най-много {{ limit }} опция.|Трябва да изберете най-много {{ limit }} опции.',
    'One or more of the given values is invalid.' => 'Една или повече от зададените стойности е невалидна.',
    'This field was not expected.' => 'Това поле не се е очаквало.',
    'This field is missing.' => 'Това поле липсва.',
    'This value is not a valid date.' => 'Стойността не е валидна дата (date).',
    'This value is not a valid datetime.' => 'Стойността не е валидна дата (datetime).',
    'This value is not a valid email address.' => 'Стойността не е валиден email адрес.',
    'The file could not be found.' => 'Файлът не беше открит.',
    'The file is not readable.' => 'Файлът не може да бъде прочетен.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файлът е твърде голям ({{ size }} {{ suffix }}). Максималният размер е {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Майм типа на файла е невалиден ({{ type }}). Разрешени майм типове са {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Стойността трябва да бъде {{ limit }} или по-малко.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Стойността е твърде дълга. Трябва да съдържа най-много {{ limit }} символ.|Стойността е твърде дълга. Трябва да съдържа най-много {{ limit }} символа.',
    'This value should be {{ limit }} or more.' => 'Стойността трябва да бъде {{ limit }} или повече.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Стойността е твърде кратка. Трябва да съдържа поне {{ limit }} символ.|Стойността е твърде кратка. Трябва да съдържа поне {{ limit }} символа.',
    'This value should not be blank.' => 'Стойността не трябва да бъде празна.',
    'This value should not be null.' => 'Стойността не трябва да бъде null.',
    'This value should be null.' => 'Стойността трябва да бъде null.',
    'This value is not valid.' => 'Стойността не е валидна.',
    'This value is not a valid time.' => 'Стойността не е валидно време (time).',
    'This value is not a valid URL.' => 'Стойността не е валиден URL.',
    'The two values should be equal.' => 'Двете стойности трябва да бъдат равни.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Файлът е твърде голям. Разрешеният максимален размер е {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Файлът е твърде голям.',
    'The file could not be uploaded.' => 'Файлът не може да бъде качен.',
    'This value should be a valid number.' => 'Стойността трябва да бъде валиден номер.',
    'This file is not a valid image.' => 'Файлът не е валидно изображение.',
    'This is not a valid IP address.' => 'Това не е валиден IP адрес.',
    'This value is not a valid language.' => 'Стойността не е валиден език.',
    'This value is not a valid locale.' => 'Стойността не е валидна локализация.',
    'This value is not a valid country.' => 'Стойността не е валидна държава.',
    'This value is already used.' => 'Стойността вече е в употреба.',
    'The size of the image could not be detected.' => 'Размера на изображението не може да бъде определен.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Изображението е твърде широко ({{ width }}px). Широчината трябва да бъде максимум {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Изображението е с твърде малка широчина ({{ width }}px). Широчината трябва да бъде минимум {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Изображението е с твърде голяма височина ({{ height }}px). Височината трябва да бъде максимум {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Изображението е с твърде малка височина ({{ height }}px). Височина трябва да бъде минимум {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Стойността трябва да бъде текущата потребителска парола.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Стойността трябва да бъде точно {{ limit }} символ.|Стойността трябва да бъде точно {{ limit }} символа.',
    'The file was only partially uploaded.' => 'Файлът е качен частично.',
    'No file was uploaded.' => 'Файлът не беше качен.',
    'No temporary folder was configured in php.ini.' => 'Не е посочена директория за временни файлове в php.ini.',
    'Cannot write temporary file to disk.' => 'Не може да запише временен файл на диска.',
    'A PHP extension caused the upload to fail.' => 'PHP разширение предизвика прекъсване на качването.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Колекцията трябва да съдържа поне {{ limit }} елемент.|Колекцията трябва да съдържа поне {{ limit }} елемента.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Колекцията трябва да съдържа най-много {{ limit }} елемент.|Колекцията трябва да съдържа най-много {{ limit }} елемента.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Колекцията трябва да съдържа точно {{ limit }} елемент.|Колекцията трябва да съдържа точно {{ limit }} елемента.',
    'Invalid card number.' => 'Невалиден номер на картата.',
    'Unsupported card type or invalid card number.' => 'Неподдържан тип карта или невалиден номер на картата.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Невалиден Международен номер на банкова сметка (IBAN).',
    'This value is not a valid ISBN-10.' => 'Невалиден ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Невалиден ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Невалидна стойност както за ISBN-10, така и за ISBN-13 .',
    'This value is not a valid ISSN.' => 'Невалиден Международен стандартен сериен номер (ISSN).',
    'This value is not a valid currency.' => 'Невалидна валута.',
    'This value should be equal to {{ compared_value }}.' => 'Стойността трябва да бъде равна на {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Стойността трябва да бъде по-голяма от {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Стойността трябва да бъде по-голяма или равна на {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Стойността трябва да бъде идентична с {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Стойността трябва да бъде по-малка {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Стойността трябва да бъде по-малка или равна на {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Стойността не трябва да бъде равна на {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Стойността не трябва да бъде идентична с {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Изображението е с твърде голяма пропорция ({{ ratio }}). Максималната пропорция трябва да е {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Изображението е с твърде малка пропорция ({{ ratio }}). Минималната пропорция трябва да е {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Изображението е квадрат ({{ width }}x{{ height }}px). Такива изображения не са разрешени.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Изображението е с пейзажна ориентация ({{ width }}x{{ height }}px). Изображения с такава ориентация не са разрешени.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Изображението е с портретна ориентация ({{ width }}x{{ height }}px). Изображения с такава ориентация не са разрешени.',
    'An empty file is not allowed.' => 'Празни файлове не са разрешени.',
    'The host could not be resolved.' => 'Хостът е недостъпен.',
    'This value does not match the expected {{ charset }} charset.' => 'Стойността не съвпада с {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Невалиден бизнес идентификационен код (BIC).',
    'This form should not contain extra fields.' => 'Тази форма не трябва да съдържа допълнителни полета.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Каченият файл е твърде голям. Моля, опитайте да качите по-малък файл.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Невалиден CSRF токен. Моля, опитайте да изпратите формата отново.',
    'fos_user.username.already_used' => 'Потребителското име е заето.',
    'fos_user.username.blank' => 'Моля въведете потребителско име.',
    'fos_user.username.short' => 'Потребителското име е прекалено късо.',
    'fos_user.username.long' => 'Потребителското име е прекалено дълго.',
    'fos_user.email.already_used' => 'E-mail адреса е зает.',
    'fos_user.email.blank' => 'Моля въведете E-mail адрес.',
    'fos_user.email.short' => 'E-mail адреса е прекалено къс.',
    'fos_user.email.long' => 'E-mail адреса е прекалено дълъг.',
    'fos_user.email.invalid' => 'E-mail адреса е невалиден.',
    'fos_user.password.blank' => 'Моля въведете парола.',
    'fos_user.password.short' => 'Паролата е прекалено къса.',
    'fos_user.new_password.blank' => 'Моля въведете нова парола.',
    'fos_user.new_password.short' => 'Новата парола е прекалено къса.',
    'fos_user.current_password.invalid' => 'Въведената парола е невалидна.',
    'fos_user.group.blank' => 'Моля въведете име.',
    'fos_user.group.short' => 'Името е прекалено късо.',
    'fos_user.group.long' => 'Името е прекалено дълго.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Грешка при автентикация.',
    'Authentication credentials could not be found.' => 'Удостоверението за автентикация не е открито.',
    'Authentication request could not be processed due to a system problem.' => 'Заявката за автентикация не може да бъде обработената поради системна грешка.',
    'Invalid credentials.' => 'Невалидно удостоверение за автентикация.',
    'Cookie has already been used by someone else.' => 'Това cookie вече се ползва от някой друг.',
    'Not privileged to request the resource.' => 'Нямате права за достъп до този ресурс.',
    'Invalid CSRF token.' => 'Невалиден CSRF токен.',
    'Digest nonce has expired.' => 'Digest nonce е изтекъл.',
    'No authentication provider found to support the authentication token.' => 'Не е открит провайдър, който да поддържа този токен за автентикация.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесията не е достъпна, или времето за достъп е изтекло, или кукитата не са разрешени.',
    'No token could be found.' => 'Токена не е открит.',
    'Username could not be found.' => 'Потребителското име не е открито.',
    'Account has expired.' => 'Акаунта е изтекъл.',
    'Credentials have expired.' => 'Удостоверението за автентикация е изтекло.',
    'Account is disabled.' => 'Акаунта е деактивиран.',
    'Account is locked.' => 'Акаунта е заключен.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Обнови група',
    'group.show.name' => 'Име на групата',
    'group.new.submit' => 'Нова група',
    'group.flash.updated' => 'Групата беше обновена успешно.',
    'group.flash.created' => 'Групата беше създадена успешно.',
    'group.flash.deleted' => 'Групата беше изтрита успешно.',
    'security.login.username' => 'Потребителско име',
    'security.login.password' => 'Парола',
    'security.login.remember_me' => 'Запомни ме',
    'security.login.submit' => 'Вход',
    'profile.show.username' => 'Потребителско име',
    'profile.show.email' => 'Имейл',
    'profile.edit.submit' => 'Промени',
    'profile.flash.updated' => 'Профилът беше успешно променен.',
    'change_password.submit' => 'Промени паролата',
    'change_password.flash.success' => 'Паролата беше успешно променена.',
    'registration.check_email' => 'Изпратихме писмо до %email%. То съдържа линк за активиране, който трябва да отворите, за да се активира профилът Ви.
',
    'registration.confirmed' => 'Честито, %username%, акаунтът е успешно активиран.',
    'registration.back' => 'Обратно към предишната страница.',
    'registration.submit' => 'Регистрация',
    'registration.flash.user_created' => 'Потребителят беше успешно създаден.',
    'registration.email.subject' => 'Добре дошли, %username%!',
    'registration.email.message' => 'Здравейте, %username%!

За да активирате своя профил, моля отворете %confirmationUrl%

Това е еднократен линк за валидиране на акаунта Ви. 

Поздрави,
от екипа.
',
    'resetting.check_email' => 'Изпратихме писмо с линк за активация на посочения имейл адрес: %email%.
Забележка: Заявка за нова парола може да направите в рамките на %tokenLifetime% час(а).

Ако не откривате писмото проверете в папка СПАМ или опитайте отново.
',
    'resetting.request.username' => 'Потребителско име или имейл',
    'resetting.request.submit' => 'Промени паролата',
    'resetting.reset.submit' => 'Промени паролата',
    'resetting.flash.success' => 'Паролата беше успешно променена.',
    'resetting.email.subject' => 'Забравена парола',
    'resetting.email.message' => 'Здравейте, %username%!

За да промените своята парола, моля отворете %confirmationUrl%

Поздрави,
от екипа.
',
    'layout.logout' => 'Изход',
    'layout.login' => 'Вход',
    'layout.register' => 'Регистрация',
    'layout.logged_in_as' => 'Влязъл като %username%',
    'form.group_name' => 'Име на група',
    'form.username' => 'Потребителско име',
    'form.email' => 'Имейл',
    'form.current_password' => 'Текуща парола',
    'form.password' => 'Парола',
    'form.password_confirmation' => 'Парола (отново)',
    'form.new_password' => 'Нова парола',
    'form.new_password_confirmation' => 'Нова парола (отново)',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Създаване на %entity_name%',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Редактиране на %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} Няма резултати|{1} Един резултат|]1,Inf] <strong>%count%</strong> резултата',
    'search.no_results' => 'Няма резултати.',
    'list.row_actions' => 'Действия',
    'paginator.first' => 'Първа',
    'paginator.previous' => 'Предишна',
    'paginator.next' => 'Следваща',
    'paginator.last' => 'Последна',
    'paginator.counter' => '<strong>%start%</strong>–<strong>%end%</strong> от <strong>%results%</strong>',
    'label.true' => 'Да',
    'label.false' => 'Не',
    'label.empty' => 'Празно',
    'label.null' => '',
    'label.nullable_field' => 'Да се остави празно',
    'label.object' => 'Обект от PHP',
    'label.inaccessible' => 'Недостъпно',
    'label.inaccessible.explanation' => 'За това поле не съществува обектов метод за достъп (getter), нито пък съответната обектова променлива е публично достъпна (public).',
    'user.logged_in_as' => 'Влезли сте като',
    'user.unnamed' => 'Безименен потребител',
    'user.anonymous' => 'Анонимен потребител',
    'user.signout' => 'Изход',
    'toggle_navigation' => 'Включване/изключване на навигацията',
    'delete_modal.title' => 'Наистина ли желаете да изтриете записа?',
    'delete_modal.content' => 'Това действие е необратимо.',
    'delete_modal.action' => 'Изтриване',
    'action.add_new_item' => 'Добавяне на нов елемент',
    'action.add_another_item' => 'Добавяне на още един елемент',
    'action.remove_item' => 'Изтриване на елемента',
    'errors' => 'Грешка|Грешки',
    'form.are_you_sure' => 'Не сте записали направените във формуляра промени.',
    'show.remaining_items' => '{1} има още един елемент, който не е показан в списъка|]1,Inf] още %count% елемента не са показани в списъка',
  ),
  'messages' => 
  array (
    'action.new' => 'Добавяне на %entity_name%',
    'action.show' => 'Преглед',
    'action.edit' => 'Редактиране',
    'action.search' => 'Търсене',
    'action.delete' => 'Изтриване',
    'action.save' => 'Запис',
    'action.cancel' => 'Отказ',
    'action.list' => 'Обратно към списъка',
    '__name__label__' => '__name__label__',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso.',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario.',
    'fos_user.username.short' => 'El nombre de usuario es demasiado corto.',
    'fos_user.username.long' => 'El nombre de usuario es demasiado largo.',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso.',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo.',
    'fos_user.email.short' => 'La dirección de correo es demasiado corta.',
    'fos_user.email.long' => 'La dirección de correo es demasiado larga.',
    'fos_user.email.invalid' => 'La dirección de correo no es válida.',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña.',
    'fos_user.password.short' => 'La contraseña es demasiado corta.',
    'fos_user.password.mismatch' => 'Las dos contraseñas no coinciden.',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña.',
    'fos_user.new_password.short' => 'La nueva contraseña es demasiado corta.',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida.',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre.',
    'fos_user.group.short' => 'El nombre es demasiado corto.',
    'fos_user.group.long' => 'El nombre es demasiado largo.',
    'fos_group.name.already_used' => 'El nombre ya está en uso.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado.',
    'group.flash.created' => 'El grupo ha sido creado.',
    'group.flash.deleted' => 'El grupo ha sido borrado.',
    'security.login.username' => 'Nombre de usuario',
    'security.login.password' => 'Contraseña',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado.',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'registration.check_email' => 'Se ha enviado un email a %email%. Contiene un enlace de activación que debes presionar para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente.',
    'registration.email.subject' => 'Bienvenido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completar la validación de tu cuenta - por favor visita %confirmationUrl%

Este enlace sólo puede utilizarse una vez para validar tu cuenta.

Atentamente,
el Equipo.
',
    'resetting.check_email' => 'Un email ha sido enviado. Contiene un enlace de activación que debes presionar para restablecer tu contraseña.
 Nota: Solo se puede solicitar una nueva contraseña dentro %tokenLifetime% horas.

Si no recibe un correo electrónico, comprueba tu carpeta de correo no deseado o inténtelo de nuevo.
',
    'resetting.request.username' => 'Nombre de usuario o correo electrónico',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito.',
    'resetting.email.subject' => 'Restablecer Contraseña',
    'resetting.email.message' => 'Hola %username%!

Para restablecer tu contraseña - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo',
    'form.username' => 'Nombre de usuario',
    'form.email' => 'Email',
    'form.current_password' => 'Contraseña actual',
    'form.password' => 'Contraseña',
    'form.password_confirmation' => 'Repita la contraseña',
    'form.new_password' => 'Nueva contraseña',
    'form.new_password_confirmation' => 'Repita la contraseña',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Crear %entity_name%',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Modificar %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} No se han encontrado resultados|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    'search.no_results' => 'No se han encontrado resultados.',
    'list.row_actions' => 'Acciones',
    'paginator.first' => 'Primera',
    'paginator.previous' => 'Anterior',
    'paginator.next' => 'Siguiente',
    'paginator.last' => 'Última',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
    'label.true' => 'Si',
    'label.false' => 'No',
    'label.empty' => 'Vacío',
    'label.null' => 'Null',
    'label.nullable_field' => 'Dejar vacío',
    'label.object' => 'Objecto PHP',
    'label.inaccessible' => 'Inaccesible',
    'label.inaccessible.explanation' => 'Este campo no tiene un método getter o la propiedad asociada no es pública',
    'user.logged_in_as' => 'Conectado/a como',
    'user.unnamed' => 'Usuario sin nombre',
    'user.anonymous' => 'Usuario anónimo',
    'user.signout' => 'Cerrar sesión',
    'toggle_navigation' => 'Turnar navegación',
    'delete_modal.title' => '¿Realmente quieres borrar este elemento?',
    'delete_modal.content' => 'Esta acción no se puede deshacer.',
    'delete_modal.action' => 'Borrar',
    'action.add_new_item' => 'Añadir un elemento',
    'action.add_another_item' => 'Añadir otro elemento',
    'action.remove_item' => 'Eliminar este elemento',
    'errors' => 'Error|Errores',
    'form.are_you_sure' => 'No has guardado los cambios realizados en este formulario.',
    'show.remaining_items' => '{1} existe otro elemento que no se muestra en este listado|]1,Inf] existen otros %count% elementos que no se muestran en este listado',
    'exception.entity_not_found' => 'Este elemento ya no está disponible.',
    'exception.entity_remove' => 'Este elemento no se puede eliminar porque otros elementos dependen de él.',
    'exception.forbidden_action' => 'No se puede realizar la acción solicitada en este elemento.',
    'exception.no_entities_configured' => 'La aplicación no está configurada correctamente.',
    'exception.undefined_entity' => 'La aplicación no está configurada correctamente para este tipo de elementos.',
  ),
  'messages' => 
  array (
    'action.new' => 'Crear %entity_name%',
    'action.show' => 'Ver',
    'action.edit' => 'Modificar',
    'action.search' => 'Buscar',
    'action.delete' => 'Borrar',
    'action.save' => 'Guardar cambios',
    'action.cancel' => 'Cancelar',
    'action.list' => 'Volver al listado',
    'label.form.empty_value' => 'Ninguno',
    '__name__label__' => '__name__label__',
  ),
  'VichUploaderBundle' => 
  array (
    'download' => 'Descargar',
    'form.label.delete' => '¿Eliminar?',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
