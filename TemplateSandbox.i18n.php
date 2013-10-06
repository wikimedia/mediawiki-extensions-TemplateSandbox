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
	'templatesandbox-text' => 'You can choose a set of templates saved in your sandbox space by using an appropriate sandbox prefix.
For example, if you want to preview a version of {{ns:Template}}:Test that you have saved as "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Test", use "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}" as the prefix.',
	'templatesandbox-prefix-label' => 'Sandbox prefix:',
	'templatesandbox-page-label' => 'Render page:',
	'templatesandbox-revid-label' => 'Render revision:',
	'templatesandbox-text-label' => 'Render wikitext:',
	'templatesandbox-submit' => 'View',
	'templatesandbox-title-output' => 'Template sandbox: $1',

	'templatesandbox-editform-legend' => 'Preview page with this template',
	'templatesandbox-editform-text' => '',
	'templatesandbox-editform-page-label' => 'Page title:',
	'templatesandbox-editform-view-label' => 'Show preview',
	'templatesandbox-editform-helptext' => '',
	'templatesandbox-preview' => "Preview of $2",
	'templatesandbox-previewnote' => "'''Remember that this is only a preview of [[:$1]].'''
Your changes have not yet been saved!",

	'templatesandbox-invalid-title' => 'The title you specified is invalid.',
	'templatesandbox-title-not-exists' => 'The title you specified does not exist.',
	'templatesandbox-revision-not-exists' => 'The revision you specified does not exist.',
	'templatesandbox-invalid-prefix' => 'The sandbox prefix you specified is invalid.',
	'templatesandbox-prefix-not-local' => 'The sandbox prefix you specified is not local.',
	'templatesandbox-page-or-revid' => 'You must enter either a page title or a revision ID number.',

	'templatesandbox-editform-need-template' => 'To preview another page with this template, a template name must be specified.',
	'templatesandbox-editform-need-title' => 'To preview another page with this template, a page title must be specified.',
	'templatesandbox-editform-invalid-template' => 'The name of the template you specified is invalid.',
	'templatesandbox-editform-invalid-title' => 'The title you specified for previewing is invalid.',
	'templatesandbox-editform-title-not-exists' => 'The title you specified for previewing does not exist.',
);

/** Message documentation (Message documentation)
 * @author Brad Jorsch
 * @author Raymond
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'templatesandbox' => '{{doc-special|TemplateSandbox}}
The name of the [[mw:Extension:TemplateSandbox|TemplateSandbox extension]].',
	'templatesandbox-desc' => '{{desc|name=Template Sandbox|url=http://www.mediawiki.org/wiki/Extension:TemplateSandbox}}',
	'templatesandbox-suffix' => "Suffix added to the current user's userpage for the default sandbox prefix.

Used in:
* {{msg-mw|Templatesandbox-text}}.
{{Identical|Sandbox}}",
	'templatesandbox-legend' => 'Legend displayed on the input form.',
	'templatesandbox-text' => 'Used as header message of the form.

The form has fieldset label {{msg-mw|Templatesandbox-legend}}.

Refers to {{msg-mw|Templatesandbox-suffix}}.',
	'templatesandbox-prefix-label' => 'Label for the "prefix" input field.',
	'templatesandbox-page-label' => 'Label for the "page" input field on the special page.',
	'templatesandbox-revid-label' => 'Label for the "revid" input field on the special page.',
	'templatesandbox-text-label' => 'Label for the "text" input field on the special page.',
	'templatesandbox-submit' => 'Label for the submit button on the special page.
{{Identical|View}}',
	'templatesandbox-title-output' => 'Message used when displaying the parsed page title. $1 is the parsed page title.',
	'templatesandbox-editform-legend' => 'Text used for the legend on the editpage form.',
	'templatesandbox-editform-text' => 'Text displayed in the form on the editpage.',
	'templatesandbox-editform-page-label' => 'Label for the "page" input field on the editpage form.
{{Identical|Page title}}',
	'templatesandbox-editform-view-label' => 'Label for the submit button on the editpage form.
{{Identical|Show preview}}',
	'templatesandbox-editform-helptext' => 'Text displayed after the submit button on the editpage form.',
	'templatesandbox-preview' => 'Title of preview section when previewing another page using this template. Parameters:
* $1 - (Unused) the page being previewed
* $2 - the title set by the DISPLAYTITLE magic word',
	'templatesandbox-previewnote' => 'Message displayed when previewing another page using this template. Parameters:
* $1 - the page being previewed',
	'templatesandbox-invalid-title' => 'Error message displayed when the title specified in the special page is invalid.',
	'templatesandbox-title-not-exists' => 'Error message displayed when the title specified in the special page does not exist.',
	'templatesandbox-revision-not-exists' => 'Error message displayed when the rev_id specified in the special page does not exist.',
	'templatesandbox-invalid-prefix' => 'Error message displayed when the sandbox prefix specified in the special page is invalid.',
	'templatesandbox-prefix-not-local' => 'Error message displayed when the sandbox prefix specified in the special page is not local.',
	'templatesandbox-page-or-revid' => 'Error message displayed when neither a page title nor rev_id is given in the special page.',
	'templatesandbox-editform-need-template' => 'Error message displayed when no template name is given for the editpage form.

See also:
* {{msg-mw|Templatesandbox-editform-need-title}}',
	'templatesandbox-editform-need-title' => 'Error message displayed when no page title is given for the editpage form.

See also:
* {{msg-mw|Templatesandbox-editform-need-template}}',
	'templatesandbox-editform-invalid-template' => 'Error message displayed when the template name specified for the editpage form is invalid.',
	'templatesandbox-editform-invalid-title' => 'Error message displayed when the title specified for the editpage form is invalid.',
	'templatesandbox-editform-title-not-exists' => 'Error message displayed when the title specified for the editpage form does not exist.',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'templatesandbox' => 'Sjabloonsandput',
	'templatesandbox-desc' => "[[Special:TemplateSandbox|Vertoon 'n bladsy]] met sjablone vanaf 'n sandput af",
	'templatesandbox-suffix' => 'sandput',
	'templatesandbox-legend' => 'Sjabloonsandput',
	'templatesandbox-text' => 'U kan \'n versameling sjablone wat in u sandput gestoor is kies deur van \'n voorvoegsel gebruik te maak. 
As u byvoorbeeld \'n voorskou wil sien van {{ns:Template}}:Toets wat u gestoor het as "{{ns:User}}:Gebruikersnaam/sandput/{{ns:Template}}:Toets", gebruik dan "{{ns:User}}:Gebruikersnaam/sandput" as die voorvoegsel.',
	'templatesandbox-prefix-label' => 'Voorvoegsel vir sandput:',
	'templatesandbox-page-label' => 'Vertoon bladsy:',
	'templatesandbox-revid-label' => 'Vertoon weergawe:',
	'templatesandbox-text-label' => 'Vertoon wikiteks:',
	'templatesandbox-submit' => 'Wys',
	'templatesandbox-title-output' => 'Sjabloonsandput: $1',
	'templatesandbox-editform-legend' => 'Wys voorskou van hierdie sjabloon',
	'templatesandbox-editform-page-label' => 'Bladsynaam:',
	'templatesandbox-editform-view-label' => 'Wys voorskou',
	'templatesandbox-preview' => 'Voorskou van $2',
	'templatesandbox-previewnote' => "'''Onthou dat hierdie slegs 'n voorskou van [[:$1]] is.'''
U wysigings is nog nie gestoor nie!",
	'templatesandbox-invalid-title' => 'Die titel wat u verskaf het is ongeldig.',
	'templatesandbox-title-not-exists' => 'Die titel wat u verskaf het bestaan ​​nie.',
	'templatesandbox-revision-not-exists' => 'Die hersiening wat u verskaf het bestaan ​​nie.',
	'templatesandbox-invalid-prefix' => 'Die voorvoegsel wat u vir die sandput verskaf het is ongeldig.',
	'templatesandbox-prefix-not-local' => 'Die voorvoegsel wat u vir die sandput verskaf het is nie plaaslik nie.',
	'templatesandbox-page-or-revid' => "U moet 'n bladsynaam of weergawenommer verskaf.",
	'templatesandbox-editform-need-title' => "Om 'n ander voorskou van die sjabloon te sien moet 'n titel verskaf word.",
	'templatesandbox-editform-invalid-title' => "Die titel waarvan u 'n voorskou wil sien is ongeldig.",
	'templatesandbox-editform-title-not-exists' => "Die titel waarvan u 'n voorskou wil sien bestaan nie.",
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'templatesandbox' => 'ܩܠܒܐ ܕܣܢܕܘܩܐ ܕܚܠܐ',
	'templatesandbox-suffix' => 'ܣܢܕܘܩܐ ܕܚܠܐ',
	'templatesandbox-legend' => 'ܩܠܒܐ ܕܣܢܕܘܩܐ ܕܚܠܐ',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'templatesandbox' => 'Zona de prueba pa les plantíes',
	'templatesandbox-desc' => "[[Special:TemplateSandbox|Amuesa una páxina]] cola tresclusión de plantíes d'una zona de pruebes",
	'templatesandbox-suffix' => 'zona de pruebes',
	'templatesandbox-legend' => 'Zona de prueba pa les plantíes',
	'templatesandbox-text' => 'Pue esbillar un conxuntu de plantíes guardaes nel so espaciu de pruebes usando un prefixu apropiáu pa la zona de pruebes.
Por exemplu, si quier ver la vista previa d\'una versión de "{{ns:Template}}:Prueba" que guardó como "{{ns:User}}:Exemplu/{{int:templatesandbox-suffix}}/{{ns:Template}}:Prueba", utilice "{{ns:User}}:Exemplu/{{int:templatesandbox-suffix}}" como prefixu.',
	'templatesandbox-prefix-label' => 'Prefixu de la zona de pruebes:',
	'templatesandbox-page-label' => 'Representar la páxina:',
	'templatesandbox-revid-label' => 'Representar la revisión:',
	'templatesandbox-text-label' => 'Representar el testu wiki:',
	'templatesandbox-submit' => 'Ver',
	'templatesandbox-title-output' => 'Zona de prueba pa les plantíes: $1',
	'templatesandbox-editform-legend' => 'Vista previa de páxina con esta plantía',
	'templatesandbox-editform-page-label' => 'Títulu de la páxina:',
	'templatesandbox-editform-view-label' => 'Amosar vista previa',
	'templatesandbox-preview' => 'Vista previa de $2',
	'templatesandbox-previewnote' => "'''Alcuerdate de qu'esto ye sólo una vista previa de [[:$1]].'''
¡Los cambios entá nun se guardaron!",
	'templatesandbox-invalid-title' => 'El títulu que conseñasti nun ye válidu.',
	'templatesandbox-title-not-exists' => 'El títulu que conseñasti nun esiste.',
	'templatesandbox-revision-not-exists' => 'La revisión que conseñasti nun esiste.',
	'templatesandbox-invalid-prefix' => 'El prefixu de zona de pruebes que conseñasti ye inválidu.',
	'templatesandbox-prefix-not-local' => 'El prefixu de zona de pruebes que conseñasti nun ye llocal.',
	'templatesandbox-page-or-revid' => "Tienes d'escribir o'l títulu d'una páxina o un númberu ID de revisión.",
	'templatesandbox-editform-need-template' => "Pa la vista previa d'otra páxina con esta plantía, tien de conseñar un nome de plantía.",
	'templatesandbox-editform-need-title' => "Pa la vista previa d'otra páxina con esta plantía, tienes de conseñar un títulu de páxina.",
	'templatesandbox-editform-invalid-template' => "El nome de plantía qu'especificó nun ye válidu.",
	'templatesandbox-editform-invalid-title' => 'El títulu que conseñasti pa la vista previa ye inválidu.',
	'templatesandbox-editform-title-not-exists' => 'El títulu que conseñasti pa la vista previa nun esiste',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'templatesandbox' => 'Пясочніца для шаблёнаў',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Адлюстроўвае старонку]], уключыўшы на яе шаблён зь пясочніцы',
	'templatesandbox-suffix' => 'пясочніца',
	'templatesandbox-legend' => 'Пясочніца для шаблёнаў',
	'templatesandbox-text' => 'Вы можаце выбраць набор шаблёнаў, захаваных у вашай пясочніцы, скарыстаўшыя адпаведным прэфіксам. Напрыклад, калі вы хочаце праглядзець выгляд {{ns:Template}}:Тэст, які вы захавалі як «{{ns:User}}:Карыстач/{{int:templatesandbox-suffix}}/{{ns:Template}}:Тэст», скарыстайцеся прэфіксам «{{ns:User}}:Карыстач/{{int:templatesandbox-suffix}}».',
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
	'templatesandbox-page-or-revid' => 'Трэба пазначыць назву старонкі або нумар вэрсіі.',
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

/** Bengali (বাংলা)
 * @author Aftab1995
 */
