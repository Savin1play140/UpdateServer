var ad_block;

function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}
function connectAd(texts) {
	ad_block = document.getElementsByTagName('ad');
	for (let i=0;i<ad_block.length;i++){
		rand = getRandomInt(texts.length);
		ad_block[i].innerHTML = texts[rand];
	}
	return true;
}
function clearAd() {
	ad_block = document.getElementsByTagName('ad');
	for (let i=0;i<ad_block.length;i++){
		ad_block[i].innerText = "";
	}
	return true;
}
