var Core = function() {
}
Core.loadLayout = function(div) {
	$.get(SERVER_URL + "layout.html", function(data) {
		div.html(data);
	});
}
Core.init() {
	gapi.hangout.onApiReady.add(function(eventObj) {
		if (eventObj.isApiReady) {			
			Event.registerAPIEvents();
		}
	});
}
