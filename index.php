<?

use AI\R52;
use IAlex\IhelpXML;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?><p>
	Наша компания существует на Российском рынке с 1992 года. За это время «Мебельная компания» прошла большой путь от маленькой торговой фирмы до одного из крупнейших производителей корпусной мебели в России.
</p>
<p>
	«Мебельная компания» осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции. Налажен производственный процесс как массового и индивидуального характера, что с одной стороны позволяет обеспечить постоянную номенклатуру изделий и индивидуальный подход – с другой.
<h3>Наша продукция</h3>
<? $APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.index",
	"",
	array(
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "2",
		"IBLOCK_BINDING" => "section",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "N"
	),
	false
); ?>
<h3>Наши услуги</h3>
<? $APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.index",
	"",
	array(
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "3",
		"IBLOCK_BINDING" => "element",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "N"
	),
	false
); ?>
<? if (\Bitrix\Main\Loader::includeModule("ialex.importxml")): ?>
	<? R52::debug(__FILE__) ?>
	<?IhelpXML::seyText("text")?>
<? endif; ?>
</p><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>