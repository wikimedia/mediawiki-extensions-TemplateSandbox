<?php
/**
 * Internationalisation for TemplateSandbox
 *
 * @file
 * @ingroup Extensions
 */
$messages = array();

/** English
 * @author Brad Jorsch
 */
$messages['en'] = array(
	'templatesandbox' => 'Template sandbox', // Important! This is the string that appears on Special:SpecialPages
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Renders a page]] transcluding templates from a sandbox',

	'templatesandbox-suffix' => 'sandbox',
	'templatesandbox-legend' => 'Template sandbox',
	'templatesandbox-text' => 'You can choose a set of templates saved in your sandbox space by using an appropriate sandbox prefix.  For example, if you want to preview a version of {{ns:Template}}:Test that you have saved as "{{ns:User}}:Foo/sandbox/{{ns:Template}}:Test", use "{{ns:User}}:Foo/sandbox" as the prefix.',
	'templatesandbox-prefix-label' => 'Sandbox prefix:',
	'templatesandbox-page-label' => 'Render page:',
	'templatesandbox-revid-label' => 'Render revision:',
	'templatesandbox-text-label' => 'Render wikitext:',
	'templatesandbox-submit' => 'View',
	'templatesandbox-title-output' => 'Template sandbox: $1',

	'templatesandbox-editform-legend' => 'Preview page with this template',
	'templatesandbox-editform-page-label' => 'Page title:',
	'templatesandbox-editform-view-label' => 'Show preview',
	'templatesandbox-preview' => "Preview of $2",
	'templatesandbox-previewnote' => "'''Remember that this is only a preview of [[:$1]].'''
Your changes have not yet been saved!",

	'templatesandbox-invalid-title' => 'The title you specified is invalid.',
	'templatesandbox-title-not-exists' => 'The title you specified does not exist.',
	'templatesandbox-revision-not-exists' => 'The revision you specified does not exist.',
	'templatesandbox-invalid-prefix' => 'The sandbox prefix you specified is invalid.',
	'templatesandbox-prefix-not-local' => 'The sandbox prefix you specified is not local.',
	'templatesandbox-page-or-revid' => 'You must enter either a page title or a revision ID number.',

	'templatesandbox-editform-need-title' => 'To preview another page with this template, a page title must be specified.',
	'templatesandbox-editform-invalid-title' => 'The title you specified for previewing is invalid.',
	'templatesandbox-editform-title-not-exists' => 'The title you specified for previewing does not exist.',
);

/** Message documentation (Message documentation)
 * @author Brad Jorsch
 * @author Raymond
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'templatesandbox' => 'The name of the [[mw:Extension:TemplateSandbox|TemplateSandbox extension]].',
	'templatesandbox-desc' => '{{desc|name=Template Sandbox|url=http://www.mediawiki.org/wiki/Extension:TemplateSandbox}}',
	'templatesandbox-suffix' => "Suffix added to the current user's userpage for the default sandbox prefix.",
	'templatesandbox-legend' => 'Legend displayed on the input form.',
	'templatesandbox-text' => 'Text displayed in the input form.', # Fuzzy
	'templatesandbox-prefix-label' => 'Label for the "prefix" input field.',
	'templatesandbox-page-label' => 'Label for the "page" input field on the special page.',
	'templatesandbox-revid-label' => 'Label for the "revid" input field on the special page.',
	'templatesandbox-text-label' => 'Label for the "text" input field on the special page.',
	'templatesandbox-submit' => 'Label for the submit button on the special page.',
	'templatesandbox-title-output' => 'Message used when displaying the parsed page title. $1 is the parsed page title.',
	'templatesandbox-editform-legend' => 'Text used for the legend on the editpage form.',
	'templatesandbox-editform-page-label' => 'Label for the "page" input field on the editpage form.',
	'templatesandbox-editform-view-label' => 'Label for the submit button on the editpage form.',
	'templatesandbox-preview' => 'Title of preview section when previwing another page using this template. Parameters:
* $1 - the page being previewed
* $2 - the title set by the DISPLAYTITLE magic word',
	'templatesandbox-previewnote' => 'Message displayed when previwing another page using this template. $1 is the page being previewed.',
	'templatesandbox-invalid-title' => 'Error message displayed when the title specified in the special page is invalid.',
	'templatesandbox-title-not-exists' => 'Error message displayed when the title specified in the special page does not exist.',
	'templatesandbox-revision-not-exists' => 'Error message displayed when the rev_id specified in the special page does not exist.',
	'templatesandbox-invalid-prefix' => 'Error message displayed when the sandbox prefix specified in the special page is invalid.',
	'templatesandbox-prefix-not-local' => 'Error message displayed when the sandbox prefix specified in the special page is not local.',
	'templatesandbox-page-or-revid' => 'Error message displayed when neither a page title nor rev_id is given in the special page.',
	'templatesandbox-editform-need-title' => 'Error message displayed when no page title is given for the editpage form.',
	'templatesandbox-editform-invalid-title' => 'Error message displayed when the title specified for the editpage form is invalid.',
	'templatesandbox-editform-title-not-exists' => 'Error message displayed when the title specified for the editpage form does not exist.',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'templatesandbox' => 'TemplateSandbox',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Адлюстроўвае старонку]], уключыўшы на яе шаблён зь пясочніцы',
	'templatesandbox-suffix' => 'пясочніца',
	'templatesandbox-legend' => 'Пясочніца для шаблёнаў',
	'templatesandbox-prefix-label' => 'Прэфікс пясочніцы:',
	'templatesandbox-page-label' => 'Паказаць на старонцы:',
	'templatesandbox-revid-label' => 'Вэрсія для адлюстраваньня:',
	'templatesandbox-text-label' => 'Дадаць вікітэкст:',
	'templatesandbox-submit' => 'Паказаць',
	'templatesandbox-title-output' => 'TemplateSandbox: $1',
	'templatesandbox-editform-legend' => 'Паказаць старонку з гэтым шаблёнам',
	'templatesandbox-editform-page-label' => 'Назва старонкі:',
	'templatesandbox-editform-view-label' => 'Праглядзець',
	'templatesandbox-preview' => 'Прагляд «$2»',
	'templatesandbox-previewnote' => "'''Памятайце, што гэта толькі папярэдні прагляд [[:$1]].'''
Вышыя зьмены яшчэ не захаваныя!",
	'templatesandbox-invalid-title' => 'Пазначаная няслушная назва.',
	'templatesandbox-title-not-exists' => 'Пазначаная старонка не існуе.',
	'templatesandbox-revision-not-exists' => 'Пазначаная вэрсія не існуе.',
	'templatesandbox-invalid-prefix' => 'Пазначаны няслушны прэфікс пясочніцы',
	'templatesandbox-prefix-not-local' => 'Мусіць быць пазначаны лякальны прэфікс пясочніцы.',
	'templatesandbox-page-or-revid' => 'Трэба пазначыць старонку або вэрсію.', # Fuzzy
	'templatesandbox-editform-need-title' => 'Каб пабачыць іншую старонку з гэтым шаблёнам, трэба пазначыць назву старонкі.',
	'templatesandbox-editform-invalid-title' => 'Пазначаная для прагляду старонка няслушная.',
	'templatesandbox-editform-title-not-exists' => 'Пазначаная для прагляду старонка не існуе.',
);

/** Bulgarian (български)
 * @author පසිඳු කාවින්ද
 */
$messages['bg'] = array(
	'templatesandbox-submit' => 'Изглед',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'templatesandbox-suffix' => 'poull-traezh',
	'templatesandbox-legend' => 'Poull-traezh ar patromoù',
	'templatesandbox-submit' => 'Gwelet',
	'templatesandbox-editform-legend' => 'Rakwelet ar bajenn gant ar patrom-mañ',
	'templatesandbox-editform-page-label' => 'Titl ar bajenn :',
	'templatesandbox-editform-view-label' => 'Rakwelet',
	'templatesandbox-preview' => 'Rakwelet $2',
	'templatesandbox-previewnote' => "'''Diwallit mat, an destenn-mañ n'eo ken ur rakweled eus [[:$1]].'''
N'eo ket bet enrollet ho kemmoù evit c'hoazh !",
	'templatesandbox-invalid-title' => "Kamm eo an titl hoc'h eus merket.",
	'templatesandbox-title-not-exists' => "N'eus ket eus an titl spisaet ganeoc'h.",
	'templatesandbox-revision-not-exists' => "N'eus ket eus an adweladenn spisaet ganeoc'h.",
	'templatesandbox-editform-invalid-title' => "N'eo ket reizh an titl ho peus spisaet evit ar rakweled.",
	'templatesandbox-editform-title-not-exists' => "N'eus ket eus an titl ho peus spisaet evit ar rakweled.",
);

/** Catalan (català)
 * @author Vriullop
 */
