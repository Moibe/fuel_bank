<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ova vrijednost treba biti netočna (false).',
    'This value should be true.' => 'Ova vrijednost treba biti točna (true).',
    'This value should be of type {{ type }}.' => 'Ova vrijednost treba biti tipa {{ type }}.',
    'This value should be blank.' => 'Ova vrijednost treba biti prazna.',
    'The value you selected is not a valid choice.' => 'Ova vrijednost treba biti jedna od ponuđenih.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Izaberite barem {{ limit }} mogućnosti.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Izaberite najviše {{ limit }} mogućnosti.',
    'One or more of the given values is invalid.' => 'Jedna ili više danih vrijednosti nije ispravna.',
    'This field was not expected.' => 'Ovo polje nije očekivalo.',
    'This field is missing.' => 'Ovo polje nedostaje.',
    'This value is not a valid date.' => 'Ova vrijednost nije ispravan datum.',
    'This value is not a valid datetime.' => 'Ova vrijednost nije ispravan datum-vrijeme.',
    'This value is not a valid email address.' => 'Ova vrijednost nije ispravna e-mail adresa.',
    'The file could not be found.' => 'Datoteka ne može biti pronađena.',
    'The file is not readable.' => 'Datoteka nije čitljiva.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika ({{ size }} {{ suffix }}). Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime tip datoteke nije ispravan ({{ type }}). Dozvoljeni mime tipovi su {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ova vrijednost treba biti {{ limit }} ili manje.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ova vrijednost je predugačka. Treba imati {{ limit }} znakova ili manje.',
    'This value should be {{ limit }} or more.' => 'Ova vrijednost treba biti {{ limit }} ili više.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ova vrijednost je prekratka. Treba imati {{ limit }} znakova ili više.',
    'This value should not be blank.' => 'Ova vrijednost ne smije biti prazna.',
    'This value should not be null.' => 'Ova vrijednost ne smije biti null.',
    'This value should be null.' => 'Ova vrijednost treba biti null.',
    'This value is not valid.' => 'Ova vrijednost nije ispravna.',
    'This value is not a valid time.' => 'Ova vrijednost nije ispravno vrijeme.',
    'This value is not a valid URL.' => 'Ova vrijednost nije ispravan URL.',
    'The two values should be equal.' => 'Obje vrijednosti trebaju biti jednake.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ova datoteka je prevelika. Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Ova datoteka je prevelika.',
    'The file could not be uploaded.' => 'Ova datoteka ne može biti prenesena.',
    'This value should be a valid number.' => 'Ova vrijednost treba biti ispravan broj.',
    'This file is not a valid image.' => 'Ova datoteka nije ispravna slika.',
    'This is not a valid IP address.' => 'Ovo nije ispravna IP adresa.',
    'This value is not a valid language.' => 'Ova vrijednost nije ispravan jezik.',
    'This value is not a valid locale.' => 'Ova vrijednost nije ispravana regionalna oznaka.',
    'This value is not a valid country.' => 'Ova vrijednost nije ispravna zemlja.',
    'This value is already used.' => 'Ova vrijednost je već iskorištena.',
    'The size of the image could not be detected.' => 'Veličina slike se ne može odrediti.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je prevelika ({{ width }}px). Najveća dozvoljena širina je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premala ({{ width }}px). Najmanja dozvoljena širina je {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Visina slike je prevelika ({{ height }}px). Najveća dozvoljena visina je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Visina slike je premala ({{ height }}px). Najmanja dozvoljena visina je {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ova vrijednost treba biti trenutna korisnička lozinka.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ova vrijednost treba imati točno {{ limit }} znakova.',
    'The file was only partially uploaded.' => 'Datoteka je samo djelomično prenesena.',
    'No file was uploaded.' => 'Niti jedna datoteka nije prenesena.',
    'No temporary folder was configured in php.ini.' => 'U php.ini datoteci nije konfiguriran privremeni folder.',
    'Cannot write temporary file to disk.' => 'Ne mogu zapisati privremenu datoteku na disk.',
    'A PHP extension caused the upload to fail.' => 'Prijenos datoteke nije uspio zbog PHP ekstenzije.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ova kolekcija treba sadržavati {{ limit }} ili više elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili više elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili više elemenata.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ova kolekcija treba sadržavati {{ limit }} ili manje elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili manje elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili manje elemenata.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ova kolekcija treba sadržavati točno {{ limit }} element.|Ova kolekcija treba sadržavati točno {{ limit }} elementa.|Ova kolekcija treba sadržavati točno {{ limit }} elemenata.',
    'Invalid card number.' => 'Neispravan broj kartice.',
    'Unsupported card type or invalid card number.' => 'Neispravan broj kartice ili tip kartice nije podržan.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ova vrijednost nije ispravan međunarodni broj bankovnog računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ova vrijednost nije ispravan ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ova vrijednost nije ispravan ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ova vrijednost nije ispravan ISBN-10 niti ISBN-13.',
    'This value is not a valid ISSN.' => 'Ova vrijednost nije ispravan ISSN.',
    'This value is not a valid currency.' => 'Ova vrijednost nije ispravna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ova vrijednost bi trebala biti jednaka {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ova vrijednost bi trebala biti veća od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ova vrijednost bi trebala biti veća ili jednaka od {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrijednost bi trebala biti {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ova vrijednost bi trebala biti manja od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ova vrijednost bi trebala biti manja ili jednaka {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ova vrijednost ne bi trebala biti {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrijednost ne bi trebala biti {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Omjer slike je prevelik ({{ ratio }}). Dozvoljeni maksimalni omjer je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Omjer slike je premali ({{ ratio }}). Minimalni očekivani omjer je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Slika je kvadratnog oblika ({{ width }}x{{ height }}px). Kvadratne slike nisu dozvoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Slika je orijentirana horizontalno ({{ width }}x{{ height }}px). Horizontalno orijentirane slike nisu dozvoljene.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Slika je orijentirana vertikalno ({{ width }}x{{ height }}px). Vertikalno orijentirane slike nisu dozvoljene.',
    'An empty file is not allowed.' => 'Prazna datoteka nije dozvoljena.',
    'The host could not be resolved.' => 'Poslužitelj nije mogao biti razriješen.',
    'This value does not match the expected {{ charset }} charset.' => 'Znakovne oznake vrijednosti ne odgovaraju očekivanom {{ charset }} skupu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ovo nije validan poslovni identifikacijski broj (BIC).',
    'This form should not contain extra fields.' => 'Ovaj obrazac ne smije sadržavati dodatna polja.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Prenesena datoteka je prevelika. Molim pokušajte prenijeti manju datoteku.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrijednost nije ispravna. Pokušajte ponovo poslati obrazac.',
    'fos_user.username.already_used' => 'Korisničko ime već postoji.',
    'fos_user.username.blank' => 'Molimo, unesite korisničko ime.',
    'fos_user.username.short' => 'Korisničko ime je prekratko.',
    'fos_user.username.long' => 'Korisničko ime je predugo.',
    'fos_user.email.already_used' => 'Email već postoji.',
    'fos_user.email.blank' => 'Molimo, unesite email.',
    'fos_user.email.short' => 'Email je prekratak.',
    'fos_user.email.long' => 'Email je predug.',
    'fos_user.email.invalid' => 'Email nije ispravan.',
    'fos_user.password.blank' => 'Molimo, unesite lozinku.',
    'fos_user.password.short' => 'Lozinka je prekratka.',
    'fos_user.new_password.blank' => 'Molimo, unesite novu lozinku.',
    'fos_user.new_password.short' => 'Nova lozinka je prekratka.',
    'fos_user.current_password.invalid' => 'Lozinka nije ispravna.',
    'fos_user.group.blank' => 'Molimo unesite naziv.',
    'fos_user.group.short' => 'Naziv je prekratak.',
    'fos_user.group.long' => 'Naziv je predug.',
    'fos_group.name.already_used' => 'To se ime već upotrebljava.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Dogodila se autentifikacijske iznimka.',
    'Authentication credentials could not be found.' => 'Autentifikacijski podaci nisu pronađeni.',
    'Authentication request could not be processed due to a system problem.' => 'Autentifikacijski zahtjev nije moguće provesti uslijed sistemskog problema.',
    'Invalid credentials.' => 'Neispravni akreditacijski podaci.',
    'Cookie has already been used by someone else.' => 'Cookie je već netko drugi iskoristio.',
    'Not privileged to request the resource.' => 'Nemate privilegije zahtijevati resurs.',
    'Invalid CSRF token.' => 'Neispravan CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce je isteko.',
    'No authentication provider found to support the authentication token.' => 'Nije pronađen autentifikacijski provider koji bi podržao autentifikacijski token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nije dostupna, ili je istekla ili cookies nisu omogućeni.',
    'No token could be found.' => 'Token nije pronađen.',
    'Username could not be found.' => 'Korisničko ime nije pronađeno.',
    'Account has expired.' => 'Račun je isteko.',
    'Credentials have expired.' => 'Akreditacijski podaci su istekli.',
    'Account is disabled.' => 'Račun je onemogućen.',
    'Account is locked.' => 'Račun je zaključan.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Ažuriraj grupu',
    'group.show.name' => 'Ime grupe',
    'group.new.submit' => 'Spremi grupu',
    'group.flash.updated' => 'Grupa je uspješno ažurirana.',
    'group.flash.created' => 'Grupa je uspješno kreirana.',
    'group.flash.deleted' => 'Grupa je uspješno spremljena.',
    'security.login.username' => 'Korisničko ime',
    'security.login.password' => 'Lozinka',
    'security.login.remember_me' => 'Zapamti me',
    'security.login.submit' => 'Prijava',
    'profile.show.username' => 'Korisničko ime',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Ažuriraj',
    'profile.flash.updated' => 'Profil je uspješno ažuriran.',
    'change_password.submit' => 'Izmijeni lozinku',
    'change_password.flash.success' => 'Lozinka je uspješno spremljena.',
    'registration.check_email' => 'Na %email% smo vam poslali poruku s poveznicom za aktivaciju. Korisnički račun aktivirate klikom na tu poveznicu.',
    'registration.confirmed' => 'Pozdrav %username%, vaš korisnički račun je sada aktiviran.',
    'registration.back' => 'Natrag na polaznu stranicu.',
    'registration.submit' => 'Registracija',
    'registration.flash.user_created' => 'Korisnički račun je uspješno kreiran.',
    'registration.email.subject' => 'Aktivacija korisničkog računa',
    'registration.email.message' => 'Pozdrav %username%!

