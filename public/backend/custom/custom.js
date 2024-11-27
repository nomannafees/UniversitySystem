function confirmDelete(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        customClass: {
            popup: 'dark-popup', // Class for the modal
            title: 'dark-title', // Class for the title
            confirmButton: 'dark-confirm-button', // Class for the confirm button
            cancelButton: 'dark-cancel-button' // Class for the cancel button
        }
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    });
}