$messages['ca'] = array(
	'templatesandbox' => 'Proves de plantilles',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Mostra una pàgina]] utilitzant plantilles de proves',
	'templatesandbox-suffix' => 'proves',
	'templatesandbox-legend' => 'Proves de plantilles',
	'templatesandbox-prefix-label' => 'Prefix de proves:',
	'templatesandbox-page-label' => 'Genera la pàgina:',
	'templatesandbox-revid-label' => 'Genera la revisió:',
	'templatesandbox-text-label' => 'Genera el text wiki:',
	'templatesandbox-submit' => 'Mostra',
	'templatesandbox-title-output' => 'Proves de plantilles: $1',
	'templatesandbox-editform-legend' => "Previsualització d'una pàgina amb aquesta plantilla",
	'templatesandbox-editform-page-label' => 'Títol de la pàgina:',
	'templatesandbox-editform-view-label' => 'Mostra previsualització',
	'templatesandbox-preview' => 'Previsualització de $2',
	'templatesandbox-previewnote' => "'''Això només és una previsualització de la pàgina [[:$1]].'''
Els vostres canvis encara no han estat desats!",
	'templatesandbox-invalid-title' => 'El títol que heu especificat no és vàlid.',
	'templatesandbox-title-not-exists' => 'El títol que heu especificat no existeix.',
	'templatesandbox-revision-not-exists' => 'La revisió que heu especificat no existeix.',
	'templatesandbox-invalid-prefix' => 'El prefix de proves que heu especificat no és vàlid.',
	'templatesandbox-prefix-not-local' => 'El prefix de proves que heu especificat no és local.',
	'templatesandbox-page-or-revid' => "Heu d'introduir un títol de pàgina o un número d'identificació de revisió.",
	'templatesandbox-editform-need-title' => "Per previsualitzar una altra pàgina amb aquesta plantilla, heu d'especificar un títol de pàgina.",
	'templatesandbox-editform-invalid-title' => 'El títol que heu especificat per a la previsualització no és vàlid.',
	'templatesandbox-editform-title-not-exists' => 'El títol que heu especificat per a la previsualització no existeix.',
);

/** Czech (česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'templatesandbox' => 'Šablonové pískoviště',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Vykreslování stránek]], které aplikuje šablony z pískoviště',
	'templatesandbox-suffix' => 'pískoviště',
	'templatesandbox-legend' => 'Šablonové pískoviště',
	'templatesandbox-prefix-label' => 'Prefix pískoviště:',
	'templatesandbox-page-label' => 'Vykreslit stránku:',
	'templatesandbox-revid-label' => 'Vykreslit revizi:',
	'templatesandbox-text-label' => 'Vykreslit wikitext:',
	'templatesandbox-submit' => 'Zobrazit',
	'templatesandbox-title-output' => 'Šablonové pískoviště: $1',
	'templatesandbox-editform-legend' => 'Náhled stránky s touto šablonou',
	'templatesandbox-editform-page-label' => 'Název stránky:',
	'templatesandbox-editform-view-label' => 'Ukázat náhled',
	'templatesandbox-preview' => 'Náhled stránky $2',
	'templatesandbox-previewnote' => "'''Pamatujte, že toto je pouze náhled stránky [[:$1]].'''
Změny zatím nebyly uloženy!",
	'templatesandbox-invalid-title' => 'Zadaný název je neplatný.',
	'templatesandbox-title-not-exists' => 'Zadaný název neexistuje.',
	'templatesandbox-revision-not-exists' => 'Zadaná revize neexistuje.',
	'templatesandbox-invalid-prefix' => 'Zadaný prefix pískoviště je neplatný.',
	'templatesandbox-prefix-not-local' => 'Zadaný prefix pískoviště není místní.',
	'templatesandbox-page-or-revid' => 'Musíte zadat název stránky nebo číslo revize.',
	'templatesandbox-editform-need-title' => 'Pokud chcete zobrazit náhled jiné stránky s využitím této šablony, musíte zadat název stránky.',
	'templatesandbox-editform-invalid-title' => 'Zadaný název stránky pro náhled je neplatný.',
	'templatesandbox-editform-title-not-exists' => 'Zadaný název stránky pro náhled neexistuje.',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'templatesandbox' => 'Vorlagenspielwiese',
	'templatesandbox-desc' => 'Ergänzt eine Spielwiese zum [[Special:TemplateSandbox|Rendern von Seiten]], die Vorlagen enthalten',
	'templatesandbox-suffix' => 'Spielwiese',
	'templatesandbox-legend' => 'Vorlagenspielwiese',
	'templatesandbox-text' => 'Du kannst einen Satz an Vorlagen auswählen, die in deinem Spielwiesenbereich gespeichert sind, indem du ein geeignetes Spielwiesenpräfix verwendest. Wenn du beispielsweise eine Version von {{ns:Template}}:Test vorschauen möchtest, die du als „{{ns:User}}:Foo/Spielwiese/{{ns:Template}}:Test“ gespeichert hast, benutze als Präfix „{{ns:User}}:Foo/Spielwiese“.',
	'templatesandbox-prefix-label' => 'Spielwiesenpräfix:',
	'templatesandbox-page-label' => 'Seite rendern:',
	'templatesandbox-revid-label' => 'Version rendern:',
	'templatesandbox-text-label' => 'Wikitext rendern:',
	'templatesandbox-submit' => 'Ansicht',
	'templatesandbox-title-output' => 'Vorlagenspielwiese: $1',
	'templatesandbox-editform-legend' => 'Vorschau der Seite mit dieser Vorlage anzeigen',
	'templatesandbox-editform-page-label' => 'Seitentitel:',
	'templatesandbox-editform-view-label' => 'Vorschau zeigen',
	'templatesandbox-preview' => 'Vorschau von $2',
	'templatesandbox-previewnote' => "'''Dies ist nur eine Vorschau von [[:$1]].'''
Deine Änderungen wurden noch nicht gespeichert!",
	'templatesandbox-invalid-title' => 'Der angegebene Titel ist ungültig.',
	'templatesandbox-title-not-exists' => 'Der angegebene Titel ist nicht vorhanden.',
	'templatesandbox-revision-not-exists' => 'Die angegebene Version ist nicht vorhanden.',
	'templatesandbox-invalid-prefix' => 'Das angegebene Spielwiesenpräfix ist ungültig.',
	'templatesandbox-prefix-not-local' => 'Das angegebene Spielwiesenpräfix ist nicht lokal.',
	'templatesandbox-page-or-revid' => 'Du musst entweder einen Seitentitel oder eine Versionskennung angeben.',
	'templatesandbox-editform-need-title' => 'Es muss ein Seitentitel angegeben werden, um eine Vorschau einer anderen Seite mit dieser Vorlage anzuzeigen.',
	'templatesandbox-editform-invalid-title' => 'Der angegebene Titel zur Vorschau ist ungültig.',
	'templatesandbox-editform-title-not-exists' => 'Der angegebene Titel zur Vorschau ist nicht vorhanden.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'templatesandbox' => 'QumdorŞablon',
	'templatesandbox-suffix' => 'qumdor',
	'templatesandbox-legend' => 'Qumdorê Şabloni',
	'templatesandbox-prefix-label' => 'Veroley qumdor:',
	'templatesandbox-submit' => 'Bıvin',
	'templatesandbox-title-output' => 'QumdorŞablon:$1',
	'templatesandbox-editform-legend' => 'Verasayışê pele da ena şablon',
	'templatesandbox-editform-page-label' => 'Sernamey pela:',
	'templatesandbox-editform-view-label' => 'Verasayışi bıvin',
	'templatesandbox-preview' => 'Verasayışê $2',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'templatesandbox' => 'Zona de pruebas para las plantillas',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Renderiza una página]] con la transclusión de las plantillas de una zona de pruebas',
	'templatesandbox-suffix' => 'Zona de pruebas',
	'templatesandbox-legend' => 'Zona de pruebas para las plantillas',
	'templatesandbox-prefix-label' => 'Prefijo de la zona de pruebas',
	'templatesandbox-page-label' => 'Renderizar la página:',
	'templatesandbox-revid-label' => 'Renderizar la revisión:',
	'templatesandbox-text-label' => 'Renderizar el wikitexto:',
	'templatesandbox-submit' => 'Ver',
	'templatesandbox-title-output' => 'Zona de pruebas para las plantillas: $1',
	'templatesandbox-editform-legend' => 'Vista previa de la página con esta plantilla',
	'templatesandbox-editform-page-label' => 'Título de la página:',
	'templatesandbox-editform-view-label' => 'Mostrar vista previa',
	'templatesandbox-preview' => 'Vista previa de $2',
	'templatesandbox-previewnote' => "'''Recuerda que esto es solo una previsualización de [[:$1]].'''
¡Tus cambios aún no se han guardado!",
	'templatesandbox-invalid-title' => 'El título que has especificado no es válido.',
	'templatesandbox-title-not-exists' => 'El título especificado no existe.',
	'templatesandbox-revision-not-exists' => 'La revisión especificada no existe.',
	'templatesandbox-invalid-prefix' => 'El prefijo de zona de pruebas que has especificado no es válido.',
	'templatesandbox-prefix-not-local' => 'El prefijo de zona de pruebas que has especificado no es local.',
	'templatesandbox-page-or-revid' => 'Debe indicar el título de la página o el número identificador de revisión.',
	'templatesandbox-editform-need-title' => 'Para obtener una vista previa de otra página con esta plantilla, se debe especificar un título de página.',
	'templatesandbox-editform-invalid-title' => 'El título especificado para la vista previa no es válido.',
	'templatesandbox-editform-title-not-exists' => 'El título especificado para la vista previa no existe.',
);

/** Estonian (eesti)
 * @author Pikne
 */
