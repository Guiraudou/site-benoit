// ---------- Date & Time ----------

function parseFromTimestamp(timestamp) {
	if (timestamp == null) {
		return null;
	}
	return new Date(parseInt(timestamp+'000'));
}
function getDateDigitalDisplay(jsDate, locale="fr-FR", timeZone="Europe/Paris") {
	return jsDate.toLocaleDateString(locale, {year: 'numeric', month: 'numeric', day: 'numeric', timeZone: timeZone});
}
function getDateTextDisplay(jsDate, locale="fr-FR", timeZone="Europe/Paris") {
	return jsDate.toLocaleDateString(locale, {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', timeZone: timeZone});
}

function getTimeDisplay(jsDate, locale="fr-FR", timeZone="Europe/Paris") {
	return jsDate.toLocaleTimeString(locale, {hour: 'numeric', minute: 'numeric', timeZone: timeZone});
}
function getTimeDigitalDisplay(jsDate, locale="fr-FR", timeZone="Europe/Paris") {
	return jsDate.toLocaleTimeString(locale, {hour: '2-digit', minute: '2-digit', second: '2-digit', timeZone: timeZone});
}
function getMonthName(jsDate, locale="fr-FR", isShort=false) {
	return jsDate.toLocaleDateString(locale, {month: (isShort?'short':'long')});
}

// ---------- String ----------

String.prototype.capitalize = function() {
	return this.charAt(0).toUpperCase() + this.slice(1);
}

// ---------- File ----------

function formatFileSize(fileSizeInBytes, fractionDigits, locale) {
	fractionDigits = (typeof fractionDigits != 'undefined' ? fractionDigits : 2);
	var i = -1;
	var byteUnits = ['kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
	if (fileSizeInBytes === 0) {
		return '0 ' + byteUnits[0];
	}
	do {
		fileSizeInBytes = fileSizeInBytes / 1024;
		i++;
	}
	while (fileSizeInBytes > 1024);
	//var size = Math.max(fileSizeInBytes, 0.1).toFixed(fractionDigits);
	var size = Math.max(fileSizeInBytes, 0.1);
	return (new Intl.NumberFormat(locale, {
		maximumFractionDigits: fractionDigits
	}).format(size)) + ' ' + byteUnits[i];
}

// ---------- Cookies ----------

function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+ d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for(var i = 0; i <ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) === 0) {
			return c.substring(name.length, c.length);
		}
	}
	return null;
}
function eraseCookie(name) {
	Cookie.set(name,"",-1);
}