<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
	xml:lang="{php} echo $l = substr(I18n::$lang, 2) {/php}"
	lang="{php} echo $l {/php}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>{$title}</title>

{foreach from=$styles key=style item=media}
	<link rel="stylesheet" href="{$style}" type="text/css" />
{/foreach}

{foreach from=$scripts item=script}
	<script type="text/javascript" src="{$script}"></script>
{/foreach}

</head>
<body>
{$content}
</body>
</html>