$messages['et'] = array(
	'templatesandbox' => 'Mallide liivakast',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Viimistleb lehekülje]], millel kasutatakse liivakastis olevaid malle.',
	'templatesandbox-suffix' => 'liivakast',
	'templatesandbox-legend' => 'Mallide liivakast',
	'templatesandbox-text' => 'Saad sobiva liivakastieesliite abil valida komplekti oma liivakastiruumis salvestatud malle. Näiteks kui tahad näha malli {{ns:Template}}:Katse versiooni eelvaadet, mille oled salvestanud asukohta "{{ns:User}}:Foo/liivakast/{{ns:Template}}:Katse", kasuta eesliidet "{{ns:User}}:Foo/liivakast".',
	'templatesandbox-prefix-label' => 'Liivakastieesliide:',
	'templatesandbox-page-label' => 'Viimistluslehekülg:',
	'templatesandbox-revid-label' => 'Viimistlusredaktsioon:',
	'templatesandbox-text-label' => 'Viimistlusvikitekst:',
	'templatesandbox-submit' => 'Vaata',
	'templatesandbox-title-output' => 'Mallide liivakast: $1',
	'templatesandbox-editform-legend' => 'Lehekülje eelvaatus selle malliga',
	'templatesandbox-editform-page-label' => 'Lehekülje pealkiri:',
	'templatesandbox-editform-view-label' => 'Näita eelvaadet',
	'templatesandbox-preview' => 'Lehekülje $2 eelvaade',
	'templatesandbox-previewnote' => "'''Pea meeles, et see on kõigest lehekülje [[:$1]] eelvaade.'''
Sinu muudatusi pole veel salvestatud!",
	'templatesandbox-invalid-title' => 'Määratud pealkiri on vigane.',
	'templatesandbox-title-not-exists' => 'Määratud pealkirja pole.',
	'templatesandbox-revision-not-exists' => 'Määratud redaktsiooni pole.',
	'templatesandbox-invalid-prefix' => 'Määratud liivakastieesliide on vigane.',
	'templatesandbox-prefix-not-local' => 'Määratud liivakastieesliide pole kohalik.',
	'templatesandbox-page-or-revid' => 'Pead sisestama kas lehekülje pealkirja või redaktsiooni identifikaatori.',
	'templatesandbox-editform-need-title' => 'Et näha teise lehekülje eelvaadet selle malliga, tuleb määrata lehekülje pealkiri.',
	'templatesandbox-editform-invalid-title' => 'Eelvaatuse jaoks määratud pealkiri on vigane.',
	'templatesandbox-editform-title-not-exists' => 'Eelvaatuse jaoks määratud pealkirja pole.',
);

/** Persian (فارسی)
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'templatesandbox-submit' => 'مشاهده',
	'templatesandbox-editform-page-label' => 'عنوان صفحه:',
	'templatesandbox-editform-view-label' => 'نمایش پیش‌نمایش',
	'templatesandbox-preview' => 'پیش‌نمایش $2',
);

/** Finnish (suomi)
 * @author Nedergard
 * @author Nike
 * @author Olli
 * @author Stryn
 */
$messages['fi'] = array(
	'templatesandbox' => 'Mallinehiekkalaatikko',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Renderöi sivun]] ottaen mukaan mallineet hiekkalaatikosta',
	'templatesandbox-suffix' => 'hiekkalaatikko',
	'templatesandbox-legend' => 'Mallinehiekkalaatikko',
	'templatesandbox-prefix-label' => 'Hiekkalaatikon etuliite:',
	'templatesandbox-page-label' => 'Renderöi sivu:',
	'templatesandbox-revid-label' => 'Renderöi versio:',
	'templatesandbox-text-label' => 'Renderöi wikiteksti:',
	'templatesandbox-submit' => 'Näytä',
	'templatesandbox-title-output' => 'Mallinehiekkalaatikko: $1',
	'templatesandbox-editform-legend' => 'Esikatsele sivua tätä mallinetta käyttäen',
	'templatesandbox-editform-page-label' => 'Sivun nimi',
	'templatesandbox-editform-view-label' => 'Näytä esikatselu',
	'templatesandbox-preview' => 'Sivun $2 esikatselu',
	'templatesandbox-previewnote' => "'''Muista, että tämä on sivun [[:$1]] esikatselu.'''
Muutoksia ei ole tallennettu!",
	'templatesandbox-invalid-title' => 'Määrittämäsi otsikko ei kelpaa.',
	'templatesandbox-title-not-exists' => 'Määrittämääsi otsikkoa ei ole.',
	'templatesandbox-revision-not-exists' => 'Määrittämääsi versiota ei ole.',
	'templatesandbox-invalid-prefix' => 'Määrittämääsi hiekkalaatikon etuliitettä ei ole.',
	'templatesandbox-prefix-not-local' => 'Määrittämäsi hiekkalaatikon etuliite ei sijaitse tällä sivustolla.',
	'templatesandbox-page-or-revid' => 'Anna joko sivun otsikko tai muokkaustunniste.',
	'templatesandbox-editform-need-title' => 'Esikatsellaksesi toista sivua tällä mallineella, täytyy sivun otsikko olla annettuna.',
	'templatesandbox-editform-invalid-title' => 'Esikatselua varten määrittämäsi otsikko ei kelpaa.',
	'templatesandbox-editform-title-not-exists' => 'Esikatselua varten määrittämääsi otsikkoa ei ole.',
);

/** French (français)
 * @author Arkanosis
 * @author Crochet.david
 * @author Gomoko
 * @author Npettiaux
 */
$messages['fr'] = array(
	'templatesandbox' => 'TemplateSandbox',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Afficher le rendu d’une page]] en utilisant les modèles présents dans un bac à sable',
	'templatesandbox-suffix' => 'bac à sable',
	'templatesandbox-legend' => 'Bac à sable de modèle',
	'templatesandbox-text' => 'Vous pouvez choisir un ensemble de modèles enregistrés dans votre espace de bac à sable à l\'aide d\'un préfixe de sandbox approprié.  Par exemple, si vous souhaitez afficher un aperçu d\'une version de {{ns:Template}}: Test que vous avez enregistré sous « {{ns:User}}: Foo/sandbox / {{ns:Template}}: Test ", utilisez" {{ns:User}}: Foo/bac à sable "comme préfixe.',
	'templatesandbox-prefix-label' => 'Préfixe de bac à sable :',
	'templatesandbox-page-label' => 'Rendu de la page :',
	'templatesandbox-revid-label' => 'Rendu de la révision :',
	'templatesandbox-text-label' => 'Rendu du wikitexte :',
	'templatesandbox-submit' => 'Afficher',
	'templatesandbox-title-output' => 'TemplateSandbox: $1',
	'templatesandbox-editform-legend' => 'Aperçu de la page avec ce modèle',
	'templatesandbox-editform-page-label' => 'Titre de la page :',
	'templatesandbox-editform-view-label' => 'Afficher l’aperçu',
	'templatesandbox-preview' => 'Aperçu de $2',
	'templatesandbox-previewnote' => "'''Souvenez-vous que ce n’est qu’un aperçu de [[:$1]].'''
Vos modifications n’ont pas encore été enregistrées!",
	'templatesandbox-invalid-title' => 'Le titre que vous avez spécifié n’est pas valide.',
	'templatesandbox-title-not-exists' => 'Le titre que vous avez spécifié n’existe pas.',
	'templatesandbox-revision-not-exists' => 'La révision que vous avez spécifiée n’existe pas.',
	'templatesandbox-invalid-prefix' => 'Le préfixe de bac à sable que vous avez spécifié n’est pas valide.',
	'templatesandbox-prefix-not-local' => 'Le préfixe de bac à sable que vous avez spécifié n’est pas local.',
	'templatesandbox-page-or-revid' => "Vous devez saisir soit un titre de page, soit un numéro d'identifiant de révision.",
	'templatesandbox-editform-need-title' => 'Pour afficher l’aperçu d’une autre page avec ce modèle, un titre de page doit être fourni.',
	'templatesandbox-editform-invalid-title' => 'Le titre que vous avez spécifié pour l’aperçu n’est pas valide.',
	'templatesandbox-editform-title-not-exists' => 'Le titre que vous avez spécifié pour l’aperçu n’existe pas.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'templatesandbox' => 'Zona de probas para os modelos',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Renderiza unha páxina]] coa transclusión dun ou varios modelos desde unha zona de probas',
	'templatesandbox-suffix' => 'zona de probas',
	'templatesandbox-legend' => 'Zona de probas para o modelo',
	'templatesandbox-prefix-label' => 'Prefixo da zona de probas',
	'templatesandbox-page-label' => 'Páxina de renderización:',
	'templatesandbox-revid-label' => 'Revisión de renderización:',
	'templatesandbox-text-label' => 'Texto wiki de renderización:',
	'templatesandbox-submit' => 'Ver',
	'templatesandbox-title-output' => 'Zona de probas para os modelos: $1',
	'templatesandbox-editform-legend' => 'Vista previa da páxina con este modelo',
	'templatesandbox-editform-page-label' => 'Título da páxina:',
	'templatesandbox-editform-view-label' => 'Mostrar a vista previa',
	'templatesandbox-preview' => 'Vista previa de "$2"',
	'templatesandbox-previewnote' => "'''Lembre que esta é só unha vista previa de \"[[:\$1]]\".'''
