// Важно чтобы порядо двух массивов совпадал
var languages = ["EN", "RU", "UK"];
function transleteText(variables, lang) {
	transleable = document.getElementsByTagName('lang');
	for (var i=0;i<ad_block.length;i++) {
		if (languages.includes(lang)) {
			var lang_num = languages.indexOf(lang);
			transleable[i].innerHTML = variables[lang_num];
		}
	}
}