// Initialize the Firebase app by passing in the messagingSenderId
var originalUrl = window.location.origin;
var config1 = {
  messagingSenderId: "1036820468864"
};
const config = {
   apiKey: "AIzaSyA1Ca6nGLCboQ0kecBg_7PcFB0dntAvEOc",
  authDomain: "bagpackar-fcd4d.firebaseapp.com",
  databaseURL: "https://bagpackar-fcd4d.firebaseio.com",
  projectId: "bagpackar-fcd4d",
  storageBucket: "bagpackar-fcd4d.appspot.com",
  messagingSenderId: "1036820468864",
  appId: "1:1036820468864:web:8dd138458b6b7703c94265",
  measurementId: "G-1SNQCMDCQ4"
};
firebase.initializeApp(config);
const messaging = firebase.messaging();
navigator.serviceWorker.register(originalUrl+'/firebase-messaging-sw.js')
.then(function (registration) {
    messaging.useServiceWorker(registration);
        
    // Request for permission
    messaging.requestPermission()
    .then(function() {
      // console.log('Notification permission granted.'+messaging.getToken());
      //TODO(developer): Retrieve an Instance ID token for use with FCM.
      messaging.getToken()
      .then(function(currentToken) {
        if (currentToken) {
          $('#device_token').val(currentToken);
          $('#device_token1').val(currentToken);
          console.log('Token: ' + currentToken)
          sendTokenToServer(currentToken);
        } else {
          // console.log('No Instance ID token available. Request permission to generate one.');
          setTokenSentToServer(false);
        }
      })
      .catch(function(err) {
        // console.log('An error occurred while retrieving token. ', err);
        setTokenSentToServer(false);
      });
    })
    .catch(function(err) {
      // console.log('Unable to get permission to notify.', err);
    });
});

// Handle incoming messages
messaging.onMessage(function(payload) {
   console.log("Notification received: ", payload);
   // console.log("paylod data:",payload.data.gcm.notification.url);
   
  notificationTitle=payload.data.title;
  notificationOptions={
    body:payload.data.body,
    icon:'./firebase-logo.png',
    badge:payload.data.badge,
    data:payload.data.click_action
  }

  //  var notifiyCount = $('#badgeCount').text();
  //  if (notifiyCount == '') {
  //   notifiyCount = 0;
  //  }
  // var totalCount = parseInt(notifiyCount)+1;
  // console.log(totalCount,'sheenuuuu');
  // $('#badgeCount').text(totalCount);

  $("#onreceive").load(" #onreceive > *");
  $("#onreceive1").load(" #onreceive1 > *");


   var notification=new Notification(notificationTitle,notificationOptions);  
 console.log("notification",notification);
  notification.onclick= function(event){
   console.log("event",notification.data)
   notification.close(); 
   clients.openWindow(event.notification.data); 
}; 

});
 

// Callback fired if Instance ID token is updated.
messaging.onTokenRefresh(function() {
  messaging.getToken()
  .then(function(refreshedToken) {
    // console.log('Token refreshed.');
    // Indicate that the new Instance ID token has not yet been sent 
    // to the app server.
    setTokenSentToServer(false);
    // Send Instance ID token to app server.
    sendTokenToServer(refreshedToken);
  })
  .catch(function(err) {
    // console.log('Unable to retrieve refreshed token ', err);
  });
});

// Send the Instance ID token your application server, so that it can:
// - send messages back to this app
// - subscribe/unsubscribe the token from topics
function sendTokenToServer(currentToken) {
  if (!isTokenSentToServer()) {
    // console.log('Sending token to server...');
    // TODO(developer): Send the current token to your server.
    setTokenSentToServer(true);
  } else {
    // console.log('Token already sent to server so won\'t send it again ' +
    //     'unless it changes');
  }
}

function isTokenSentToServer() {
  return window.localStorage.getItem('sentToServer') == 1;
}

function setTokenSentToServer(sent) {
  window.localStorage.setItem('sentToServer', sent ? 1 : 0);
}
