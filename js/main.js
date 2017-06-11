(function () {
    'use strict'

    var dialog = document.querySelector('dialog'),
        showDialogButton = document.querySelector('#upload-file-button');

    if (!dialog.showModal) {
        dialogPolyfill.registerDialog(dialog);
    }

    showDialogButton.addEventListener('click', function () {
        dialog.showModal();
    });
    
    dialog.querySelector('.close').addEventListener('click', function () {
        dialog.close();
    });

})();