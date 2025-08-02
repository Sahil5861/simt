const SweetAlert = function () {
    const _componentSweetAlert = function () {
        const swalWarningElement = document.querySelector('#sweet_warning');
        if (swalWarningElement) {
            swalWarningElement.addEventListener('click', function () {
                swalInit.fire({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this imaginary file!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!'
                });
            });
        }
    };
    return {
        initComponents: function () {
            _componentSweetAlert();
            _componentSelect2();
            _componentMultiselect();
        }
    }
    
}();

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/firebase-messaging-sw.js')
      .then((registration) => {
        console.log('Service Worker registered with scope:', registration.scope);
      })
      .catch((err) => {
        console.error('Service Worker registration failed:', err);
      });
  }
  