Aínda non gardou os seus cambios!",
	'templatesandbox-invalid-title' => 'O título que especificou non é válido.',
	'templatesandbox-title-not-exists' => 'O título que especificou non existe.',
	'templatesandbox-revision-not-exists' => 'A revisión que especificou non existe.',
	'templatesandbox-invalid-prefix' => 'O prefixo da zona de probas que especificou non é válido.',
	'templatesandbox-prefix-not-local' => 'O prefixo da zona de probas que especificou non é local.',
	'templatesandbox-page-or-revid' => 'Cómpre indicar un título de páxina ou ben un número de identificación de revisión.',
	'templatesandbox-editform-need-title' => 'Para ollar a vista previa doutra páxina con este modelo, cómpre especificar un título de páxina.',
	'templatesandbox-editform-invalid-title' => 'O título que especificou para a vista previa non é válido.',
	'templatesandbox-editform-title-not-exists' => 'O título que especificou para a vista previa non existe.',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author פוילישער
 * @author קיפודנחש
 */
$messages['he'] = array(
	'templatesandbox' => 'ארגז חול לתבניות',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|מציג דף]] שמכליל תבניות מארגז חול',
	'templatesandbox-suffix' => 'ארגז חול',
	'templatesandbox-legend' => 'ארגז חול לתבניות',
	'templatesandbox-prefix-label' => 'תחילית לארגז חול:',
	'templatesandbox-page-label' => 'להציג את הדף:',
	'templatesandbox-revid-label' => 'להציג את הגרסה:',
	'templatesandbox-text-label' => 'להציג קוד ויקי:',
	'templatesandbox-submit' => 'להציג',
	'templatesandbox-title-output' => 'ארגז חול לתבניות: $1',
	'templatesandbox-editform-legend' => 'תצוגה מקדימה של הדף עם התבנית הזאת',
	'templatesandbox-editform-page-label' => 'כותרת הדף:',
	'templatesandbox-editform-view-label' => 'תצוגה מקדימה',
	'templatesandbox-preview' => 'תצוגה מקדימה של $2',
	'templatesandbox-previewnote' => "'''זוהי רק תצוגה מקדימה של [[:$1]].'''
השינויים שלך טרם נשמרו!",
	'templatesandbox-invalid-title' => 'הכותרת שציינת אינה תקינה.',
	'templatesandbox-title-not-exists' => 'הכותרת שציינת אינה קיימת.',
	'templatesandbox-revision-not-exists' => 'הגרסה שציינת אינה קיימת.',
	'templatesandbox-invalid-prefix' => 'תחילית ארגז החול שציינת אינה קיימת.',
	'templatesandbox-prefix-not-local' => 'תחילית ארגז החול שציינת אינה מקומית.',
	'templatesandbox-page-or-revid' => 'יש לציין כותרת דף או מספר מזהה של גרסה.',
	'templatesandbox-editform-need-title' => 'כדי להראות תצוגה מקדימה בעמצות התבנית הזאת, יש לציין כותרת של דף.',
	'templatesandbox-editform-invalid-title' => 'הכותרת שציינת לתצוגה מקדימה אינה תקינה.',
	'templatesandbox-editform-title-not-exists' => 'הכותרת שציינת לתצוגה מקדימה אינה קיימת.',
);

/** Croatian (hrvatski)
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'templatesandbox' => 'Testiranje predložaka',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Prikazuje stranicu]] s testnim predloškom',
	'templatesandbox-suffix' => 'stranica za testiranje',
	'templatesandbox-legend' => 'Stranica za testiranje predložaka',
	'templatesandbox-prefix-label' => 'Prefiks:',
	'templatesandbox-page-label' => 'Testna stranica:',
	'templatesandbox-revid-label' => 'Uređivanje:',
	'templatesandbox-text-label' => 'Prikaži wikitekst:',
	'templatesandbox-submit' => 'Vidi',
	'templatesandbox-title-output' => 'Stranica za testiranje predložaka: $1',
	'templatesandbox-editform-legend' => 'Vidi stranicu s ovim predloškom',
	'templatesandbox-editform-page-label' => 'Ime stranice:',
	'templatesandbox-editform-view-label' => 'Prikaži kako će izgledati',
	'templatesandbox-preview' => 'Pregled predloška $2',
	'templatesandbox-previewnote' => "'''Ne zaboravite da je ovo samo pregled predloška [[:$1]].'''
Vaše uređivanje još nije snimljeno!",
	'templatesandbox-invalid-title' => 'Naslov koji ste naveli nije valjan.',
	'templatesandbox-title-not-exists' => 'Naslov koji ste naveli ne postoji.',
	'templatesandbox-revision-not-exists' => 'Uređivanje koje ste naveli ne postoji.',
	'templatesandbox-invalid-prefix' => 'Prefiks testne stranice nije valjan.',
	'templatesandbox-prefix-not-local' => 'Prefiks testne stranice koji ste naveli ne nalazi se ovdje.',
	'templatesandbox-page-or-revid' => 'Navedite ime stranice odnosno članka ili ID broj uređivanja.',
	'templatesandbox-editform-need-title' => 'Kako bi vidjeli neku drugu stranicu s ovim predloškom, navedite ime stranice.',
	'templatesandbox-editform-invalid-title' => 'Specificirano ime nije valjano.',
	'templatesandbox-editform-title-not-exists' => 'Stranica koju ste naveli ne postoji.',
);

/** Hungarian (magyar)
 * @author Tgr
 */
$messages['hu'] = array(
	'templatesandbox' => 'SablonHomokozó',
	'templatesandbox-suffix' => 'homokozó',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'templatesandbox' => 'Pagipadasan ti plantilia',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Agipaay ti panid]] a mangilak-am kadagiti plantilia manipud ti pagipadasan',
	'templatesandbox-suffix' => 'pagipadasan',
	'templatesandbox-legend' => 'Pagipadasan ti plantilia',
	'templatesandbox-prefix-label' => 'Pasaruno ti pagipadasan:',
	'templatesandbox-page-label' => 'Ipaay ti panid:',
	'templatesandbox-revid-label' => 'Ipaay ti binaliwan:',
	'templatesandbox-text-label' => 'Ipaay ti wiki a testo:',
	'templatesandbox-submit' => 'Kitaen',
	'templatesandbox-title-output' => 'Pagipadasan ti plantilia: $1',
	'templatesandbox-editform-legend' => 'Ipadas ti panid iti daytoy a plantilia',
	'templatesandbox-editform-page-label' => 'Titulo ti panid:',
	'templatesandbox-editform-view-label' => 'Ipakita ti Ipadas',
	'templatesandbox-preview' => 'Pannakaipadas ti $2',
	'templatesandbox-previewnote' => "'''Laglagipem a daytoy ket panagipadas laeng ti [[:$1]].'''
Dagiti binalbaliwam ket saan pay a naidulin!",
	'templatesandbox-invalid-title' => 'Ti titulo a nainaganam ket imbalido.',
	'templatesandbox-title-not-exists' => 'Awan met dayta titulo a nainaganam.',
	'templatesandbox-revision-not-exists' => 'Awan met ti pinagbaliw dayta titulo a nainaganam.',
	'templatesandbox-invalid-prefix' => 'Ti pasaruno ti pagipadasan a nainaganam ket saan a husto.',
	'templatesandbox-prefix-not-local' => 'Ti pasaruno ti pagipadasan a nainaganam ket saan a lokal.',
	'templatesandbox-page-or-revid' => 'Nasken nga agikabilka ti titulo ti panid wenno ID a numero ti panagbalbaliw.',
	'templatesandbox-editform-need-title' => 'Ti panagipadas ti sabali a panid iti daytoy a plantilia, nasken a mainaganan ti titulo ti panid.',
	'templatesandbox-editform-invalid-title' => 'Ti titulo a nainaganam para iti panagipadas ket saan nga husto.',
	'templatesandbox-editform-title-not-exists' => 'Ti titulo a nainaganam para iti panagipadas ket awan.',
);

