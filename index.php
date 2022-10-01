<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RegExp</title>
</head>
<body>
	<form name="form">
		<input type="text" id="key" placeholder="Введите числа или буквы"/>
		<input type="submit" value="Запуск" onclick="send();">
	</form>
	<script type="text/javascript">
		function send()
		{
			var str = document.getElementById('key').value;
			var regexp =/(^(0|^)((1|^)((2|^)((3|^)((4|^)((5|^)((6|^)((7|^)((8|^)((9|^))?)?)?)?)?)?)?)?)?$)|(^(a|^)((b|^)((c|^)((d|^)((e|^)((f|^)((g|^)((h|^)((i|^)((j|^)((k|^)((l|^)((m|^)((n|^)((o|^)((p|^)((q|^)((r|^)((s|^)((t|^)((u|^)((v|^)((w|^)((x|^)((y|^)((z|^))?)?)?)?)?)?)?)?)?)?)?)?)?)?)?)?)?)?)?)?)?)?)?)?)?$)/;
			if (str.match(regexp) != null)
				alert("true");
			else
				alert("false");
		}
	</script>
</body>
</html>