$messages['bn'] = array(
	'templatesandbox-suffix' => 'খেলাঘর',
	'templatesandbox-legend' => 'টেমপ্লেট খেলাঘর',
	'templatesandbox-submit' => 'দেখাও',
	'templatesandbox-title-output' => 'টেমপ্লেট খেলাঘর: $1',
	'templatesandbox-editform-legend' => 'এই টেমপ্লেট দিয়ে পাতার প্রাকদর্শন',
	'templatesandbox-editform-page-label' => 'পাতার শিরোনাম:',
	'templatesandbox-editform-view-label' => 'প্রাকদর্শন দেখাও',
	'templatesandbox-preview' => '$2 এর প্রাকদর্শন',
	'templatesandbox-previewnote' => "'''মনে রাখবেন যে এটি শুধুমাত্র [[:$1]] এর একটি প্রাকদর্শন।'''
আপনার পরিবর্তনসমূহ এখনো সংরক্ষণ করা হয় নি!",
	'templatesandbox-invalid-title' => 'আপনার নির্দিষ্ট করা শিরোনাম অবৈধ।',
	'templatesandbox-title-not-exists' => 'আপনার নির্দিষ্ট করা শিরোনামটি বিদ্যমান নয়।',
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
	'templatesandbox-text' => "Podeu triar un conjunt de plantilles desades en el vostre espai de proves mitjançant l'ús d'un prefix de proves apropiat. 
Per exemple, si voleu previsualitzar una versió de {{ns:Template}}:Test que heu desat a «{{ns:User}}:Exemple/{{int:templatesandbox-suffix}}/{{ns:Template}}:Test», utilitzeu «{{ns:User}}:Exemple/{{int:templatesandbox-suffix}}» com a prefix.",
	'templatesandbox-prefix-label' => 'Prefix de proves:',
	'templatesandbox-page-label' => 'Pàgina a generar:',
	'templatesandbox-revid-label' => 'Revisió a generar:',
	'templatesandbox-text-label' => 'Text wiki a generar:',
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

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'templatesandbox-submit' => 'Хьажа',
	'templatesandbox-editform-legend' => 'Кеп лелош йолучу агӀоне хьалха муха ю хьажар',
	'templatesandbox-editform-page-label' => 'АгӀона цӀе:',
	'templatesandbox-editform-view-label' => 'Хьалха муха ю хьажар',
	'templatesandbox-preview' => 'Хьалха муха ю хьажар $2',
	'templatesandbox-previewnote' => "'''Хlара хьалх хьажар ду [[:$1]].''' Ахьа кепан бина хийцамаш хӀийнца дӀаязбина бац!",
);

/** Sorani Kurdish (کوردی)
 * @author Calak
 */
$messages['ckb'] = array(
	'templatesandbox-editform-legend' => 'پێشبینینی پەڕە لەگەڵ ئەم داڕێژەیە',
	'templatesandbox-editform-page-label' => 'سەردێڕی پەڕە:',
	'templatesandbox-editform-view-label' => 'پێشبینین نیشان بدە',
	'templatesandbox-editform-need-title' => 'بۆ نیشاندانی پێشبینینی پەڕەیەکی تر لەگەڵ ئەم داڕێژەیە، سەردێڕی پەڕەیەک دەبێ دیاری بکرێت.',
	'templatesandbox-editform-invalid-title' => 'ئەو سەردێڕەی بۆ پێشبینین دیاریت کردووە نادروستە.',
	'templatesandbox-editform-title-not-exists' => 'ئەو سەردێڕەی بۆ پێشبینین دیاریت کردووە بوونی نییە.',
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

/** Danish (dansk)
 * @author Byrial
 * @author Christian List
 */
$messages['da'] = array(
	'templatesandbox' => 'Skabelon-sandkasse',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Viser en side]] med brug af skabeloner fra en sandkase',
	'templatesandbox-suffix' => 'sandkasse',
	'templatesandbox-legend' => 'Skabelon-sandkasse',
	'templatesandbox-text' => 'Du kan vælge et sæt skabeloner gemt i dit sandkasse-område ved hjælp af et passende sandkasse-præfiks.
Hvis du for eksempel vil forhåndsvise en version af {{ns:Template}}:Test som du har gemt som "{{ns:User}}:Foo/{{int:templatesandbox-suffiks}}/{{ns:Template}}:Test", skal du bruge "{{ns:User}}:Foo/{{int:templatesandbox-suffiks}}" som præfiks.',
	'templatesandbox-prefix-label' => 'Sandkasse-præfiks:',
	'templatesandbox-page-label' => 'Vis side:',
	'templatesandbox-revid-label' => 'Vis version:',
	'templatesandbox-text-label' => 'Vis wikitekst:',
	'templatesandbox-submit' => 'Vis',
	'templatesandbox-title-output' => 'Skabelon-sandkasse: $1',
	'templatesandbox-editform-legend' => 'Forhåndvis en side med denne skabelon',
	'templatesandbox-editform-page-label' => 'Sidetitel:',
	'templatesandbox-editform-view-label' => 'Forhåndsvisning',
	'templatesandbox-preview' => 'Forhåndsvisning af $2',
	'templatesandbox-previewnote' => "'''Husk at dette kun er en forhåndsvisning af [[:$1]].'''
Dine ændringer er ikke blevet gemt endnu!",
	'templatesandbox-invalid-title' => 'Titlen du angav, er ugyldig.',
	'templatesandbox-title-not-exists' => 'Titlen du angav, findes ikke.',
	'templatesandbox-revision-not-exists' => 'Versionen du angav, findes ikke.',
	'templatesandbox-invalid-prefix' => 'Sandkasse-præfikset du angav, er ugyldigt.',
	'templatesandbox-prefix-not-local' => 'Sandkasse-præfikset du angav, er ikke lokalt.',
	'templatesandbox-page-or-revid' => 'Du skal angive enten en sidetitel eller et versions-id-nummer.',
	'templatesandbox-editform-need-title' => 'For at forhåndsvise en anden side med denne skabelon, skal du angive en sidetitel.',
	'templatesandbox-editform-invalid-title' => 'Titlen du angav for forhåndsvisning er ugyldig.',
	'templatesandbox-editform-title-not-exists' => 'Titlen du angav for forhåndsvisning findes ikke.',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'templatesandbox' => 'Vorlagenspielwiese',
	'templatesandbox-desc' => 'Ergänzt eine Spielwiese zum [[Special:TemplateSandbox|Rendern von Seiten]], die Vorlagen enthalten',
	'templatesandbox-suffix' => 'Spielwiese',
	'templatesandbox-legend' => 'Vorlagenspielwiese',
	'templatesandbox-text' => 'Du kannst einen Satz an Vorlagen auswählen, die in deinem Spielwiesenbereich gespeichert sind, indem du ein geeignetes Spielwiesenpräfix verwendest.
Wenn du beispielsweise eine Version von {{ns:Template}}:Test vorschauen möchtest, die du als „{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Test“ gespeichert hast, benutze als Präfix „{{ns:User}}:Foo/{{int:templatesandbox-suffix}}“.',
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
	'templatesandbox-editform-need-template' => 'Um eine Vorschau einer anderen Seite mit dieser Vorlage anzuzeigen, muss ein Vorlagenname angegeben werden.',
	'templatesandbox-editform-need-title' => 'Es muss ein Seitentitel angegeben werden, um eine Vorschau einer anderen Seite mit dieser Vorlage anzuzeigen.',
	'templatesandbox-editform-invalid-template' => 'Der angegebene Vorlagenname ist ungültig.',
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

/** Greek (Ελληνικά)
 * @author Glavkos
 * @author Protnet
 */
$messages['el'] = array(
	'templatesandbox' => 'Αμμοδοχείο προτύπου',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Αποδίδει μια σελίδα]] ενσωματώνοντας πρότυπα από ένα αμμοδοχείο',
	'templatesandbox-suffix' => 'αμμοδοχείο',
	'templatesandbox-legend' => 'Αμμοδοχείο προτύπου',
	'templatesandbox-text' => 'Μπορείτε να επιλέξετε μια ομάδα προτύπων που έχουν σωθεί στο χώρο του  αμμοδοχείου  σας χρησιμοποιώντας ένα κατάλληλο πρόθεμα αμμοδοχείου.  Για παράδειγμα, αν θέλετε να κάνετε προεπισκόπηση  σε μια έκδοση του {{ns:Template}}:Κάνετε τη δοκιμή με αυτό που έχετε αποθηκεύσει ως "{{ns:User}}:Foo/αμμοδοχείο/{{ns:Template}}:Δοκιμή", κάντε χρήση του  "{{ns:User}}:Foo/αμμοδοχείο" ως πρόθεμα.', # Fuzzy
	'templatesandbox-prefix-label' => 'Πρόθεμα αμμοδοχείου:',
	'templatesandbox-page-label' => 'Απόδοση σελίδας:',
	'templatesandbox-revid-label' => 'Απόδοση αναθεώρησης:',
	'templatesandbox-text-label' => 'Απόδοση βικικειμένου:',
	'templatesandbox-submit' => 'Προβολή',
	'templatesandbox-title-output' => 'Αμμοδοχείο προτύπου:$1',
	'templatesandbox-editform-legend' => 'Προεπισκόπιση σελίδας με αυτό το πρότυπο',
	'templatesandbox-editform-page-label' => 'Τίτλος σελίδας:',
	'templatesandbox-editform-view-label' => 'Εμφάνιση προεπισκόπησης',
	'templatesandbox-preview' => 'Προεπισκόπηση της $2',
	'templatesandbox-previewnote' => "'''Να θυμάστε ότι αυτό είναι μόνο μια προεπισκόπηση του [[:$1]].'''