/** Italian (italiano)
 * @author Beta16
 * @author Codicorumus
 */
$messages['it'] = array(
	'templatesandbox' => 'TemplateSandbox',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Visualizza una pagina]] includendovi le versioni dei template contenute in una sandbox',
	'templatesandbox-suffix' => 'sandbox',
	'templatesandbox-legend' => 'Template sandbox',
	'templatesandbox-text' => 'Indicando un prefisso per la sandbox, puoi selezionare un gruppo di template salvati nel tuo spazio sandbox. Per esempio, se vuoi fare l\'anteprima di una versione di {{ns:Template}}:Test che hai salvato come "{{ns:User}}:Foo/sandbox/{{ns:Template}}:Test", usa come prefisso "{{ns:User}}:Foo/sandbox".',
	'templatesandbox-prefix-label' => 'Prefisso della sandbox:',
	'templatesandbox-page-label' => 'Pagina da visualizzare:',
	'templatesandbox-revid-label' => 'Versione da visualizzare:',
	'templatesandbox-text-label' => 'Wikicode da visualizzare:',
	'templatesandbox-submit' => 'Visualizza',
	'templatesandbox-title-output' => 'Prova template: $1',
	'templatesandbox-editform-legend' => 'Anteprima della pagina con questo template',
	'templatesandbox-editform-page-label' => 'Titolo della pagina:',
	'templatesandbox-editform-view-label' => 'Visualizza anteprima',
	'templatesandbox-preview' => 'Anteprima di $2',
	'templatesandbox-previewnote' => "'''Ricorda che questa è solo un'anteprima di [[:$1]].'''
Le tue modifiche NON sono ancora state salvate!",
	'templatesandbox-invalid-title' => 'Il titolo che hai specificato non è valido.',
	'templatesandbox-title-not-exists' => 'Il titolo che hai specificato non esiste.',
	'templatesandbox-revision-not-exists' => 'La revisione che hai specificato non esiste.',
	'templatesandbox-invalid-prefix' => 'Il prefisso di sandbox che hai indicato non è valido.',
	'templatesandbox-prefix-not-local' => 'Il prefisso di sandbox che hai indicato non è locale.',
	'templatesandbox-page-or-revid' => 'Devi inserire un titolo di pagina oppure un numero di versione.',
	'templatesandbox-editform-need-title' => "Per visualizzare l'anteprima di un'altra pagina con questo template, devi specificare un titolo di pagina.",
	'templatesandbox-editform-invalid-title' => "Il titolo che hai specificato per l'anteprima non è valido.",
	'templatesandbox-editform-title-not-exists' => "Il titolo che hai specificato per l'anteprima non esiste.",
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'templatesandbox' => 'テンプレートのサンドボックス',
	'templatesandbox-desc' => 'テンプレートを参照読み込みして[[Special:TemplateSandbox|ページをレンダリング]]できるサンドボックス',
	'templatesandbox-suffix' => 'サンドボックス',
	'templatesandbox-legend' => 'テンプレートのサンドボックス',
	'templatesandbox-text' => 'テンプレートを自分の利用者サンドボックスに sandbox 接頭辞付きで保存している場合は、それらを指定できます。例えば、{{ns:Template}}:Test を「{{ns:User}}:Hoge/sandbox/{{ns:Template}}:Test」として保存していてそれをプレビューする場合は、接頭辞として「{{ns:User}}:Hoge/sandbox」を使用してください。',
	'templatesandbox-prefix-label' => 'サンドボックスの接頭辞:',
	'templatesandbox-page-label' => '使用するページ:',
	'templatesandbox-revid-label' => '使用する版:',
	'templatesandbox-text-label' => '使用するウィキテキスト:',
	'templatesandbox-submit' => '表示',
	'templatesandbox-title-output' => 'テンプレートのサンドボックス: $1',
	'templatesandbox-editform-legend' => 'このテンプレートでページをプレビュー',
	'templatesandbox-editform-page-label' => 'ページ名:',
	'templatesandbox-editform-view-label' => 'プレビューを表示',
	'templatesandbox-preview' => '$2 のプレビュー',
	'templatesandbox-previewnote' => "'''これは [[:$1]] のプレビューです。'''
変更内容はまだ保存されていません!",
	'templatesandbox-invalid-title' => '指定したページ名は無効です。',
	'templatesandbox-title-not-exists' => '指定したページは存在しません。',
	'templatesandbox-revision-not-exists' => '指定した版は存在しません。',
	'templatesandbox-invalid-prefix' => '指定したサンドボックス接頭辞は無効です。',
	'templatesandbox-prefix-not-local' => '指定したサンドボックス接頭辞はローカルではありません。',
	'templatesandbox-page-or-revid' => 'ページ名または版 ID を入力してください。',
	'templatesandbox-editform-need-title' => 'このテンプレートで別のページのプレビューを表示するには、そのページ名を指定してください。',
	'templatesandbox-editform-invalid-title' => 'プレビューに指定したページ名は無効です。',
	'templatesandbox-editform-title-not-exists' => 'プレビューに指定したページは存在しません。',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'templatesandbox' => 'თარგის ქვიშის დაფა',
	'templatesandbox-suffix' => 'ქვიშის დაფა',
	'templatesandbox-legend' => 'თარგის ქვიშის დაფა',
	'templatesandbox-prefix-label' => 'ქვიშის დაფის პრეფიქსი:',
	'templatesandbox-submit' => 'ხილვა',
	'templatesandbox-title-output' => 'თარგის ქვიშის დაფა: $1',
	'templatesandbox-editform-legend' => 'გვერდის წინასწარი გადახედვა ამ თარგით',
	'templatesandbox-editform-page-label' => 'გვერდის სათაური:',
	'templatesandbox-editform-view-label' => 'წინასწარი გადახედვა',
	'templatesandbox-preview' => '$2-ის წინასწარი გადახედვა',
);

/** Korean (한국어)
 * @author 아라
 */
$messages['ko'] = array(
	'templatesandbox' => '틀연습장',
	'templatesandbox-desc' => '연습장에 틀을 포함하는 [[Special:TemplateSandbox|문서 렌더]]',
	'templatesandbox-suffix' => '연습장',
	'templatesandbox-legend' => '틀 연습장',
	'templatesandbox-prefix-label' => '연습장 접두어:',
	'templatesandbox-page-label' => '문서 렌더:',
	'templatesandbox-revid-label' => '판 렌더:',
	'templatesandbox-text-label' => '위키텍스트 렌더:',
	'templatesandbox-submit' => '보기',
	'templatesandbox-title-output' => '틀연습장: $1',
	'templatesandbox-editform-legend' => '이 틀로 문서 미리 보기',
	'templatesandbox-editform-page-label' => '문서 제목:',
	'templatesandbox-editform-view-label' => '미리 보기',
	'templatesandbox-preview' => '$2의 미리 보기',
	'templatesandbox-previewnote' => "'''이 화면은 [[:$1]]의 미리 보기입니다.'''
편집한 내용은 아직 저장하지 않았습니다!",
	'templatesandbox-invalid-title' => '지정한 제목이 잘못되었습니다.',
	'templatesandbox-title-not-exists' => '지정한 제목이 존재하지 않습니다.',
	'templatesandbox-revision-not-exists' => '지정한 판이 존재하지 않습니다.',
	'templatesandbox-invalid-prefix' => '지정한 연습장 접두어가 잘못되었습니다.',
	'templatesandbox-prefix-not-local' => '지정한 연습장 접두어가 로컬이 아닙니다.',
	'templatesandbox-page-or-revid' => '문서나 판id 중 하나가 필요합니다.',
	'templatesandbox-editform-need-title' => '이 틀로 다른 문서를 미리 보려면 문서 제목을 지정해야 합니다.',
	'templatesandbox-editform-invalid-title' => '미리 보기 위해 지정한 제목이 잘못되었습니다.',
	'templatesandbox-editform-title-not-exists' => '미리 보기 위해 지정한 제목이 존재하지 않습니다.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'templatesandbox' => 'Schabloun-Sandkëscht',
	'templatesandbox-suffix' => 'Sandkëscht',
	'templatesandbox-legend' => 'Schabloun vun der Sandkëscht',
	'templatesandbox-submit' => 'Weisen',
	'templatesandbox-editform-page-label' => 'Titel vun der Säit:',
	'templatesandbox-editform-view-label' => 'Kucken ouni ofzespäicheren',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'templatesandbox' => 'ШаблонскиПесочник',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Испишува страница]] превметнувајќи шаблони од песочник',
	'templatesandbox-suffix' => 'песочник',
	'templatesandbox-legend' => 'Шаблонски песочник',
	'templatesandbox-text' => 'Можете да изберете збир шаблони зачувани во вашиот песочник, користејќи се со соодветен префикс за песочник. На пример, ако сакате да пергледате верзија на {{ns:Template}}:Test што сте ја зачувале како „{{ns:User}}:Foo/sandbox/{{ns:Template}}:Test“, користете „{{ns:User}}:Foo/sandbox“ како префикс.',
	'templatesandbox-prefix-label' => 'Префикс на песочникот:',
	'templatesandbox-page-label' => 'Страница за испис:',
	'templatesandbox-revid-label' => 'Ревизија на исписот:',
	'templatesandbox-text-label' => 'Викитекст на исписот:',
	'templatesandbox-submit' => 'Преглед',
	'templatesandbox-title-output' => 'ШаблонскиПесочник: $1',
	'templatesandbox-editform-legend' => 'Преглед на страница со шаблонов',
	'templatesandbox-editform-page-label' => 'Наслов на страницата:',
	'templatesandbox-editform-view-label' => 'Прик. преглед',
	'templatesandbox-preview' => 'Преглед на $2',
	'templatesandbox-previewnote' => "'''Имајте предвид дека ова е само преглед на [[:$1]].'''
