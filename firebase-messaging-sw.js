importScripts("https://www.gstatic.com/firebasejs/9.0.1/firebase-app.js");
importScripts(
    "https://www.gstatic.com/firebasejs/9.0.1/firebase-messaging.js",
);
// For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics.
importScripts(
    "https://www.gstatic.com/firebasejs/9.0.1/firebase-analytics.js",
);

const firebaseConfig = {
  apiKey: "AIzaSyAMdXsj2MGr8_QxAm7h8iYvSFmkOg4hGbw",
  authDomain: "studentmanagementsystem-5cf68.firebaseapp.com",
  projectId: "studentmanagementsystem-5cf68",
  storageBucket: "studentmanagementsystem-5cf68.appspot.com",
  messagingSenderId: "83998176516",
  appId: "1:83998176516:web:eac04c4a42afdffa4f4c51",
  measurementId: "G-WMW93H0TWP"
};


firebase.initializeApp(firebaseConfig);
const messaging=firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
  console.log(payload);
  const notification=JSON.parse(payload);
  const notificationOption={
      body:notification.body,
      icon:notification.icon
  };
  return self.registration.showNotification(payload.notification.title,notificationOption);
});