Οι αλλαγές σας δεν έχουν ακόμα αποθηκευτεί!",
	'templatesandbox-invalid-title' => 'Ο τίτλος που καθορίσατε δεν είναι έγκυρος.',
	'templatesandbox-title-not-exists' => 'Ο τίτλος που καθορίσατε δεν υπάρχει.',
	'templatesandbox-revision-not-exists' => 'Η αναθεώρηση που καθορίσατε δεν υπάρχει.',
	'templatesandbox-invalid-prefix' => 'Το πρόθεμα αμμοδοχείου  που καθορίσατε είναι άκυρο.',
	'templatesandbox-prefix-not-local' => 'Το πρόθεμα αμμοδοχείου που καθορίσατε δεν είναι τοπικό.',
	'templatesandbox-page-or-revid' => 'Θα πρέπει να εισάγετε είτε έναν τίτλος σελίδας είτε τον αναγνωριστικό αριθμό μιας έκδοσης',
	'templatesandbox-editform-need-title' => 'Για να κάνετε προεπισκόπηση σε μια άλλη σελίδα με αυτό το πρότυπο, πρέπει να καθοριστεί ένας τίτλος σελίδας.',
	'templatesandbox-editform-invalid-title' => 'Ο τίτλος που καθορίσατε για την προεπισκόπηση είναι άκυρος.',
	'templatesandbox-editform-title-not-exists' => 'Ο τίτλος που καθορίσατε για προεπισκόπηση δεν υπάρχει.',
);

/** Esperanto (Esperanto)
 * @author ArnoLagrange
 */
$messages['eo'] = array(
	'templatesandbox' => 'Ŝablona provejo',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Montru paĝon]] uzante ŝablonojn el provejo',
	'templatesandbox-suffix' => 'Provejo',
	'templatesandbox-legend' => 'Ŝablona provejo',
	'templatesandbox-text' => 'Vi povas elekti aron da ŝablonoj konservitaj en via proveja spaco uzante taŭgan provejan prefikson. Ekzemple se vi volas antaŭvidi version de {{ns:Template}}:provo kiun vi konservis kiel "{{ns:User}}:uzantonomo/provejo/{{ns:Template}}:provo", uzu "{{ns:User}}:uzantonomo/provejo" kiel prefikso.', # Fuzzy
	'templatesandbox-prefix-label' => 'Proveja prefikso:',
	'templatesandbox-page-label' => 'Paĝaspekto:',
	'templatesandbox-revid-label' => 'Aspekto de la versio:',
	'templatesandbox-text-label' => 'Aspekto de la vikisintakso:',
	'templatesandbox-submit' => 'Vidi',
	'templatesandbox-title-output' => 'Ŝablona provejo: $1',
	'templatesandbox-editform-legend' => 'Antaŭvido de la paĝo kun tiu ŝablono',
	'templatesandbox-editform-page-label' => 'Titolo de la paĝo:',
	'templatesandbox-editform-view-label' => 'Montri antaŭrigardon',
	'templatesandbox-preview' => 'Antaŭvido de $2',
	'templatesandbox-previewnote' => "'''Memoru, ke ĉi tio estas nur antaŭrigardo de [[:$1]].''' 
Viaj ŝanĝoj ne ankoraŭ estas konservitaj!",
	'templatesandbox-invalid-title' => 'La titolo kiun vi enmetis estas malvalida.',
	'templatesandbox-title-not-exists' => 'La titolo kiun vi menciis ne ekzistas.',
	'templatesandbox-revision-not-exists' => 'La versio kiun vi menciis ne ekzistas.',
	'templatesandbox-invalid-prefix' => 'La proveja prefikso kiun vi menciis estas malvalida.',
	'templatesandbox-prefix-not-local' => 'La proveja prefikso kiun vi menciis ne estas loka.',
	'templatesandbox-page-or-revid' => 'Vi nepre enigu ĉu paĝtitolon, ĉu identigan numeron.',
	'templatesandbox-editform-need-title' => 'Por antaŭvidi alian paĝon kun ĉi tiu ŝablono, paĝtitolo nepre estu precizigita.',
	'templatesandbox-editform-invalid-title' => 'La titolo kiun vi menciis por antaŭrigardo estas malvalida.',
	'templatesandbox-editform-title-not-exists' => 'La titolo kiun vi menciis por antaŭrigardo ne ekzistas.',
);

/** Spanish (español)
 * @author Armando-Martin
 * @author Ovruni
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'templatesandbox' => 'Zona de pruebas para las plantillas',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Renderiza una página]] con la transclusión de las plantillas de una zona de pruebas',
	'templatesandbox-suffix' => 'zona de pruebas',
	'templatesandbox-legend' => 'Zona de pruebas para las plantillas',
	'templatesandbox-text' => 'Puedes eligir un conjunto de plantillas guardadas en tu zona de pruebas utilizando el prefijo apropiado.
Por ejemplo, si quieres ver una vista previa de una versión de "{{ns:Template}}:Prueba" que has guardado como "{{ns:User}}:Ejemplo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Prueba", utiliza "{{ns:User}}:Ejemplo/{{int:templatesandbox-suffix}}" como prefijo.',
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
	'templatesandbox-editform-invalid-template' => 'El nombre de la plantilla que ha especificado no es válido.',
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
	'templatesandbox-text' => 'Saad sobiva liivakastieesliite abil valida komplekti oma liivakastiruumis salvestatud malle.
Näiteks kui tahad näha malli {{ns:Template}}:Katse versiooni eelvaadet, mille oled salvestanud asukohta "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Katse", kasuta eesliidet "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}".',
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
	'templatesandbox-editform-need-template' => 'Et näha lehekülje eelvaadet selle malliga, tuleb määrata malli nimi.',
	'templatesandbox-editform-need-title' => 'Et näha teise lehekülje eelvaadet selle malliga, tuleb määrata lehekülje pealkiri.',
	'templatesandbox-editform-invalid-template' => 'Malli nimi, mille määrasid, on vigane.',
	'templatesandbox-editform-invalid-title' => 'Eelvaatuse jaoks määratud pealkiri on vigane.',
	'templatesandbox-editform-title-not-exists' => 'Eelvaatuse jaoks määratud pealkirja pole.',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Mjbmr
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'templatesandbox' => 'صفحهٔ تمرین الگو',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|پردازش یک صفحه]] تراگنجایش الگوها از یک صفحهٔ تمرین',
	'templatesandbox-suffix' => 'صفحهٔ تمرین',
	'templatesandbox-legend' => 'الگو صفحهٔ تمرین',
	'templatesandbox-text' => 'شما می‌توانید مجموعه‌ای از الگوهایی که در فضای تمرین شما ذخیره‌شده‌اند را با استفاده از پیشوندی مناسب انتخاب کنید. برای مثال اگر شما می‌خواهید پیش‌نمایشی از یک نسخهٔ {{ns:Template}}:آزمایشی که شما به‌عنوان «{{ns:User}}:فلان/صفحه تمرین/{{ns:Template}}:آزمایشی» داشته باشید، «{{ns:User}}:فلانی/صفحه تمرین» را به‌عنوان پیشوندی استفاده کنید.', # Fuzzy
	'templatesandbox-prefix-label' => 'پیشوند صفحهٔ تمرین:',
	'templatesandbox-page-label' => 'پردازش صفحه:',
	'templatesandbox-revid-label' => 'پردازش نسخه:',
	'templatesandbox-text-label' => 'پردازش ویکی‌متن:',
	'templatesandbox-submit' => 'مشاهده',
	'templatesandbox-title-output' => 'الگوی صفحه تمرین: $1',
	'templatesandbox-editform-legend' => 'پیش‌نمایش صفحه با این الگو',
	'templatesandbox-editform-page-label' => 'عنوان صفحه:',
	'templatesandbox-editform-view-label' => 'نمایش پیش‌نمایش',
	'templatesandbox-preview' => 'پیش‌نمایش $2',
	'templatesandbox-previewnote' => "'''به یاد داشته‌باشید که این فقط پیش‌نمایشی از [[:$1]] است.'''
تغییرات شما هنوز ذخیره نشده‌است!",
	'templatesandbox-invalid-title' => 'عنوانی که مشخص کرده‌اید نامعتبر است.',
	'templatesandbox-title-not-exists' => 'عنوانی که مشخص کرده‌اید وجود ندارد.',
	'templatesandbox-revision-not-exists' => 'نسخهٔ مشخص‌شدهٔ شما وجود ندارد.',
	'templatesandbox-invalid-prefix' => 'پیشوند صفحهٔ تمرین که شما مشخص کرده‌اید نامعتبر است.',
	'templatesandbox-prefix-not-local' => 'پشوند صفحهٔ تمرین مشخص‌شده توسط شما محلی نیست.',
	'templatesandbox-page-or-revid' => 'شما می‌بایست یک عنوان صفحه یا یک شمارهٔ شناسایی نسخه را وارد کنید.',
	'templatesandbox-editform-need-title' => 'برای پیش‌نمایش صفحه با این الگو، می‌بایست یک عنوان صفحه مشخص شده باشد.',
	'templatesandbox-editform-invalid-title' => 'عنوان مشخص‌شده توسط شما برای پیش‌نمایش نادرست است.',
	'templatesandbox-editform-title-not-exists' => 'عنوان مشخص‌شده توسط شما برای پیش‌نمایش ناموجود است.',
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
 * @author Seb35
 */
$messages['fr'] = array(
	'templatesandbox' => 'Bac à sable de modèle',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Afficher le rendu d’une page]] en utilisant les modèles présents dans un bac à sable',
	'templatesandbox-suffix' => 'bac à sable',
	'templatesandbox-legend' => 'Bac à sable de modèle',
	'templatesandbox-text' => 'Vous pouvez choisir un ensemble de modèles enregistrés dans votre espace de bac à sable à l\'aide d\'un préfixe de bac à sable approprié.