Промените сè уште не се зачувани!",
	'templatesandbox-invalid-title' => 'Наведениот наслов е неважечки.',
	'templatesandbox-title-not-exists' => 'Наведениот наслов не постои.',
	'templatesandbox-revision-not-exists' => 'Наведената ревизија не постои.',
	'templatesandbox-invalid-prefix' => 'Наведениот префикс за песочник не постои.',
	'templatesandbox-prefix-not-local' => 'Наведениот префикс за песочник не е локален.',
	'templatesandbox-page-or-revid' => 'Мора да внесете наслов на страницата или број (назнака) на ревизијата.',
	'templatesandbox-editform-need-title' => 'За да прегледате друга страница со шаблонов, мора да наведете наслов.',
	'templatesandbox-editform-invalid-title' => 'Наведениот наслов за преглед е неважечки.',
	'templatesandbox-editform-title-not-exists' => 'Наведениот наслов за преглед не постои.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'templatesandbox' => 'Kotak pasir templat',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Mempersembahkan halaman]] yang mentransklusikan templat dari kotak pasir',
	'templatesandbox-suffix' => 'kotak pasir',
	'templatesandbox-legend' => 'Kotak pasir templat',
	'templatesandbox-text' => 'Anda boleh memilih satu set templat yang tersimpan dalam ruang kotak pasir anda dengan menggunakan awalan kotak pasir yang bertepatan.  Misalnya, jika anda ingin mempralihatkan versi {{ns:Template}}:Test yang telah anda simpan sebagai "{{ns:User}}:Foo/sandbox/{{ns:Template}}:Test", gunakan "{{ns:User}}:Foo/sandbox" sebagai awalan.',
	'templatesandbox-prefix-label' => 'Awalan kotak pasir:',
	'templatesandbox-page-label' => 'Halaman persembahan:',
	'templatesandbox-revid-label' => 'Semakan persembahan:',
	'templatesandbox-text-label' => 'Teks wiki persembahan:',
	'templatesandbox-submit' => 'Paparkan',
	'templatesandbox-title-output' => 'Kotak pasir templat: $1',
	'templatesandbox-editform-legend' => 'Pralihatkan halaman ini dengan templat ini',
	'templatesandbox-editform-page-label' => 'Tajuk halaman:',
	'templatesandbox-editform-view-label' => 'Paparkan Pralihat',
	'templatesandbox-preview' => 'Pralihat $2',
	'templatesandbox-previewnote' => "'''Ingat, ini hanya pralihat [[:$1]].'''
Suntngan anda belum disimpan!",
	'templatesandbox-invalid-title' => 'Tajuk yang anda nyatakan tidak sah.',
	'templatesandbox-title-not-exists' => 'Tajuk yang anda nyatakan tidak wujud.',
	'templatesandbox-revision-not-exists' => 'Semakan yang anda nyatakan tidak wujud.',
	'templatesandbox-invalid-prefix' => 'Awalan kotak pasir yang anda nyatakan tidak sah.',
	'templatesandbox-prefix-not-local' => 'Awalan kotak pasir yang anda nyatakan tidak setempat.',
	'templatesandbox-page-or-revid' => 'Anda mesti memasukkan sama ada tajuk halaman atau nombor ID semakan.',
	'templatesandbox-editform-need-title' => 'Untuk mempralihatkan satu lagi halaman dengan templat ini, tajuk halaman mesti dinyatakan.',
	'templatesandbox-editform-invalid-title' => 'Halaman yang anda nyatakan untuk pratayang adalah tidak sah.',
	'templatesandbox-editform-title-not-exists' => 'Halaman yang anda nyatakan untuk pralihat tidak wujud.',
);

/** Dutch (Nederlands)
 * @author Romaine
 * @author Siebrand
 */
$messages['nl'] = array(
	'templatesandbox' => 'Sjabloonzandbak',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Rendert een pagina]] door sjablonen uit een testomgeving te transcluderen',
	'templatesandbox-suffix' => 'zandbak',
	'templatesandbox-legend' => 'Sjabloonzandbak',
	'templatesandbox-text' => 'U kunt een verzameling sjablonen kiezen om in uw zandbakruimte op te slaan door het bijbehorende zandbakvoorvoegsel te gebruiken. Als u bijvoorbeeld een voorvertoning wilt zien van {{ns:Template}}:Test dat u hebt opgeslagen als "{{ns:User}}:Gebruikersnaam/zandbak/{{ns:Template}}:Test", gebruik dan "{{ns:User}}:Gebruikersnaam/zandbak" als het voorvoegsel.',
	'templatesandbox-prefix-label' => 'Zandbakvoorvoegsel:',
	'templatesandbox-page-label' => 'Te renderen pagina:',
	'templatesandbox-revid-label' => 'Te renderen versie:',
	'templatesandbox-text-label' => 'Te renderen wikitekst:',
	'templatesandbox-submit' => 'Bekijken',
	'templatesandbox-title-output' => 'Sjabloonzandbak: $1',
	'templatesandbox-editform-legend' => 'Voorvertoning weergeven met deze sjabloon',
	'templatesandbox-editform-page-label' => 'Paginanaam:',
	'templatesandbox-editform-view-label' => 'Voorvertoning weergeven',
	'templatesandbox-preview' => 'Voorvertoning van $2',
	'templatesandbox-previewnote' => "'''Dit is een voorvertoning van [[:$1]].'''
Uw wijzigingen zijn nog niet opgeslagen!",
	'templatesandbox-invalid-title' => 'De opgegeven pagina is ongeldig.',
	'templatesandbox-title-not-exists' => 'De titel die u hebt opgegeven bestaat niet.',
	'templatesandbox-revision-not-exists' => 'De versie die u hebt opgegeven bestaat niet.',
	'templatesandbox-invalid-prefix' => 'Het zandbakvoorvoegsel dat u hebt opgegeven is ongeldig.',
	'templatesandbox-prefix-not-local' => 'Het zandbakvoorvoegsel dat u hebt opgegeven is niet lokaal.',
	'templatesandbox-page-or-revid' => 'U moet een paginanaam of versienummer opgeven.',
	'templatesandbox-editform-need-title' => 'Om een andere pagina met deze sjabloon te bekijken, moet een paginanaam opgegeven worden.',
	'templatesandbox-editform-invalid-title' => 'De opgegeven pagina voor de voorvertoning is ongeldig.',
	'templatesandbox-editform-title-not-exists' => 'De opgegeven pagina voor de voorvertoning bestaat niet.',
);

/** Norwegian Nynorsk (norsk (nynorsk)‎)
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'templatesandbox-editform-legend' => 'Førehandsvis ei side med denne malen',
	'templatesandbox-editform-page-label' => 'Sidetittel:',
	'templatesandbox-editform-view-label' => 'Førehandsvis',
	'templatesandbox-preview' => 'Førehandsvising av $2',
	'templatesandbox-previewnote' => "'''Hugs at dette berre er ei førehandsvising av [[:$1]].'''
Endringane dine er ikkje lagra enno!",
);

/** Polish (polski)
 * @author Matma Rex
 * @author Odie2
 * @author WTM
 */
$messages['pl'] = array(
	'templatesandbox' => 'Szablonowy brudnopis',
	'templatesandbox-suffix' => 'brudnopis',
	'templatesandbox-legend' => 'Szablonowy brudnopis',
	'templatesandbox-prefix-label' => 'Prefiks do brudnopisu:',
	'templatesandbox-page-label' => 'Przetestuj stronę:',
	'templatesandbox-revid-label' => 'Przetestuj wersję:',
	'templatesandbox-text-label' => 'Przetestuj wikitekst:',
	'templatesandbox-submit' => 'Podgląd',
	'templatesandbox-title-output' => 'Szablonowy brudnopis: $1',
	'templatesandbox-editform-legend' => 'Podgląd strony z tym szablonem',
	'templatesandbox-editform-page-label' => 'Tytuł strony:',
	'templatesandbox-editform-view-label' => 'Pokaż podgląd',
	'templatesandbox-preview' => 'Podgląd strony $2',
	'templatesandbox-previewnote' => "'''To jest tylko podgląd strony [[:$1]].'''
Zmiany nie zostały jeszcze zapisane!",
	'templatesandbox-invalid-title' => 'Wprowadzony tytuł jest nieprawidłowy.',
	'templatesandbox-title-not-exists' => 'Podany tytuł nie istnieje.',
	'templatesandbox-revision-not-exists' => 'Wybrana wersja nie istnieje.',
	'templatesandbox-invalid-prefix' => 'Podany prefiks do brudnopisu nie istnieje.',
	'templatesandbox-prefix-not-local' => 'Podany prefiks do brudnopisu nie jest lokalny.',
	'templatesandbox-page-or-revid' => 'Musisz wpisać nazwę strony albo numer ID wersji.',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'templatesandbox-submit' => 'کتل',
	'templatesandbox-editform-page-label' => 'مخ سرليک:',
);

