var Event = function() {
}
Event.registerAPIEvents = function() {
	gapi.hangout.onParticipantsChanged.add(function(eventObj) {
	});
	gapi.hangout.layout.getDefaultVideoFeed().onDisplayedParticipantChanged.add(function(eventObj) {
	});
}
