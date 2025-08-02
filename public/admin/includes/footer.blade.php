<!-- Footer -->
<div class="navbar navbar-sm navbar-footer border-top px-lg-0" style="display: none;">
    <div class="container-fluid container-boxed">
        {{-- <span>&copy; 2024 <a
                href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">{{env('COMPANY_NAME')}}
                Web App Kit</a></span> --}}
        {{-- <span>&copy; 2024 <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">{{env('APP_NAME')}} Web App Kit</a></span>         --}}
    </div>
</div>
<!-- /footer -->

{{-- @if (Auth::user()->role == "vendor")
    <script>
        // Initialize Firebase
        var firebaseConfig = {
            apiKey: "AIzaSyCGhn-v97AtqtnU3ZJBjbxxxdLIThjmIvk",
            authDomain: "pushnotification-55454.firebaseapp.com",
            projectId: "pushnotification-55454",
            storageBucket: "pushnotification-55454.appspot.com",
            messagingSenderId: "722062791574",
            appId: "1:722062791574:android:4eb583dfe255ae109183b7"
        };

        // Initialize Firebase app
        firebase.initializeApp(firebaseConfig);

        // Initialize Firebase Messaging
        const messaging = firebase.messaging();

        // Request permission to show notifications
        document.querySelector('.notify-btn').addEventListener('click', function () {
            Notification.requestPermission().then(function (permission) {
                if (permission === 'granted') {
                    messaging.getToken().then(function (currentToken) {
                        if (currentToken) {
                            console.log('Token received:', currentToken);
                            sendNotification(currentToken);
                        } else {
                            console.log('No registration token available. Request permission to generate one.');
                        }
                    }).catch(function (err) {
                        console.log('An error occurred while retrieving token.', err);
                    });
                } else {
                    console.log('Notification permission denied.');
                }
            }).catch(function (err) {
                console.log('An error occurred while requesting notification permission.', err);
            });
        });

        // Function to send the notification token to the server
        function sendNotification(token) {
            fetch('/send-notification', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',  // Ensure this token is correct
                },
                body: JSON.stringify({ device_token: token }),  // Use JSON.stringify here
            })
                .then(response => response.json())  // Parse response as JSON
                .then(data => {
                    if (data.success) {
                        console.log('Notification sent:', data);
                    } else {
                        console.log('Error sending notification:', data);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        // Handle incoming messages
        messaging.onMessage((payload) => {
            console.log('Message received. ', payload);
            // Customize and display the notification
            const notificationOptions = {
                body: payload.notification.body,
            };
            new Notification(payload.notification.title, notificationOptions);
        });

        // Handle background notifications in Service Worker
        navigator.serviceWorker.register('/firebase-messaging-sw.js')
            .then(function (registration) {
                messaging.useServiceWorker(registration);
            })
            .catch(function (err) {
                console.log('Service Worker registration failed: ', err);
            });
    </script>

@endif --}}