/** Portuguese (português)
 * @author Helder.wiki
 * @author Lijealso
 */
$messages['pt'] = array(
	'templatesandbox' => 'Teste de predefinições',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Renderiza uma página]] transcluindo as predefinições a partir de uma página de testes',
	'templatesandbox-suffix' => 'Testes',
	'templatesandbox-legend' => 'Página para testar predefinições',
	'templatesandbox-text' => 'Pode escolher um conjunto de predefinições salvas em sua página de testes pessoal fornecendo o prefixo apropriado da página de testes. Por exemplo, se desejar pré-visualizar uma versão de {{ns:Template}}:Teste que salvou sob o título "{{ns:User}}:Foo/Testes/{{ns:Template}}:Teste", utilize "{{ns:User}}:Foo/Testes" como prefixo.',
	'templatesandbox-prefix-label' => 'Prefixo da página de testes:',
	'templatesandbox-page-label' => 'Renderizar a página:',
	'templatesandbox-revid-label' => 'Renderizar a revisão:',
	'templatesandbox-text-label' => 'Renderizar o código wiki:',
	'templatesandbox-submit' => 'Ver',
	'templatesandbox-title-output' => 'Página para testar predefinições: $1',
	'templatesandbox-editform-legend' => 'Pré-visualizar a página com esta predefinição',
	'templatesandbox-editform-page-label' => 'Título da página:',
	'templatesandbox-editform-view-label' => 'Pré-Visualizar',
	'templatesandbox-preview' => 'Pré-visualização de $2',
	'templatesandbox-previewnote' => "'''Lembre-se que esta é apenas uma antevisão do resultado de [[:$1]].'''
As modificações ainda não foram gravadas!",
	'templatesandbox-invalid-title' => 'O título especificado é inválido.',
	'templatesandbox-title-not-exists' => 'O título que especificou não existe.',
	'templatesandbox-revision-not-exists' => 'A revisão que especificou não existe.',
	'templatesandbox-invalid-prefix' => 'O prefixo que especificou para a página de testes é inválido',
	'templatesandbox-prefix-not-local' => 'O prefixo que especificou para a página de testes não é local.',
	'templatesandbox-page-or-revid' => 'Você deve digitar um título de página ou de um número de ID de revisão.',
	'templatesandbox-editform-need-title' => 'Para pré-visualizar outra página com esta predefinição, é preciso especificar um título.',
	'templatesandbox-editform-invalid-title' => 'O título que você especificou para pré-visualização é inválido.',
	'templatesandbox-editform-title-not-exists' => 'O título que você especificou para pré-visualizar não existe.',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'templatesandbox' => 'TemplateSandbox',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Afișează o pagină randată]] folosind formatele prezente într-o cutie cu nisip',
	'templatesandbox-suffix' => 'cutie cu nisip',
	'templatesandbox-legend' => 'Cutie cu nisip pentru formate',
	'templatesandbox-prefix-label' => 'Prefixul cutiei cu nisip:',
	'templatesandbox-page-label' => 'Pagina de randat:',
	'templatesandbox-revid-label' => 'Versiunea de randat:',
	'templatesandbox-text-label' => 'Text wiki de randat:',
	'templatesandbox-submit' => 'Vizualizare',
	'templatesandbox-title-output' => 'TemplateSandbox: $1',
	'templatesandbox-editform-legend' => 'Previzualizare pagină cu acest format',
	'templatesandbox-editform-page-label' => 'Titlul paginii:',
	'templatesandbox-editform-view-label' => 'Arată previzualizarea',
	'templatesandbox-preview' => 'Previzualizare $2',
	'templatesandbox-previewnote' => "'''Țineți cont că aceasta este doar o previzualizare a paginii [[:$1]].'''
Modificările dumneavoastră nu au fost încă salvate!",
	'templatesandbox-invalid-title' => 'Titlul specificat nu este corect.',
	'templatesandbox-title-not-exists' => 'Titlul specificat nu există.',
	'templatesandbox-revision-not-exists' => 'Versiunea specificată nu există.',
	'templatesandbox-invalid-prefix' => 'Prefixul cutiei cu nisip specificat nu este corect.',
	'templatesandbox-prefix-not-local' => 'Prefixul cutiei cu nisip specificat nu este local.',
	'templatesandbox-page-or-revid' => 'Este obligatorie fie pagina, fie codul versiunii.', # Fuzzy
	'templatesandbox-editform-need-title' => 'Pentru a previzualiza o altă pagină cu acest format, trebuie specificat un alt titlu de pagină.',
	'templatesandbox-editform-invalid-title' => 'Titlul specificat pentru previzualizare nu este corect.',
	'templatesandbox-editform-title-not-exists' => 'Titlul specificat pentru previzualizare nu există.',
);

/** Russian (русский)
 * @author Anonim.one
 * @author Eleferen
 * @author NBS
 * @author Olli
 */
$messages['ru'] = array(
	'templatesandbox' => 'TemplateSandbox',
	'templatesandbox-editform-legend' => 'Предварительный просмотр страницы с использованием этого шаблона',
	'templatesandbox-editform-page-label' => 'Название страницы:',
	'templatesandbox-editform-view-label' => 'Предварительный просмотр',
	'templatesandbox-previewnote' => "'''Помните, что это только предварительный просмотр страницы [[:$1]].''' Ваши изменения в шаблоне ещё не были сохранены!",
	'templatesandbox-editform-need-title' => 'Чтобы просмотреть другую страницу с использованием этого шаблона, название страницы должно быть указано.',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'templatesandbox-submit' => 'දසුන',
);

/** Swedish (svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'templatesandbox' => 'Mallsandlåda',
	'templatesandbox-suffix' => 'sandlåda',
	'templatesandbox-legend' => 'Mallsandlåda',
	'templatesandbox-submit' => 'Visa',
	'templatesandbox-title-output' => 'Mallsandlåda: $1',
	'templatesandbox-editform-legend' => 'Förhandsgranska sida med denna mall',
	'templatesandbox-editform-page-label' => 'Sidtitel:',
	'templatesandbox-editform-view-label' => 'Visa förhandsgranskning',
	'templatesandbox-preview' => 'Förhandsvisning av $2',
	'templatesandbox-previewnote' => "'''Kom ihåg att detta bara är en förhandsvisning av [[:$1]].'''
Dina ändringar har ännu inte sparats!",
	'templatesandbox-invalid-title' => 'Titeln du angav är ogiltig.',
	'templatesandbox-title-not-exists' => 'Titeln du angav finns inte.',
	'templatesandbox-revision-not-exists' => 'Versionen du angav finns inte.',
	'templatesandbox-invalid-prefix' => 'Sandlådeprefixet du angav finns inte.',
	'templatesandbox-prefix-not-local' => 'Sandlådeprefixet du angav är inte lokal.',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'templatesandbox-editform-page-label' => 'పేజీ శీర్షిక:',
	'templatesandbox-editform-view-label' => 'మునుజూపును చూపించు',
	'templatesandbox-preview' => '$2 యొక్క మునుజూపు',
);

/** Ukrainian (українська)
 * @author Base
 * @author DixonD
 * @author Wizardist
 * @author Ата
 */
$messages['uk'] = array(
	'templatesandbox' => 'Пісочниця шаблона',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Відображає сторінку]] із включеним шаблоном з пісочниці',
	'templatesandbox-suffix' => 'пісочниця',
	'templatesandbox-legend' => 'Пісочниця шаблона',
	'templatesandbox-prefix-label' => 'Префікс пісочниці:',
	'templatesandbox-page-label' => 'Відобразити сторінку:',
	'templatesandbox-revid-label' => 'Відобразити версію:',
	'templatesandbox-text-label' => 'Відобразити вікітекст:',
	'templatesandbox-submit' => 'Перегляд',
	'templatesandbox-title-output' => 'Пісочниця шаблона: $1',
	'templatesandbox-editform-legend' => 'Попередній перегляд сторінки з цим шаблоном',
	'templatesandbox-editform-page-label' => 'Заголовок сторінки:',
	'templatesandbox-editform-view-label' => 'Попередній перегляд',
	'templatesandbox-preview' => 'Попередній перегляд $2',
	'templatesandbox-previewnote' => "'''Це лише попередній перегляд [[:$1]].'''
