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
	'templatesandbox' => "TemplateSandbox", // Important! This is the string that appears on Special:SpecialPages
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Renders a page]] transcluding templates from a sandbox',

	'templatesandbox-suffix' => 'sandbox',
	'templatesandbox-legend' => 'Template Sandbox',
	'templatesandbox-text' => 'You can use this special page to preview how a given page would look with a different set of templates.',
	'templatesandbox-prefix-label' => 'Sandbox prefix:',
	'templatesandbox-page-label' => 'Render page:',
	'templatesandbox-revid-label' => 'Render revision:',
	'templatesandbox-text-label' => 'Render wikitext:',
	'templatesandbox-submit' => 'View',
	'templatesandbox-title-output' => 'TemplateSandbox: $1',

	'templatesandbox-editform-legend' => 'Preview page with this template',
	'templatesandbox-editform-page-label' => 'Page title:',
	'templatesandbox-editform-view-label' => 'Show Preview',
	'templatesandbox-preview' => "Preview of $2",
	'templatesandbox-previewnote' => "'''Remember that this is only a preview of [[:$1]].'''
Your changes have not yet been saved!",

	'templatesandbox-invalid-title' => 'The title you specified is invalid.',
	'templatesandbox-title-not-exists' => 'The title you specified does not exist.',
	'templatesandbox-revision-not-exists' => 'The revision you specified does not exist.',
	'templatesandbox-invalid-prefix' => 'The sandbox prefix you specified is invalid.',
	'templatesandbox-prefix-not-local' => 'The sandbox prefix you specified is not local.',
	'templatesandbox-page-or-revid' => 'Either page or revid is required.',

	'templatesandbox-editform-need-title' => 'To preview another page with this template, a page title must be specified.',
	'templatesandbox-editform-invalid-title' => 'The title you specified for previewing is invalid.',
	'templatesandbox-editform-title-not-exists' => 'The title you specified for previewing does not exist.',
);

/** Message documentation (Message documentation)
 * @author Brad Jorsch
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'templatesandbox' => 'The name of the [[mw:Extension:TemplateSandbox|TemplateSandbox extension]].',
	'templatesandbox-desc' => '{{desc|name=Template Sandbox|url=http://www.mediawiki.org/wiki/Extension:TemplateSandbox}}',
	'templatesandbox-suffix' => "Suffix added to the current user's userpage for the default sandbox prefix.",
	'templatesandbox-legend' => 'Legend displayed on the input form.',
	'templatesandbox-text' => 'Text displayed in the input form.',
	'templatesandbox-prefix-label' => 'Label for the "prefix" input field.',
	'templatesandbox-page-label' => 'Label for the "page" input field on the editpage form.',
	'templatesandbox-revid-label' => 'Label for the "revid" input field.',
	'templatesandbox-text-label' => 'Label for the "text" input field.',
	'templatesandbox-submit' => 'Label for the submit button',
	'templatesandbox-title-output' => 'Message used when displaying the parsed page title. $1 is the parsed page title.',
	'templatesandbox-editform-legend' => 'Text used for the legend on the editpage form',
	'templatesandbox-preview' => 'Title of preview section when previwing another page using this template. $1 is the page being previewed.',
	'templatesandbox-previewnote' => 'Message displayed when previwing another page using this template. $1 is the page being previewed.',
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

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'templatesandbox' => 'Vorlagenspielwiese',
	'templatesandbox-desc' => 'Ergänzt eine Spielwiese zum [[Special:TemplateSandbox|Rendern von Seiten]], die Vorlagen enthalten',
	'templatesandbox-suffix' => 'Spielwiese',
	'templatesandbox-legend' => 'Vorlagenspielwiese',
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
	'templatesandbox-page-or-revid' => 'Es ist entweder ein Seitentitel oder eine Version erforderlich.',
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
	'templatesandbox-page-or-revid' => 'Debe indicar la página o el identificador de revisión.',
	'templatesandbox-editform-need-title' => 'Para obtener una vista previa de otra página con esta plantilla, se debe especificar un título de página.',
	'templatesandbox-editform-invalid-title' => 'El título especificado para la vista previa no es válido.',
	'templatesandbox-editform-title-not-exists' => 'El título especificado para la vista previa no existe.',
);

/** Persian (فارسی)
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'templatesandbox-editform-page-label' => 'عنوان صفحه:',
);

/** Finnish (suomi)
 * @author Stryn
 */