Par exemple, si vous souhaitez afficher un aperçu d\'une version de {{ns:Template}}:Test que vous avez enregistrée sous "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Test", utilisez "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}" comme préfixe.',
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
	'templatesandbox-editform-need-template' => 'Pour avoir un aperçu d’une autre page avec ce modèle, un nom de modèle doit être spécifié.',
	'templatesandbox-editform-need-title' => 'Pour afficher l’aperçu d’une autre page avec ce modèle, un titre de page doit être fourni.',
	'templatesandbox-editform-invalid-template' => 'Le nom du modèle que vous avez indiqué n’est pas valide.',
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
	'templatesandbox-text' => 'Pode elixir un conxunto de modelos gardados na súa zona de probas utilizando o prefixo axeitado.
Por exemplo, se quere ver unha vista previa dunha versión de "{{ns:Template}}:Proba" que gardou como "{{ns:User}}:Exemplo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Proba", empregue "{{ns:User}}:Exemplo/{{int:templatesandbox-suffix}}" como prefixo.',
	'templatesandbox-prefix-label' => 'Prefixo da zona de probas:',
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
	'templatesandbox-editform-need-template' => 'Para ollar a vista previa doutra páxina con este modelo, cómpre especificar o nome dun modelo.',
	'templatesandbox-editform-need-title' => 'Para ollar a vista previa doutra páxina con este modelo, cómpre especificar un título de páxina.',
	'templatesandbox-editform-invalid-template' => 'O nome de modelo especificado non é válido.',
	'templatesandbox-editform-invalid-title' => 'O título que especificou para a vista previa non é válido.',
	'templatesandbox-editform-title-not-exists' => 'O título que especificou para a vista previa non existe.',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author ערן
 * @author פוילישער
 * @author קיפודנחש
 */
$messages['he'] = array(
	'templatesandbox' => 'ארגז חול לתבניות',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|מציג דף]] שמכליל תבניות מארגז חול',
	'templatesandbox-suffix' => 'ארגז חול',
	'templatesandbox-legend' => 'ארגז חול לתבניות',
	'templatesandbox-text' => 'באפשרותך לבחור אוסף תבניות לשמירה בארגז החול שלך באמצעות שימוש בקידומת מתאימה. לדוגמה, לתצוגה מקדימה של גרסה של {{ns:Template}}:בדיקה ששמורה כ"{{ns:User}}:פלוני/{{int:templatesandbox-suffix}}/{{ns:Template}}:בדיקה", יש להשתמש בקידומת "{{ns:User}}:פלוני/{{int:templatesandbox-suffix}}".',
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
	'templatesandbox-editform-invalid-template' => 'השם של התבנית שציינת אינו חוקי.',
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

/** Indonesian (Bahasa Indonesia)
 * @author Iwan Novirion
 */
$messages['id'] = array(
	'templatesandbox-editform-legend' => 'Pratayang halaman dengan templat ini',
	'templatesandbox-editform-page-label' => 'Judul halaman:',
	'templatesandbox-editform-view-label' => 'Lihat pratayang',
	'templatesandbox-preview' => 'Pratayang dari halaman $2',
	'templatesandbox-previewnote' => "'''Ingat ini hanyalah pratayang dari halaman [[:$1]].'''
Perubahan yang Anda buat belum disimpan!",
	'templatesandbox-invalid-title' => 'Judul yang Anda masukkan tidak valid.',
	'templatesandbox-title-not-exists' => 'Judul yang Anda minta tidak ada.',
	'templatesandbox-editform-need-title' => 'Untuk melihat pratayang halaman yang menggunakan template ini, judul halamannya harus ada.',
	'templatesandbox-editform-title-not-exists' => 'Judul Anda yang anda masukkan untuk melihat pratayang tidak ada.',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'templatesandbox' => 'Pagipadasan ti plantilia',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Agipaay ti panid]] a mangilak-am kadagiti plantilia manipud ti pagipadasan',
	'templatesandbox-suffix' => 'pagipadasan',
	'templatesandbox-legend' => 'Pagipadasan ti plantilia',
	'templatesandbox-text' => 'Mabalinmo ti agpili kadagiti agasmang ti plantilia a naidulin idiay pagipadasam babaen ti panag-usar ti maitunos a pasaruno ti pagipadasan.
Kas pagarigan, no kayatmo a pagdasen ti bersion iti {{ns:Template}}:Subokan a naidulinmo a kas ti "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Subokan", usaren ti "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}" a kas ti pasaruno.',
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
	'templatesandbox-editform-need-template' => 'Ti mangipadas ti sabali a panid iti daytoy a plantilia, ti nagan ti plantilia ket nasken a mainaganan.',
	'templatesandbox-editform-need-title' => 'Ti panagipadas ti sabali a panid iti daytoy a plantilia, nasken a mainaganan ti titulo ti panid.',
	'templatesandbox-editform-invalid-template' => 'Ti nagan ti plantilia nga nainaganam ket saan a husto.',
	'templatesandbox-editform-invalid-title' => 'Ti titulo a nainaganam para iti panagipadas ket saan nga husto.',
	'templatesandbox-editform-title-not-exists' => 'Ti titulo a nainaganam para iti panagipadas ket awan.',
);

/** Italian (italiano)
 * @author Beta16
 * @author Codicorumus
 */
$messages['it'] = array(
	'templatesandbox' => 'Pagina di prova Template',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Visualizza una pagina]] includendovi le versioni dei template contenute in una sandbox',
	'templatesandbox-suffix' => 'sandbox',
	'templatesandbox-legend' => 'Pagina di prova Template',
	'templatesandbox-text' => 'Indicando un prefisso per la sandbox, puoi selezionare un gruppo di template salvati nel tuo spazio sandbox.
Per esempio, se vuoi fare l\'anteprima di una versione di {{ns:Template}}:Test che hai salvato come "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Test", usa come prefisso "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}".',
	'templatesandbox-prefix-label' => 'Prefisso delle sandbox:',
	'templatesandbox-page-label' => 'Pagina da visualizzare:',
	'templatesandbox-revid-label' => 'Versione da visualizzare:',
	'templatesandbox-text-label' => 'Wikicodice da visualizzare:',
	'templatesandbox-submit' => 'Visualizza',
	'templatesandbox-title-output' => 'Prova template su: $1',
	'templatesandbox-editform-legend' => 'Anteprima di una pagina con questo template',
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
	'templatesandbox-page-or-revid' => 'Devi inserire il titolo di una pagina oppure un numero di versione.',
	'templatesandbox-editform-need-template' => "Per visualizzare l'anteprima di un'altra pagina con questo template, devi specificare il nome di un template.",
	'templatesandbox-editform-need-title' => "Per visualizzare l'anteprima di un'altra pagina con questo template, devi specificare il titolo di una pagina.",
	'templatesandbox-editform-invalid-template' => 'Il nome del template specificato non è valido.',
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
	'templatesandbox-text' => 'テンプレートを自分の利用者サンドボックスにサンドボックスの接頭辞付きで保存している場合は、それらを指定できます。
例えば、{{ns:Template}}:Test を「{{ns:User}}:Hoge/{{int:templatesandbox-suffix}}/{{ns:Template}}:Test」として保存していてそれをプレビューする場合は、接頭辞として「{{ns:User}}:Hoge/{{int:templatesandbox-suffix}}」を使用してください。',
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
	'templatesandbox-editform-need-template' => 'このテンプレートを使用して別のページのプレビューを表示するには、テンプレート名を指定してください。',
	'templatesandbox-editform-need-title' => 'このテンプレートで別のページのプレビューを表示するには、ページ名を指定してください。',
	'templatesandbox-editform-invalid-template' => '指定したテンプレート名は無効です。',
	'templatesandbox-editform-invalid-title' => 'プレビューに指定したページ名は無効です。',
	'templatesandbox-editform-title-not-exists' => 'プレビューに指定したページは存在しません。',
);

/** Georgian (ქართული)
 * @author David1010
 */
$messages['ka'] = array(
	'templatesandbox' => 'თარგის სავარჯიშო',
	'templatesandbox-suffix' => 'სავარჯიშო',
	'templatesandbox-legend' => 'თარგის სავარჯიშო',
	'templatesandbox-prefix-label' => 'სავარჯიშოს პრეფიქსი:',
	'templatesandbox-submit' => 'ხილვა',
	'templatesandbox-title-output' => 'თარგის სავარჯიშო: $1',
	'templatesandbox-editform-legend' => 'გვერდის წინასწარი გადახედვა ამ თარგით',
	'templatesandbox-editform-page-label' => 'გვერდის სათაური:',
	'templatesandbox-editform-view-label' => 'წინასწარი გადახედვა',
	'templatesandbox-preview' => '$2-ის წინასწარი გადახედვა',
);

/** Korean (한국어)
 * @author 관인생략
 * @author 아라
 */
$messages['ko'] = array(
	'templatesandbox' => '틀연습장',
	'templatesandbox-desc' => '연습장에서 틀을 포함하여 [[Special:TemplateSandbox|문서를 렌더합니다]]',
	'templatesandbox-suffix' => '연습장',
	'templatesandbox-legend' => '틀 연습장',
	'templatesandbox-text' => '적절한 연습장 접두어를 사용해 내 연습장 공간에 저장한 틀의 집합을 설정할 수 있습니다.
예를 들어 {{ns:Template}}:테스트를 "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:테스트"로 저장하고 미리 보려면 접두어로 "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}"으로 사용하세요.',
	'templatesandbox-prefix-label' => '연습장 접두어:',
	'templatesandbox-page-label' => '문서 렌더:',
	'templatesandbox-revid-label' => '판 렌더:',
	'templatesandbox-text-label' => '위키텍스트 렌더:',
	'templatesandbox-submit' => '보기',
	'templatesandbox-title-output' => '틀연습장: $1',
	'templatesandbox-editform-legend' => '이 틀과 함께 문서 미리 보기',
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
	'templatesandbox-page-or-revid' => '문서 제목이나 판 ID 번호 중 하나를 입력해야 합니다.',
	'templatesandbox-editform-need-title' => '이 틀로 다른 문서를 미리 보려면 문서 제목을 지정해야 합니다.',
	'templatesandbox-editform-invalid-title' => '미리 보기 위해 지정한 제목이 잘못되었습니다.',
	'templatesandbox-editform-title-not-exists' => '미리 보기 위해 지정한 제목이 존재하지 않습니다.',
);

/** Karachay-Balkar (къарачай-малкъар)
 * @author Iltever
 */
