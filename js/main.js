var dialog = document.querySelector('dialog'),
    showDialogButton = document.querySelector('#upload-file-button');

if (!dialog.showModal) {
    dialogPolyfill.registerDialog(dialog);
}

if (showDialogButton) {
    showDialogButton.addEventListener('click', function () {
        dialog.showModal();
    });
}

if (dialog) {
    dialog.querySelector('.close').addEventListener('click', function () {
        dialog.close();
    });
}

document.getElementById("upload").onchange = function () {
    document.getElementById("uploadFile").value = this.files[0].name;
};