Za aktivaciju korisničkog računa molimo kliknite na %confirmationUrl%

Pozdrav,
Autori stranice
',
    'resetting.request.username' => 'Korisničko ime',
    'resetting.request.submit' => 'Izmijeni lozinku',
    'resetting.reset.submit' => 'Spremi lozinku',
    'resetting.flash.success' => 'Lozinka je uspješno spremljena.',
    'resetting.email.subject' => 'Promjena lozinke',
    'resetting.email.message' => 'Pozdrav %username%!

Za promjenu lozinke molimo kliknite na %confirmationUrl%

Pozdrav,
Autori stranice
',
    'layout.logout' => 'Odjava',
    'layout.login' => 'Prijava',
    'layout.register' => 'Registracija',
    'layout.logged_in_as' => 'Prijavljen kao %username%',
    'form.group_name' => 'Ime grupe',
    'form.username' => 'Korisničko ime',
    'form.email' => 'Email',
    'form.current_password' => 'Trenutna lozinka',
    'form.password' => 'Lozinka',
    'form.password_confirmation' => 'Potvrda lozinke',
    'form.new_password' => 'Nova lozinka',
    'form.new_password_confirmation' => 'Potvrda lozinke',
  ),
  'EasyAdminBundle' => 
  array (
    'new.page_title' => 'Izradi %entity_name%',
    'show.page_title' => '%entity_name% (#%entity_id%)',
    'edit.page_title' => 'Uredi %entity_name% (#%entity_id%)',
    'list.page_title' => '%entity_name%',
    'search.page_title' => '{0} Nema rezultata pretrage|{1} <strong>1</strong> rezultata pronađeno|]1,Inf] <strong>%count%</strong> results found',
    'search.no_results' => 'Nema rezultata pretrage.',
    'list.row_actions' => 'Akcije',
    'paginator.first' => 'Prvi',
    'paginator.previous' => 'Prethodan',
    'paginator.next' => 'Slijedeći',
    'paginator.last' => 'Posljednji',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> od <strong>%results%</strong>',
    'label.true' => 'Da',
    'label.false' => 'Ne',
    'label.empty' => 'Prazno',
    'label.null' => 'Null',
    'label.nullable_field' => 'Ostavite prazno',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Nepristupačan',
    'label.inaccessible.explanation' => 'Getter metoda ne postoji za ovo polje ili vrijednost svojstva nije javna',
    'user.logged_in_as' => 'Prijavljen kao',
    'user.unnamed' => 'Neimenovani korisnik',
    'user.anonymous' => 'Anonimni korisnik',
    'user.signout' => 'Odjava',
    'toggle_navigation' => 'Promjena navigacije',
    'delete_modal.title' => 'Da li ste sigurni da želite izbrisati ovu stavku?',
    'delete_modal.content' => 'Izbrisana stavka se ne može povratiti',
    'delete_modal.action' => 'Izbrisati',
    'action.add_new_item' => 'Dodajte novu stavku',
    'action.add_another_item' => 'Dodajte još jednu stavku',
    'action.remove_item' => 'Uklonite stavku',
    'errors' => 'Greška|Greške',
    'form.are_you_sure' => 'Niste spremili izmjene na ovom obrascu.',
    'show.remaining_items' => '{1} postoji još jedna stavka koja nije prikazana na ovom popisu|]1,Inf] %count% ostale stavke nisu prikazane na ovom popisu',
    'exception.entity_not_found' => 'Ta stavka više nije dostupna.',
    'exception.entity_remove' => 'Ta stavka ne može se izbrisati jer ovise o njoj ostale stavke.',
    'exception.forbidden_action' => 'Zatražena radnja ne može se izvršiti na ovoj stavci.',
    'exception.no_entities_configured' => 'Aplikacija nije ispravno konfigurirana.',
    'exception.undefined_entity' => 'Aplikacija nije ispravno konfigurirana za ove vrste stavki.',
  ),
  'messages' => 
  array (
    'action.new' => 'Dodaj %entity_name%',
    'action.show' => 'Prikaži',
    'action.edit' => 'Uredi',
    'action.search' => 'Pretraži',
    'action.delete' => 'Izbriši',
    'action.save' => 'Spremi promjene',
    'action.cancel' => 'Poništi',
    'action.list' => 'Natrag na popis',
    'label.form.empty_value' => 'Prazno',
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