$messages['krc'] = array(
	'templatesandbox' => 'Шаблонла ючюн къум орун',
	'templatesandbox-suffix' => 'къум орун',
	'templatesandbox-legend' => 'Шаблонла ючюн къум орун',
	'templatesandbox-prefix-label' => 'Къум орунну префикси:',
	'templatesandbox-page-label' => 'Бетни кёргюз:',
	'templatesandbox-revid-label' => 'Версия кёргюзюлдю:',
	'templatesandbox-text-label' => 'Вики-текстни кёргюзюу:',
	'templatesandbox-submit' => 'Къарау',
	'templatesandbox-title-output' => 'Шаблонла ючюн къум орун: $1',
	'templatesandbox-editform-legend' => 'Бу шаблон хайырланнган бетге ал къарау',
	'templatesandbox-editform-page-label' => 'Бетни аты:',
	'templatesandbox-editform-view-label' => 'Ал къарау',
	'templatesandbox-preview' => '$2 бетге ал къарау',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author Calak
 * @author Gomada
 */
$messages['ku-latn'] = array(
	'templatesandbox-editform-legend' => 'Pêşdîtina rûpelê bi vê şablonê',
	'templatesandbox-editform-page-label' => 'Sernavê rûpelê:',
	'templatesandbox-editform-view-label' => 'Pêşdîtinê nîşan bide',
	'templatesandbox-preview' => 'Pêşdîtina $2',
	'templatesandbox-previewnote' => "'''Ji bîr neke ku ev tenê pêşdîtineke [[:$1]] (y)e.'''
Guhertinên te hê nehatine tomarkirin!",
	'templatesandbox-editform-need-title' => 'Ji bo pêşdîtina rûpeleke din a bi vê şablonê, divê sernavê rûpelê were destnîşankirin.',
	'templatesandbox-editform-invalid-title' => 'Sernavê ku te ji bo pêşdîtinê nivîsandî nederbasdar e.',
	'templatesandbox-editform-title-not-exists' => 'Sernavê ku te ji bo pêşdîtinê nivîsandî, nîne.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'templatesandbox' => 'Schabloun-Sandkëscht',
	'templatesandbox-desc' => '[[Special:TemplateSandbox| Generéiert eng Säit]] mat agebonnene Schablounen aus enger Sandkësch',
	'templatesandbox-suffix' => 'Sandkëscht',
	'templatesandbox-legend' => 'Schabloun vun der Sandkëscht',
	'templatesandbox-revid-label' => 'Versioun generéieren:',
	'templatesandbox-submit' => 'Weisen',
	'templatesandbox-title-output' => 'Sandkëscht-Schabloun$: $1',
	'templatesandbox-editform-legend' => 'Säit mat dëser Schabloun weisen ouni ze späicheren',
	'templatesandbox-editform-page-label' => 'Titel vun der Säit:',
	'templatesandbox-editform-view-label' => 'Kucken ouni ofzespäicheren',
	'templatesandbox-preview' => '$2 kucken ouni ze späicheren',
	'templatesandbox-previewnote' => "'''Denkt drun datt dëst nëmmen eng net gespäichert Versioun vun [[:$1]] ass.'''
Är Ännerunge sinn nach net gespäichert!",
	'templatesandbox-invalid-title' => 'Den Titel deen Dir uginn hutt ass net valabel.',
	'templatesandbox-title-not-exists' => 'Den Titel deen Dir uginn hutt gëtt et net.',
	'templatesandbox-revision-not-exists' => "D'Versioun déi Dir uginn hutt gëtt et net.",
	'templatesandbox-editform-need-template' => 'Fir eng aner Säit mat dëser Schabloun ze kucken (ouni ze späicheren), musst Dir den Numm vun enger Schabloun uginn.',
	'templatesandbox-editform-need-title' => 'Fir eng aner Säit mat dëser Schabloun ze kucken (ouni ze späicheren), musst Dir den Titel vun enger Säit uginn,',
	'templatesandbox-editform-invalid-template' => 'Den Numm vun der Schabloun deen dir uginn hutt ass net valabel.',
	'templatesandbox-editform-invalid-title' => 'Den Titel deen Dir uginn hutt fir ze kucken ass net valabel.',
	'templatesandbox-editform-title-not-exists' => 'Den Titel deen Dir uginn hutt fir ze kucke gëtt et net.',
);

/** Latvian (latviešu)
 * @author Papuass
 */
$messages['lv'] = array(
	'templatesandbox-submit' => 'Apskatīt',
	'templatesandbox-editform-page-label' => 'Lapas nosaukums:',
	'templatesandbox-editform-view-label' => 'Rādīt pirmskatu',
	'templatesandbox-preview' => '$2 pirmskats',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'templatesandbox' => 'Bak kasiak templat',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Marender laman]] transklusi templat dari bak kasiak',
	'templatesandbox-suffix' => 'bak kasiak',
	'templatesandbox-legend' => 'Bak kasiak templat',
	'templatesandbox-prefix-label' => 'Awalan bak kasiak:',
	'templatesandbox-page-label' => 'Laman render:',
	'templatesandbox-revid-label' => 'Parubahan render:',
	'templatesandbox-text-label' => 'Teks wiki render:',
	'templatesandbox-submit' => 'Baco',
	'templatesandbox-title-output' => 'Templat bak kasiak: $1',
	'templatesandbox-editform-legend' => 'Pratonton laman jo templat ko',
	'templatesandbox-editform-page-label' => 'Judul laman:',
	'templatesandbox-editform-view-label' => 'Pratonton',
	'templatesandbox-preview' => 'Pratonton dari laman $2',
	'templatesandbox-previewnote' => "'''Ingek iko hanyolah pratonton dari laman [[:$1]].'''
Parubahan nan Sanak buek alun disimpan!",
	'templatesandbox-invalid-title' => 'Judul nan Sanak agiah indak sah.',
	'templatesandbox-title-not-exists' => 'Judul nan dituju indak basobok.',
	'templatesandbox-revision-not-exists' => 'Revisi nan dituju indak basobok.',
	'templatesandbox-invalid-prefix' => 'Awalan bak kasiak nan dituju indak sah.',
	'templatesandbox-prefix-not-local' => 'Awalan bak kasiak nan dituju indak ad di wiki ko.',
	'templatesandbox-page-or-revid' => 'Sanak harus masuakan judul laman atau nomor ID parubahan.',
	'templatesandbox-editform-need-title' => 'Untuak mancaliak pratonton laman nan manggunoan templat iko, judul lamannyo harus ado.',
	'templatesandbox-editform-invalid-title' => 'Judul nan dituju untuak pratonton indak sah.',
	'templatesandbox-editform-title-not-exists' => 'Judul nan dituju untuak pratonton indak basobok.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'templatesandbox' => 'ШаблонскиПесочник',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Испишува страница]] превметнувајќи шаблони од песочник',
	'templatesandbox-suffix' => 'песочник',
	'templatesandbox-legend' => 'Шаблонски песочник',
	'templatesandbox-text' => 'Можете да изберете збир шаблони зачувани во вашиот песочник, користејќи се со соодветен префикс за песочник. На пример, ако сакате да пергледате верзија на {{ns:Template}}:Test што сте ја зачувале како „{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Test“, користете „{{ns:User}}:Foo/{{int:templatesandbox-suffix}}“  како префикс.',
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
	'templatesandbox-editform-need-template' => 'За да прегледате друга страница со шаблонов, мора да наведете име на шаблонот.',
	'templatesandbox-editform-need-title' => 'За да прегледате друга страница со шаблонов, мора да наведете наслов.',
	'templatesandbox-editform-invalid-template' => 'Укажаното име на шаблонот е неважечко.',
	'templatesandbox-editform-invalid-title' => 'Наведениот наслов за преглед е неважечки.',
	'templatesandbox-editform-title-not-exists' => 'Наведениот наслов за преглед не постои.',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'templatesandbox' => 'ഫലക പരീക്ഷണോപാധി',
	'templatesandbox-desc' => 'എഴുത്തുകളരിയിലുള്ള ഫലകങ്ങൾ ഉൾപ്പെടെ [[Special:TemplateSandbox|താൾ സൃഷ്ടിച്ചു പ്രദർശിപ്പിക്കുന്നു]]',
	'templatesandbox-suffix' => 'എഴുത്തുകളരി',
	'templatesandbox-legend' => 'ഫലകങ്ങളുടെ എഴുത്തുകളരി',
	'templatesandbox-text' => "എഴുത്തുകളരിയ്ക്ക് അനുയോജ്യമായ പൂർവ്വപദമുപയോഗിച്ച് താങ്കൾക്ക് എഴുത്തുകളരി ഇടയിൽ സേവ് ചെയ്യാവുന്ന ഫലകങ്ങളുടെ ഗണം തിരഞ്ഞെടുക്കാവുന്നതാണ്.
ഉദാഹരണത്തിന്, താങ്കൾക്ക് {{ns:Template}}:പരീക്ഷണം എന്നതാളിന്റെ ഒരു പതിപ്പ് എങ്ങനെയുണ്ടെന്ന് കാണണമെങ്കിൽ അത് \"{{ns:User}}:കുട്ടൂസൻ/{{int:templatesandbox-suffix}}/{{ns:Template}}:പരീക്ഷണം\" എന്ന മട്ടിൽ സേവ് ചെയ്യുക, പൂർവ്വപദമായി ''{{ns:User}}:കുട്ടൂസൻ/{{int:templatesandbox-suffix}}'' എന്നുപയോഗിക്കുക.",
	'templatesandbox-prefix-label' => 'എഴുത്തുകളരിയുടെ പൂർവ്വപദം:',
	'templatesandbox-page-label' => 'പ്രദർശിപ്പിക്കേണ്ട താൾ:',
	'templatesandbox-revid-label' => 'പ്രദർശിപ്പിക്കേണ്ട പതിപ്പ്:',
	'templatesandbox-text-label' => 'പ്രദർശിപ്പിക്കേണ്ട വിക്കി എഴുത്ത്:',
	'templatesandbox-submit' => 'കാണുക',
	'templatesandbox-title-output' => 'ഫലകങ്ങളുടെ എഴുത്തുകളരി: $1',
	'templatesandbox-editform-legend' => 'ഈ ഫലകം ഉപയോഗിച്ച് താൾ എങ്ങനെയുണ്ടെന്ന് കാണുക',
	'templatesandbox-editform-page-label' => 'താളിന്റെ തലക്കെട്ട്:',
	'templatesandbox-editform-view-label' => 'എങ്ങനെയുണ്ടെന്ന് കാണിക്കുക',
	'templatesandbox-preview' => '$2 എങ്ങനെയുണ്ടെന്ന് കാണുക',
	'templatesandbox-previewnote' => "'''ഇത് [[:$1]] എന്നതിന്റെ പ്രിവ്യൂ മാത്രമാണെന്ന് ഓർക്കുക.'''