Ваші зміни ще не збережено!",
	'templatesandbox-invalid-title' => 'Вказана назва неприпустима.',
	'templatesandbox-title-not-exists' => 'Вказана назва не існує.',
	'templatesandbox-revision-not-exists' => 'Вказаної версії не існує.',
	'templatesandbox-invalid-prefix' => 'Вказаний префікс пісочниці некоректний.',
	'templatesandbox-prefix-not-local' => 'Вказаний префікс пісочниці не є локальним.',
	'templatesandbox-page-or-revid' => 'Ви повинні ввести назву сторінки або ID-номер версії.',
	'templatesandbox-editform-need-title' => 'Потрібно вказати заголовок сторінки для перегляду іншої сторінки з цим шаблоном.',
	'templatesandbox-editform-invalid-title' => 'Вказаний заголовок для попереднього перегляду некоректний.',
	'templatesandbox-editform-title-not-exists' => 'Вказаний заголовок для попереднього перегляду не існує.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'templatesandbox' => 'Chỗ thử bản mẫu',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Kết xuất một trang]] bằng cách lấy các bản mẫu từ chỗ thử',
	'templatesandbox-suffix' => 'chỗ thử',
	'templatesandbox-legend' => 'Chỗ thử bản mẫu',
	'templatesandbox-prefix-label' => 'Tiền tố chỗ thử:',
	'templatesandbox-page-label' => 'Kết xuất trang:',
	'templatesandbox-revid-label' => 'Kết xuất phiên bản:',
	'templatesandbox-text-label' => 'Kết xuất văn bản wiki:',
	'templatesandbox-submit' => 'Xem',
	'templatesandbox-title-output' => 'Chỗ thử bản mẫu: $1',
	'templatesandbox-editform-legend' => 'Xem thử trang dùng bản mẫu này',
	'templatesandbox-editform-page-label' => 'Tên trang:',
	'templatesandbox-editform-view-label' => 'Xem thử',
	'templatesandbox-preview' => 'Xem thử $2',
	'templatesandbox-previewnote' => "'''Đây chỉ mới là xem thử [[:$1]].'''
Các thay đổi của bạn vẫn chưa được lưu!",
	'templatesandbox-invalid-title' => 'Tên trang chỉ định không hợp lệ.',
	'templatesandbox-title-not-exists' => 'Tên trang chỉ định không tồn tại.',
	'templatesandbox-revision-not-exists' => 'Phiên bản chỉ định không tồn tại.',
	'templatesandbox-invalid-prefix' => 'Tiền tố chỗ thử chỉ định không hợp lệ.',
	'templatesandbox-prefix-not-local' => 'Tiền tố chỗ thử chỉ định không có trực thuộc wiki này.',
	'templatesandbox-page-or-revid' => 'Cần chỉ định trang hoặc ID của phiên bản.', # Fuzzy
	'templatesandbox-editform-need-title' => 'Cần chỉ định một tên trang để xem thử trang khác dùng bản mẫu này.',
	'templatesandbox-editform-invalid-title' => 'Tên trang được chỉ định để xem thử không hợp lệ.',
	'templatesandbox-editform-title-not-exists' => 'Tên trang được chỉ định để xem thử không tồn tại.',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'templatesandbox' => 'מוסטער זאמדקאסטן',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|ווייזט א בלאט]] אריבערשליסנדיק מוסטערן פון א זאמדקאסטן',
	'templatesandbox-suffix' => 'זאמדקאסטן',
	'templatesandbox-legend' => 'מוסטער זאמדקאסטן',
	'templatesandbox-prefix-label' => 'זאמדקאסטן פרעפיקס:',
	'templatesandbox-page-label' => 'ווייזן בלאט:',
	'templatesandbox-revid-label' => 'ווײַזן רעוויזיע:',
	'templatesandbox-text-label' => 'ווײַזן וויקיטעקסט:',
	'templatesandbox-submit' => 'ווייזן',
	'templatesandbox-title-output' => 'מוסטער זאמדקאסטן: $1',
	'templatesandbox-editform-legend' => 'פארויסשטעלן בלאט מיט דעם מוסטער',
	'templatesandbox-editform-page-label' => 'בלאט קעפל:',
	'templatesandbox-editform-view-label' => 'ווייזן פארויסשטעלונג',
	'templatesandbox-preview' => 'פארויסשטעלונג פון $2',
	'templatesandbox-previewnote' => "'''געדענקט אז דאס איז נאָר אין אַ פֿאָרויסשטעלונג פון [[:$1]].'''
אייערע ענדערונגען זענען נאָך נישט געהיט!",
	'templatesandbox-invalid-title' => 'דאס קעפל איר האט ספעציפירט איז אומגילטיק.',
	'templatesandbox-title-not-exists' => 'דאס קעפל וואס איר האט ספעציפֿירט עקזיסטירט נישט.',
	'templatesandbox-revision-not-exists' => 'די רעוויזיע וואס איר האט ספעציפֿירט עקזיסטירט נישט.',
	'templatesandbox-invalid-prefix' => 'דער זאמדקאסטן פרעפיקס איר האט ספעציפירט איז אומגילטיק.',
	'templatesandbox-prefix-not-local' => 'דער זאמדקאסטן פרעפיקס איר האט ספעציפירט איז נישט לאקאל.',
	'templatesandbox-page-or-revid' => 'איר דארפט אריינגעבן אדער א בלאט קעפל אדער א רעוויזיע אידענטיפיצירן נומער.',
	'templatesandbox-editform-need-title' => 'כדי פארויסשטעלן אן אנדער בלאט מיט דעם מוסטער, דארפט איר ספעציפירן א בלאט קעפל.',
	'templatesandbox-editform-invalid-title' => 'דאס קעפל וואס איר האט ספעציפירט פארויסצושטעלן איז אומגילטיק.',
	'templatesandbox-editform-title-not-exists' => 'דאס קעפל וואס איר האט ספעציפירט פארויסצושטעלן עקזיסטירט נישט.',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Shizhao
 */
$messages['zh-hans'] = array(
	'templatesandbox' => '模板沙盒',
	'templatesandbox-suffix' => '沙盒',
	'templatesandbox-legend' => '模板沙盒',
	'templatesandbox-prefix-label' => '沙盒前缀：',
	'templatesandbox-page-label' => 'Render page:',
	'templatesandbox-submit' => '查看',
	'templatesandbox-title-output' => '模板沙盒：$1',
	'templatesandbox-editform-legend' => '预览使用本模板的页面',
	'templatesandbox-editform-page-label' => '页面标题：',
	'templatesandbox-editform-view-label' => '显示预览',
	'templatesandbox-preview' => '$2的预览',
	'templatesandbox-previewnote' => "'''请记住这仅为[[:$1]]的预览。'''
您的更改还未保存！",
	'templatesandbox-invalid-title' => '你指定的标题无效。',
	'templatesandbox-title-not-exists' => '你指定的标题不存在。',
	'templatesandbox-editform-need-title' => '要预览使用本模板的其他页面，必须指定一个页面标题，',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Justincheng12345
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'templatesandbox' => '模版沙盒',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|在頁面]]套用沙盒的模版',
	'templatesandbox-suffix' => '沙盒',
	'templatesandbox-legend' => '模版沙盒',
	'templatesandbox-prefix-label' => '沙盒前綴：',
	'templatesandbox-page-label' => '呈現頁面：',
	'templatesandbox-revid-label' => '呈現修訂：',
	'templatesandbox-text-label' => '呈現wiki代碼：',
	'templatesandbox-submit' => '檢視',
	'templatesandbox-title-output' => '模版沙盒：$1',
	'templatesandbox-editform-legend' => '在頁面預覽此模版',
	'templatesandbox-editform-page-label' => '頁面標題：',
	'templatesandbox-editform-view-label' => '顯示預覽',
	'templatesandbox-preview' => '$2的預覽',
	'templatesandbox-previewnote' => "'''請記住這只是[[:$1]]的預覽。'''
您的更改尚未儲存！",
	'templatesandbox-invalid-title' => '所指定標題無效。',
	'templatesandbox-title-not-exists' => '所指定的標題不存在。',
	'templatesandbox-revision-not-exists' => '所指定的修訂不存在。',
	'templatesandbox-invalid-prefix' => '所指定的沙盒前綴無效。',
	'templatesandbox-prefix-not-local' => '所指定的沙盒前綴並非本地。',
	'templatesandbox-page-or-revid' => '您必需輸入一個頁面標題或版本ID號碼。',
	'templatesandbox-editform-need-title' => '在另一頁面上預覽此模版，請指定該頁面標題。',
	'templatesandbox-editform-invalid-title' => '所指定的預覽標題無效。',
	'templatesandbox-editform-title-not-exists' => '所指定的預覽標題不存在。',
);
