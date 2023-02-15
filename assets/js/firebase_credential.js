
  var firebase_Config = {
    apiKey: "AIzaSyA1Ca6nGLCboQ0kecBg_7PcFB0dntAvEOc",
    authDomain: "bagpackar-fcd4d.firebaseapp.com",
    databaseURL: "https://bagpackar-fcd4d.firebaseio.com",
    projectId: "bagpackar-fcd4d",
    storageBucket: "bagpackar-fcd4d.appspot.com",
    messagingSenderId: "1036820468864",
    appId: "1:1036820468864:web:8dd138458b6b7703c94265",
    measurementId: "G-1SNQCMDCQ4"
  };
  firebase.initializeApp(firebase_Config);
   window.onload=function () {
  render();
};
function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}
