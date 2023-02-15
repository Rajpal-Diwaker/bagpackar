// Give the service worker access to Firebase Messaging.
importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase-app.js')
importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js')

// Initialize the Firebase app in the service worker by passing in the messagingSenderId.
var config = {
    messagingSenderId: "1036820468864"
};
firebase.initializeApp(config);

// Retrieve an instance of Firebase Data Messaging so that it can handle background messages.
const messaging = firebase.messaging()
messaging.setBackgroundMessageHandler(function(payload) {
 var notificationTitle = payload.data.title; //or payload.notification or whatever your payload is
  var notificationOptions = {
    body: payload.data.body,
    icon: payload.data.icon,
    data: { url:payload.data.click_action }, //the url which we gonna use later
    actions: [{action: "open_url", title: "Read Now"}]
  };

  return self.registration.showNotification(notificationTitle,
    notificationOptions);
});