താങ്കൾ വരുത്തിയ മാറ്റങ്ങൾ ഇതുവരെ സേവ് ചെയ്തിട്ടില്ല!",
	'templatesandbox-invalid-title' => 'താങ്കൾ നൽകിയ തലക്കെട്ട് അസാധുവാണ്.',
	'templatesandbox-title-not-exists' => 'താങ്കൾ നൽകിയ തലക്കെട്ട് നിലവിലില്ല.',
	'templatesandbox-revision-not-exists' => 'താങ്കൾ വ്യക്തമാക്കിയ നാൾപ്പതിപ്പ് നിലവിലില്ല.',
	'templatesandbox-invalid-prefix' => 'താങ്കൾ എഴുത്തുകളരിക്ക് നൽകിയ പൂർവ്വപദം അസാധുവാണ്.',
	'templatesandbox-prefix-not-local' => 'എഴുത്തുകളരിക്ക് താങ്കൾ നൽകിയ പൂർവ്വപദം പ്രാദേശികമല്ല.',
	'templatesandbox-page-or-revid' => 'താങ്കൾ ഒരു താളിന്റെ തലക്കെട്ടോ താൾപ്പതിപ്പ് തിരിച്ചറിയൽ സംഖ്യയോ നൽകേണ്ടതാണ്.',
	'templatesandbox-editform-need-title' => 'മറ്റൊരു താൾ ഈ ഫലകം ഉൾപ്പെടുത്തി എങ്ങനെയുണ്ടെന്ന് കാണാൻ, താളിന്റെ തലക്കെട്ട് നൽകിയിരിക്കണം.',
	'templatesandbox-editform-invalid-title' => 'എങ്ങനെയുണ്ടെന്ന് കാണാൻ താങ്കൾ നൽകിയ തലക്കെട്ട് അസാധുവാണ്.',
	'templatesandbox-editform-title-not-exists' => 'എങ്ങനെയുണ്ടെന്ന് കാണാൻ താങ്കൾ നൽകിയ തലക്കെട്ട് നിലവിലില്ല.',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'templatesandbox' => 'Kotak pasir templat',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Mempersembahkan halaman]] yang mentransklusikan templat dari kotak pasir',
	'templatesandbox-suffix' => 'kotak pasir',
	'templatesandbox-legend' => 'Kotak pasir templat',
	'templatesandbox-text' => 'Anda boleh memilih satu set templat yang tersimpan dalam ruang kotak pasir anda dengan menggunakan awalan kotak pasir yang bertepatan.

Misalnya, jika anda ingin mempralihatkan versi {{ns:Template}}:Test yang telah anda simpan sebagai "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Test", gunakan "{{ns:User}}:Foo/{{int:templatesandbox-suffix}}" sebagai awalan.',
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

/** Norwegian Bokmål (norsk bokmål)
 * @author Jeblad
 */
$messages['nb'] = array(
	'templatesandbox' => 'Mal-sandkasse',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Tegn ut siden]] og transkluder maler fra en sandkasse',
	'templatesandbox-suffix' => 'sandkasse',
	'templatesandbox-legend' => 'Alternativ for mal-sandkasse',
	'templatesandbox-text' => 'Du kan velge et sett med maler som er lagret i din sandkasse ved hjelp av et passende sandbox-prefiks. For eksempel, hvis du vil forhåndsvise en versjon av {{ns:Template}}:Test som du har lagret som «{{ns:User}}:Foo/sandbox/{{ns:Template}}:Test», så bruk "{{ns:User}}:Foo/sandbox" som prefiks.', # Fuzzy
	'templatesandbox-prefix-label' => 'Prefiks for sandkasse:',
	'templatesandbox-page-label' => 'Tegn ut siden:',
	'templatesandbox-revid-label' => 'Tegn ut revisjonen:',
	'templatesandbox-text-label' => 'Tegn ut wikitekst:',
	'templatesandbox-submit' => 'Vis',
	'templatesandbox-title-output' => 'Mal-sandkasse: $1',
	'templatesandbox-editform-legend' => 'Forhåndsvis siden med denne malen',
	'templatesandbox-editform-page-label' => 'Sidetittel:',
	'templatesandbox-editform-view-label' => 'Forhåndsvisning',
	'templatesandbox-preview' => 'Forhåndsvisning av $2',
	'templatesandbox-previewnote' => "'''Husk at dette er bare en forhåndsvisning av [[:$1]].'''
Endringene er ikke lagret ennå!",
	'templatesandbox-invalid-title' => 'Tittelen du oppga er ugyldig.',
	'templatesandbox-title-not-exists' => 'Tittelen du oppga eksisterer ikke.',
	'templatesandbox-revision-not-exists' => 'Versjonen du oppga eksisterer ikke.',
	'templatesandbox-invalid-prefix' => 'Sandkasse-prefikset du oppga er ugyldig.',
	'templatesandbox-prefix-not-local' => 'Sandboks-prefikset du oppga er ikke lokalt.',
	'templatesandbox-page-or-revid' => 'Du må angi enten en sidetittel eller et revisjonsnummer.',
	'templatesandbox-editform-need-title' => 'For å forhåndsvise en annen side med denne malen, må du angi en sidetittel.',
	'templatesandbox-editform-invalid-title' => 'Tittelen du har angitt for forhåndsvisning er ugyldig.',
	'templatesandbox-editform-title-not-exists' => 'Tittelen du har angitt for forhåndsvisning finnes ikke.',
);

/** Low Saxon (Netherlands) (Nedersaksies)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'templatesandbox' => 'Malzaandkule',
	'templatesandbox-suffix' => 'zaandkule',
	'templatesandbox-legend' => 'Malzaandkule',
);

/** Dutch (Nederlands)
 * @author Romaine
 * @author Siebrand
 * @author Southparkfan
 */
$messages['nl'] = array(
	'templatesandbox' => 'Sjabloonzandbak',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Rendert een pagina]] door sjablonen uit een testomgeving te transcluderen',
	'templatesandbox-suffix' => 'zandbak',
	'templatesandbox-legend' => 'Sjabloonzandbak',
	'templatesandbox-text' => 'U kunt een verzameling sjablonen kiezen om in uw zandbakruimte op te slaan door het bijbehorende zandbakvoorvoegsel te gebruiken.
Als u bijvoorbeeld een voorvertoning wilt zien van {{ns:Template}}:Test dat u hebt opgeslagen als "{{ns:User}}:Gebruikersnaam/zandbak/{{ns:Template}}:Test", gebruik dan "{{ns:User}}:Gebruikersnaam/zandbak" als het voorvoegsel.',
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
	'templatesandbox-editform-invalid-template' => 'De naam van het sjabloon die u hebt opgegeven is ongeldig.',
	'templatesandbox-editform-invalid-title' => 'De opgegeven pagina voor de voorvertoning is ongeldig.',
	'templatesandbox-editform-title-not-exists' => 'De opgegeven pagina voor de voorvertoning bestaat niet.',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Jeblad
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'templatesandbox' => 'Malsandkasse',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Visualiserer ei side]] som inkluderer malar frå ein sandkasse',
	'templatesandbox-suffix' => 'sandkasse',
	'templatesandbox-legend' => 'Alternativ for malsandkasse',
	'templatesandbox-text' => 'Du kan velja eit sett med malar som er lagra i sandkassen din med hjelp av eit passande sandkasseførefeste. Om du til dømes vil førehandsvisa ein versjon av {{ns:Template}}:Test som du har lagra som «{{ns:User}}:Foo/sandkasse/{{ns:Template}}:Test», så bruk «{{ns:User}}:Foo/sandkasse» som førefeste.', # Fuzzy
	'templatesandbox-prefix-label' => 'Sandkasseførefeste:',
	'templatesandbox-page-label' => 'Teikn ut side:',
	'templatesandbox-revid-label' => 'Teikn ut versjon:',
	'templatesandbox-text-label' => 'Teikn ut wikitekst:',
	'templatesandbox-submit' => 'Vis',
	'templatesandbox-title-output' => 'Malsandkasse: $1',
	'templatesandbox-editform-legend' => 'Førehandsvis ei side med denne malen',
	'templatesandbox-editform-page-label' => 'Sidetittel:',
	'templatesandbox-editform-view-label' => 'Førehandsvis',
	'templatesandbox-preview' => 'Førehandsvising av $2',
	'templatesandbox-previewnote' => "'''Hugs at dette berre er ei førehandsvising av [[:$1]].'''
Endringane dine er ikkje lagra enno!",
	'templatesandbox-invalid-title' => 'Tittelen du oppgav er ugild.',
	'templatesandbox-title-not-exists' => 'Tittelen du oppgav finst ikkje.',
	'templatesandbox-revision-not-exists' => 'Versjonen du oppgav finst ikkje.',
	'templatesandbox-invalid-prefix' => 'Sandkasseførefestet du oppgav er ugildt.',
	'templatesandbox-prefix-not-local' => 'Sandkasseførefestet du oppgav er ikkje lokalt.',
	'templatesandbox-page-or-revid' => 'Du må oppgje anten ein tittel for ei side eller eit versjonsnummer.',
	'templatesandbox-editform-need-title' => 'For å førhandsvise ei anna side med denne malen, må du oppgje ein tittel.',
	'templatesandbox-editform-invalid-title' => 'Tittelen du oppgav for førehandsvising er ugild.',
	'templatesandbox-editform-title-not-exists' => 'Tittelen du oppgav for førehandsvising finst ikkje.',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'templatesandbox' => 'Nauc de sabla de modèl',
	'templatesandbox-suffix' => 'Nauc de sabla',
	'templatesandbox-legend' => 'Nauc de sabla de modèl',
	'templatesandbox-prefix-label' => 'Prefix de nauc de sabla :',
	'templatesandbox-page-label' => 'Rendut de la pagina :',
	'templatesandbox-revid-label' => 'Rendut de la revision :',
	'templatesandbox-text-label' => 'Rendut del wikitèxte :',
	'templatesandbox-submit' => 'Afichar',
	'templatesandbox-editform-page-label' => 'Títol de la pagina :',
	'templatesandbox-editform-view-label' => "Afichar l'apercebut",
	'templatesandbox-preview' => 'Apercebut de $2',
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

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 * @author පසිඳු කාවින්ද
 */
$messages['pms'] = array(
	'templatesandbox' => 'TemplateSandbox',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|A smon na pàgina]] an dovrand ij modej present an na sabiera',
	'templatesandbox-suffix' => 'vasca dla sabia',
	'templatesandbox-legend' => 'Sabiera ëd model',
	'templatesandbox-text' => "A peul serne n'ansem dë stamp salvà an tò spassi ëd sabiera an dovrand un prefiss ëd sabiera aproprià.