$messages['fi'] = array(
	'templatesandbox-suffix' => 'hiekkalaatikko',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'templatesandbox' => 'TemplateSandbox',
	'templatesandbox-desc' => "[[Special:TemplateSandbox|Afficher le rendu d'une page]] en traduisant les modèles depuis un bac à sable",
	'templatesandbox-suffix' => 'bac à sable',
	'templatesandbox-legend' => 'Bac à sable de modèle',
	'templatesandbox-prefix-label' => 'Préfixe de bac à sable:',
	'templatesandbox-page-label' => 'Rendu de la page:',
	'templatesandbox-revid-label' => 'Rendu de la révision:',
	'templatesandbox-text-label' => 'Rendu du wikitexte:',
	'templatesandbox-submit' => 'Afficher',
	'templatesandbox-title-output' => 'TemplateSandbox: $1',
	'templatesandbox-editform-legend' => 'Aperçu de la page avec ce modèle',
	'templatesandbox-editform-page-label' => 'Titre de la page:',
	'templatesandbox-editform-view-label' => "Afficher l'aperçu",
	'templatesandbox-preview' => 'Aperçu de $2',
	'templatesandbox-previewnote' => "'''Souvenez-vous que ce n’est qu’un aperçu de [[:$1]].'''
Vos modifications n’ont pas encore été enregistrées!",
	'templatesandbox-invalid-title' => "Le titre que vous avez spécifié n'est pas valide.",
	'templatesandbox-title-not-exists' => "Le titre que vous avez spécifié n'existe pas.",
	'templatesandbox-revision-not-exists' => "La révision que vous avez spécifiée n'existe pas.",
	'templatesandbox-invalid-prefix' => "Le préfixe de bac à sable que vous avez spécifié n'est pas valide.",
	'templatesandbox-prefix-not-local' => "Le préfixe de bac à sable que vous avez spécifié n'est pas local.",
	'templatesandbox-page-or-revid' => "Soit la page, soit l'identifiant de révision, est obligatoire.",
	'templatesandbox-editform-need-title' => "Pour afficher l'aperçu d'une autre page avec ce modèle, un titre de page doit être fourni.",
	'templatesandbox-editform-invalid-title' => "Le titre que vous avez spécifié pour l'aperçu n'est pas valide.",
	'templatesandbox-editform-title-not-exists' => "Le titre que vous avez spécifié pour l'aperçu n'existe pas.",
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
	'templatesandbox-page-or-revid' => 'Cómpre indicar a páxina ou ben o identificador de revisión.',
	'templatesandbox-editform-need-title' => 'Para ollar a vista previa doutra páxina con este modelo, cómpre especificar un título de páxina.',
	'templatesandbox-editform-invalid-title' => 'O título que especificou para a vista previa non é válido.',
	'templatesandbox-editform-title-not-exists' => 'O título que especificou para a vista previa non existe.',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'templatesandbox' => 'TemplateSandbox',
	'templatesandbox-suffix' => 'sandbox',
	'templatesandbox-submit' => 'Visualizza',
	'templatesandbox-editform-legend' => 'Anteprima della pagina con questo template',
	'templatesandbox-editform-page-label' => 'Titolo della pagina:',
	'templatesandbox-editform-view-label' => 'Visualizza anteprima',
	'templatesandbox-preview' => 'Anteprima di $2',
	'templatesandbox-previewnote' => "'''Ricorda che questa è solo un'anteprima di [[:$1]].'''
Le tue modifiche NON sono ancora state salvate!",
	'templatesandbox-invalid-title' => 'Il titolo che hai specificato non è valido.',
	'templatesandbox-title-not-exists' => 'Il titolo che hai specificato non esiste.',
	'templatesandbox-revision-not-exists' => 'La revisione che hai specificato non esiste.',
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
	'templatesandbox-page-or-revid' => 'ページ名と版 ID のいずれかが必要です。',
	'templatesandbox-editform-need-title' => 'このテンプレートで別のページのプレビューを表示するには、そのページ名を指定してください。',
	'templatesandbox-editform-invalid-title' => 'プレビューに指定したページ名は無効です。',
	'templatesandbox-editform-title-not-exists' => 'プレビューに指定したページは存在しません。',
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
	'templatesandbox-page-or-revid' => 'Мора да наведете назнака на страница или ревизија.',
	'templatesandbox-editform-need-title' => 'За да прегледате друга страница со шаблонов, мора да наведете наслов.',
	'templatesandbox-editform-invalid-title' => 'Наведениот наслов за преглед е неважечки.',
	'templatesandbox-editform-title-not-exists' => 'Наведениот наслов за преглед не постои.',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'templatesandbox' => 'Sjabloonzandbak',
	'templatesandbox-desc' => '[[Special:TemplateSandbox|Rendert een pagina]] door sjablonen uit een testomgeving te transcluderen',
	'templatesandbox-suffix' => 'zandbak',
	'templatesandbox-legend' => 'Sjabloonzandbak',
	'templatesandbox-prefix-label' => 'Zandbakvoorvoegsel:',
	'templatesandbox-page-label' => 'Te renderen pagina:',
	'templatesandbox-revid-label' => 'Te renderen versie:',
	'templatesandbox-text-label' => 'Te renderen wikitekst:',
	'templatesandbox-submit' => 'Bekijken',
	'templatesandbox-title-output' => 'Sjabloonzandbak: $1',
	'templatesandbox-editform-view-label' => 'Voorvertoning weergeven',
	'templatesandbox-preview' => 'Voorvertoning van $2',
	'templatesandbox-previewnote' => "'''Dit is een voorvertoning van [[:$1]].'''
Uw wijzigingen zijn nog niet opgeslagen!",
	'templatesandbox-invalid-title' => 'De opgegeven pagina is ongeldig.',
	'templatesandbox-title-not-exists' => 'De titel die u hebt opgegeven bestaat niet.',
	'templatesandbox-revision-not-exists' => 'De versie die u hebt opgegeven bestaat niet.',
	'templatesandbox-invalid-prefix' => 'Het zandbakvoorvoegsel dat u hebt opgegeven is ongeldig.',
	'templatesandbox-prefix-not-local' => 'Het zandbakvoorvoegsel dat u hebt opgegeven is niet lokaal.',
	'templatesandbox-page-or-revid' => 'Het is verplicht een pagina of versienummer op te geven.',
	'templatesandbox-editform-need-title' => 'Om een andere pagina met deze sjabloon te bekijken, moet een paginanaam opgegeven worden.',
	'templatesandbox-editform-invalid-title' => 'De opgegeven pagina voor de voorvertoning is ongeldig.',
	'templatesandbox-editform-title-not-exists' => 'De opgegeven pagina voor de voorvertoning bestaat niet.',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'templatesandbox-submit' => 'کتل',
	'templatesandbox-editform-page-label' => 'مخ سرليک:',
);

/** Ukrainian (українська)
 * @author Base
 */
$messages['uk'] = array(
	'templatesandbox-suffix' => 'грамайданчик',
	'templatesandbox-prefix-label' => 'Префыкс грамайданчика:',
	'templatesandbox-submit' => 'Перегляд',
	'templatesandbox-editform-page-label' => 'Заголовок сторінки:',
);