Për esempi, s'a veul vëdde na preuva ëd na version ëd {{ns:Template}}:Test ch'a l'ha salvà tanme «{{ns:User}}:Foo/sandbox/{{ns:Template}}:Test», ch'a deuvra «{{ns:User}}:Foo/sabiera» com prefiss.", # Fuzzy
	'templatesandbox-prefix-label' => 'Prefiss ëd pàgina dle preuve:',
	'templatesandbox-page-label' => 'Visualisé la pàgina:',
	'templatesandbox-revid-label' => 'Visualisé la revision:',
	'templatesandbox-text-label' => 'Visualisé ël test wiki:',
	'templatesandbox-submit' => 'Vardé',
	'templatesandbox-title-output' => 'Template sandbox: $1',
	'templatesandbox-editform-legend' => 'Preuva dla pàgina con cost ëstamp',
	'templatesandbox-editform-page-label' => 'Tìtol ëd la pàgina:',
	'templatesandbox-editform-view-label' => 'Mostra na preuva',
	'templatesandbox-preview' => 'Preuva ëd $2',
	'templatesandbox-previewnote' => "'''Che a ten-a da ment che costa-sì a l'é mach na preuva ëd [[:$1]].'''
Soe modìfiche a son anco' pa stàite salvà!",
	'templatesandbox-invalid-title' => "Ël tìtol ch'a l'ha spessificà a va pa bin.",
	'templatesandbox-title-not-exists' => "Ël tìtol ch'a l'ha spessificà a esist pa.",
	'templatesandbox-revision-not-exists' => "La revision che a l'ha spessificà a esist pa.",
	'templatesandbox-invalid-prefix' => "Ël prefiss ëd pàgina dle preuve ch'a l'has specificà a l'é pa bon.",
	'templatesandbox-prefix-not-local' => "Ël prefiss ëd pàgina dle preuve ch'a l'has specificà a l'é pa local.",
	'templatesandbox-page-or-revid' => "A dev o bin anserì un tìtol ëd pàgina opura un nùmer d'identificativ ëd revision.",
	'templatesandbox-editform-need-title' => "Për vëdde la preuva ëd n'àutra pàgina con së stamp, un tìtol ëd pàgina a deuv esse specificà.",
	'templatesandbox-editform-invalid-title' => "Ël tìtol ch'it l'has specificà për prové a l'é pa bon.",
	'templatesandbox-editform-title-not-exists' => "Ël tìtol ch'it l'has specificà për prové a esist pa.",
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
 * @author Opraco
 */
$messages['pt'] = array(
	'templatesandbox' => 'Teste de predefinições',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Renderiza uma página]] transcluindo as predefinições a partir de uma página de testes',
	'templatesandbox-suffix' => 'Testes',
	'templatesandbox-legend' => 'Página para testar predefinições',
	'templatesandbox-text' => 'Pode escolher um conjunto de predefinições salvas em sua página de testes pessoal fornecendo o prefixo apropriado da página de testes. Por exemplo, se desejar pré-visualizar uma versão de {{ns:Template}}:Teste que salvou sob o título "{{ns:User}}:Foo/Testes/{{ns:Template}}:Teste", utilize "{{ns:User}}:Foo/Testes" como prefixo.', # Fuzzy
	'templatesandbox-prefix-label' => 'Prefixo da página de testes:',
	'templatesandbox-page-label' => 'Renderizar a página:',
	'templatesandbox-revid-label' => 'Renderizar a revisão:',
	'templatesandbox-text-label' => 'Renderizar o código wiki:',
	'templatesandbox-submit' => 'Ver',
	'templatesandbox-title-output' => 'Página para testar predefinições: $1',
	'templatesandbox-editform-legend' => 'Pré-visualizar a página com esta predefinição',
	'templatesandbox-editform-page-label' => 'Título da página:',
	'templatesandbox-editform-view-label' => 'Pré-visualizar',
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

/** Brazilian Portuguese (português do Brasil)
 * @author Luckas
 * @author Opraco
 */
$messages['pt-br'] = array(
	'templatesandbox-editform-page-label' => 'Título da página:',
	'templatesandbox-editform-view-label' => 'Prever',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'templatesandbox' => 'Pukllana plantilla',
	'templatesandbox-desc' => "[[Special:TemplateSandbox|P'anqata rikch'achin]] pukllanamanta plantillakunata ch'aqtaspa",
	'templatesandbox-suffix' => 'pukllana',
	'templatesandbox-legend' => 'Pukllana plantilla',
	'templatesandbox-text' => "Pukllana k'itiykipi waqaychasqa plantillakunamanta akllaytam atinki, pukllanapaq allin qallarina k'askaqninta llamk'achispa.
Ahinataq, \"{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Test\" sutiwan waqaychasqayki {{ns:Template}}:Test nisqamanta musuqchasqata ñawpaqta qhawayta munaspaykiqa, \"{{ns:User}}:Foo/{{int:templatesandbox-suffix}}\" nisqata qallarina k'askaqnin hinata llamk'achiy.",
	'templatesandbox-prefix-label' => "Pukllanap qallarina k'askaqnin",
	'templatesandbox-page-label' => "P'anqata rikch'achiy:",
	'templatesandbox-revid-label' => "Musuqchasqata rikch'achiy:",
	'templatesandbox-text-label' => "Wiki qillqata rikch'achiy:",
	'templatesandbox-submit' => 'Qhaway',
	'templatesandbox-title-output' => 'Pukllana plantilla: $1',
	'templatesandbox-editform-legend' => "P'anqata ñawpaqta kay plantillawan qhaway",
	'templatesandbox-editform-page-label' => "P'anqap sutin:",
	'templatesandbox-editform-view-label' => 'Ñawpaqta qhawallay',
	'templatesandbox-preview' => '$2-ta ñawpaqta qhawallay',
	'templatesandbox-previewnote' => "'''Yuyaykuy: Kayqa [[:$1]]-manta qhawariyllam.'''
Llamk'apusqaykiqa manaraqmi waqaychasqachu!",
	'templatesandbox-invalid-title' => "Qusqayki p'anqap sutinqa manam allinchu.",
	'templatesandbox-title-not-exists' => "Qusqayki p'anqap sutinqa manam kanchu.",
	'templatesandbox-revision-not-exists' => "Qusqayki p'anqa musuqchasqaqa manam kanchu.",
	'templatesandbox-invalid-prefix' => "Qusqayki pukllanap qallarina k'askaqninqa manam allinchu.",
	'templatesandbox-prefix-not-local' => "Qusqayki pukllanap qallarina k'askaqninqa manam tiyanallapaqchu.",
	'templatesandbox-page-or-revid' => "P'anqap sutinta icha musuqchasqapaq ID huchhata yaykuchinaykim tiyan.",
	'templatesandbox-editform-need-title' => "Kay plantillawan huk p'anqata ñawpaqta qhawanaykipaqqa,  p'anqap sutinta qunaykim tiyan.",
	'templatesandbox-editform-invalid-title' => 'Qusqayki ñawpaqta qhawanapaq sutiqa manam allinchu.',
	'templatesandbox-editform-title-not-exists' => 'Qusqayki ñawpaqta qhawanapaq sutiqa manam kanchu.',
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

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'templatesandbox' => "Template d'a sandbox",
	'templatesandbox-suffix' => 'buatte de rene',
	'templatesandbox-legend' => "Template d'a buatte de rene",
	'templatesandbox-prefix-label' => "Preffise d'a buatte de rene:",
	'templatesandbox-submit' => "'Ndruche",
	'templatesandbox-title-output' => "Template d'a sandbox: $1",
	'templatesandbox-editform-page-label' => "Titole d'a pàgene:",
	'templatesandbox-editform-view-label' => "Vide l'andeprime",
	'templatesandbox-preview' => 'Andeprime de $2',
);

/** Russian (русский)
 * @author Anonim.one
 * @author Eleferen
 * @author Ignatus
 * @author NBS
 * @author Ole Yves
 * @author Olli
 */
$messages['ru'] = array(
	'templatesandbox' => 'TemplateSandbox',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Выполняет визуализацию страницы]], включая шаблоны из песочницы',
	'templatesandbox-suffix' => 'песочница',
	'templatesandbox-legend' => 'Песочница для шаблонов',
	'templatesandbox-text' => 'Вы можете выбрать набор шаблонов, сохранённых в вашем пространстве песочниц, используя префикс соответствующей песочницы.
Например, если вы хотите просмотреть версию {{ns:Template}}:Тест, которую вы сохранили в качестве «{{ns:User}}:Вася Пупкин/Песочница/{{ns:Template}}:Тест», используйте «{{ns:User}}:Вася Пупкин/Песочница» в качестве префикса.',
	'templatesandbox-prefix-label' => 'Префикс песочницы:',
	'templatesandbox-page-label' => 'Показать страницу:',
	'templatesandbox-revid-label' => 'Версия показа:',
	'templatesandbox-text-label' => 'Показ вики-текста:',
	'templatesandbox-submit' => 'Просмотр',
	'templatesandbox-title-output' => 'Песочница для шаблонов: $1',
	'templatesandbox-editform-legend' => 'Предварительный просмотр страницы с использованием этого шаблона',
	'templatesandbox-editform-page-label' => 'Название страницы:',
	'templatesandbox-editform-view-label' => 'Предварительный просмотр',
	'templatesandbox-preview' => 'Предварительный просмотр $2',
	'templatesandbox-previewnote' => "'''Помните, что это только предварительный просмотр страницы [[:$1]].''' Ваши изменения в шаблоне ещё не были сохранены!",
	'templatesandbox-invalid-title' => 'Указанное вами название недействительно.',
	'templatesandbox-title-not-exists' => 'Заголовок, который вы указали, не существует.',
	'templatesandbox-revision-not-exists' => 'Версия, которую вы указали, не существует.',
	'templatesandbox-invalid-prefix' => 'Указан недействительный префикс песочницы.',
	'templatesandbox-prefix-not-local' => 'Префикс песочницы, указанный вами, не является локальным.',
	'templatesandbox-page-or-revid' => 'Вы должны ввести либо название страницы, либо номер версии.',
	'templatesandbox-editform-need-title' => 'Чтобы просмотреть другую страницу с использованием этого шаблона, название страницы должно быть указано.',
	'templatesandbox-editform-invalid-title' => 'Заголовок, указанный вами для предварительного просмотра, недействителен.',
	'templatesandbox-editform-title-not-exists' => 'Заголовок, указанный вами для предварительного просмотра, не существует.',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'templatesandbox' => 'සැකිලි වැලිපිල්ල',
	'templatesandbox-suffix' => 'වැලිපිල්ල',
	'templatesandbox-legend' => 'සැකිලි වැලිපිල්ල',
	'templatesandbox-prefix-label' => 'වැලිපිල්ලේ උපසර්ගය:',
	'templatesandbox-page-label' => 'විදහාපෑම් පිටුව:',
	'templatesandbox-revid-label' => 'විදහාපෑම් නිරීක්ෂණය:',
	'templatesandbox-text-label' => 'විදහාපෑම් විකිපාඨය:',
	'templatesandbox-submit' => 'දසුන',
	'templatesandbox-title-output' => 'සැකිලි වැලිපිල්ල: $1',
	'templatesandbox-editform-legend' => 'මෙම සැකිල්ල සමඟ පිටුව පෙරදසුන්ගත කරන්න',
	'templatesandbox-editform-page-label' => 'පිටුවේ මාතෘකාව:',
	'templatesandbox-editform-view-label' => 'පෙරදසුන පෙන්වන්න',
	'templatesandbox-preview' => '$2 හී පෙරදසුන',
	'templatesandbox-invalid-title' => 'ඔබ සඳහන් කළ මාතෘකාව වලංගු නොවේ.',
	'templatesandbox-title-not-exists' => 'ඔබ විසින් විශේෂණය කෙරූ මාතෘකාව නොපවතියි.',
	'templatesandbox-revision-not-exists' => 'ඔබ විසින් විශේෂණය කෙරූ සංශෝධනය නොපවතියි.',
	'templatesandbox-invalid-prefix' => 'ඔබ විශේෂණය කෙරූ වැලිපිල්ලේ උපසර්ගය වලංගු නොවේ.',
	'templatesandbox-prefix-not-local' => 'ඔබ විශේෂණය කෙරූ වැලිපිල්ලේ ස්ථානික නොවේ.',
	'templatesandbox-page-or-revid' => 'කරුණාකර පිටුවේ ශීර්ෂය හෝ සංශෝධන හැඳුනුම් අංකය යොදන්න.',
	'templatesandbox-editform-need-title' => 'මෙම සැකිල්ල සමඟ වෙනත් පිටුවක පෙරදසුන්ගත කිරීම සඳහා, පිටු ශීර්ෂය විශේෂණය කල යුතු වේ.',
	'templatesandbox-editform-invalid-title' => 'පෙරදසුන්ගත කිරීම සඳහා ඔබ විශේෂණය කෙරූ ශීර්ෂය වලංගු නොවේ.',
	'templatesandbox-editform-title-not-exists' => 'පෙරදසුන්ගත කිරීම සඳහා ඔබ විශේෂණය කෙරූ ශීර්ෂය නොපවතී.',
);

/** Slovenian (slovenščina)
 * @author Eleassar
 */
$messages['sl'] = array(
	'templatesandbox-editform-need-template' => 'Za predogled še ene strani s to predlogo morate določiti ime predloge.',
	'templatesandbox-editform-invalid-template' => 'Ime predloge, ki ste jo določili, ni veljavno.',
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

/** Tamil (தமிழ்)
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'templatesandbox-suffix' => 'மணல்தொட்டி',
	'templatesandbox-legend' => 'வார்ப்புரு மணல்தொட்டி',
	'templatesandbox-prefix-label' => 'மணல்தொட்டி முன்னொட்டு:',
	'templatesandbox-submit' => 'காண்',
	'templatesandbox-title-output' => 'வார்ப்புரு மணல்தொட்டி :  $1',
	'templatesandbox-editform-legend' => 'இந்த வார்ப்புருவுடன் பக்கத்தின் முன்தோற்றம் காட்டு',
	'templatesandbox-editform-page-label' => 'பக்கத்தின் தலைப்பு:',
	'templatesandbox-editform-view-label' => 'முன்தோற்றம் காட்டு',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'templatesandbox-editform-page-label' => 'పేజీ శీర్షిక:',
	'templatesandbox-editform-view-label' => 'మునుజూపును చూపించు',
	'templatesandbox-preview' => '$2 యొక్క మునుజూపు',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'templatesandbox-submit' => 'كۆرۈنۈش',
	'templatesandbox-editform-page-label' => 'بەت ماۋزۇسى:',
	'templatesandbox-editform-view-label' => 'ئالدىن كۆزىتىشنى كۆرسەت',
	'templatesandbox-invalid-title' => 'سىز بەلگىلىگەن تېما ئىناۋەتسىز.',
	'templatesandbox-title-not-exists' => 'سىز بەلگىلىگەن تېما مەۋجۇت ئەمەس.',
	'templatesandbox-revision-not-exists' => 'سىز بەلگىلىگەن تۈزىتىلگەن نەشرى مەۋجۇت ئەمەس.',
);

/** Ukrainian (українська)
 * @author Ahonc
 * @author Andriykopanytsia
 * @author Base
 * @author DixonD
 * @author Wizardist
 * @author Ата
 */
$messages['uk'] = array(
	'templatesandbox' => 'Пісочниця шаблону',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Відображає сторінку]] із включеним шаблоном з пісочниці',
	'templatesandbox-suffix' => 'пісочниця',
	'templatesandbox-legend' => 'Пісочниця шаблона',
	'templatesandbox-text' => 'Ви можете вибрати набір шаблонів, збережених у вашому просторі пісочниць, використовуючи префікс відповідної пісочниці.
Наприклад, якщо ви хочете переглянути версію {{ns:Template}}:Тест, який ви зберегли в якості „{{ns:User}}:Азірів/{{int:templatesandbox-suffix}}/{{ns:Template}}:Тест“, використовуйте „{{ns:User}}:Азірів/{{int:templatesandbox-suffix}}“ в якості префікса.',
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
	'templatesandbox-editform-need-template' => "Щоб переглянути іншу сторінку з цього шаблону, необхідно вказати ім'я шаблону.",
	'templatesandbox-editform-need-title' => 'Потрібно вказати заголовок сторінки для перегляду іншої сторінки з цим шаблоном.',
	'templatesandbox-editform-invalid-template' => "Неприпустиме ім'я шаблону, яке ви вказали.",
	'templatesandbox-editform-invalid-title' => 'Вказаний заголовок для попереднього перегляду некоректний.',
	'templatesandbox-editform-title-not-exists' => 'Вказаний заголовок для попереднього перегляду не існує.',
);

/** Uzbek (oʻzbekcha)
 * @author Sociologist
 */
$messages['uz'] = array(
	'templatesandbox-editform-legend' => 'Ushbu andoza qoʻllanilgan sahifani koʻrib chiqish',
	'templatesandbox-previewnote' => "'''Diqqat! Bu shunchaki [[:$1]] sahifasini koʻrib chiqish.''' Andozaga kiritgan oʻzgartirishlaringiz hali saqlangani yoʻq!",
	'templatesandbox-editform-need-title' => 'Ushbu andoza qoʻllanilgan sahifani koʻrib chiqish uchun oʻsha sahifa nomi koʻrsatilishi lozim.',
);

/** vèneto (vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'templatesandbox' => 'Pagina de prova par i modèi',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'templatesandbox' => 'Chỗ thử bản mẫu',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Kết xuất một trang]] bằng cách lấy các bản mẫu từ chỗ thử',
	'templatesandbox-suffix' => 'chỗ thử',
	'templatesandbox-legend' => 'Chỗ thử bản mẫu',
	'templatesandbox-text' => 'Bạn có thể chọn một loạt bản mẫu được lưu trong không gian thử nghiệm của bạn theo tiền tố.
Thí dụ để xem trước một phiên bản {{ns:Template}}:Thử được lưu tại “{{ns:User}}:Ví dụ/{{int:templatesandbox-suffix}}/{{ns:Template}}:Thử”, hãy sử dụng tiền tố “{{ns:User}}:Ví dụ/{{int:templatesandbox-suffix}}”.',
	'templatesandbox-prefix-label' => 'Tiền tố chỗ thử:',
	'templatesandbox-page-label' => 'Kết xuất trang:',
	'templatesandbox-revid-label' => 'Kết xuất phiên bản:',
	'templatesandbox-text-label' => 'Kết xuất văn bản wiki:',
	'templatesandbox-submit' => 'Xem',
	'templatesandbox-title-output' => 'Chỗ thử bản mẫu: $1',
	'templatesandbox-editform-legend' => 'Xem trước trang dùng bản mẫu này',
	'templatesandbox-editform-page-label' => 'Tên trang:',
	'templatesandbox-editform-view-label' => 'Xem trước',
	'templatesandbox-preview' => 'Xem trước $2',
	'templatesandbox-previewnote' => "'''Đây chỉ mới là bản xem trước [[:$1]].'''
Các thay đổi của bạn vẫn chưa được lưu!",
	'templatesandbox-invalid-title' => 'Tên trang chỉ định không hợp lệ.',
	'templatesandbox-title-not-exists' => 'Tên trang chỉ định không tồn tại.',
	'templatesandbox-revision-not-exists' => 'Phiên bản chỉ định không tồn tại.',
	'templatesandbox-invalid-prefix' => 'Tiền tố chỗ thử chỉ định không hợp lệ.',
	'templatesandbox-prefix-not-local' => 'Tiền tố chỗ thử chỉ định không có trực thuộc wiki này.',
	'templatesandbox-page-or-revid' => 'Bạn cần chỉ định tên trang hoặc số phiên bản.',
	'templatesandbox-editform-need-template' => 'Cần chỉ định một tên bản mẫu để xem trước trang khác dùng bản mẫu này.',
	'templatesandbox-editform-need-title' => 'Cần chỉ định một tên trang để xem trước trang khác dùng bản mẫu này.',
	'templatesandbox-editform-invalid-template' => 'Bạn đã chỉ định một tên bản mẫu không hợp lệ.',
	'templatesandbox-editform-invalid-title' => 'Tên trang được chỉ định để xem trước không hợp lệ.',
	'templatesandbox-editform-title-not-exists' => 'Tên trang được chỉ định để xem trước không tồn tại.',
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
 * @author Yfdyh000
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'templatesandbox' => '模板沙盒',
	'templatesandbox-desc' => '呈现一个有[[Special:TemplateSandbox|传输自沙盒的模板]]的页面',
	'templatesandbox-suffix' => '沙盒',
	'templatesandbox-legend' => '模板沙盒',
	'templatesandbox-text' => '通过使用一个适当的沙盒前缀，您可以选择将一系列的模板保存于您的沙盒空间中。例如，您如果想要预览{{ns:Template}}的一个版本：您可以将其保存为“"{{ns:User}}:Foo/{{int:templatesandbox-suffix}}/{{ns:Template}}:Test"”，以“{{ns:User}}:Foo/{{int:templatesandbox-suffix}}”为前缀。',
	'templatesandbox-prefix-label' => '沙盒前缀：',
	'templatesandbox-page-label' => 'Render page:',
	'templatesandbox-revid-label' => '呈现版本：',
	'templatesandbox-text-label' => '呈现wiki文本：',
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
	'templatesandbox-revision-not-exists' => '您指定的修订版本不存在。',
	'templatesandbox-invalid-prefix' => '您指定的沙盒前缀无效。',
	'templatesandbox-prefix-not-local' => '您指定的沙盒前缀不在本地。',
	'templatesandbox-page-or-revid' => '您必须输入一个页面标题或修订版本ID。',
	'templatesandbox-editform-need-title' => '要预览使用本模板的其他页面，必须指定一个页面标题，',
	'templatesandbox-editform-invalid-title' => '您为预览指定的标题无效。',
	'templatesandbox-editform-title-not-exists' => '您为预览指定的标题不存在。',
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
