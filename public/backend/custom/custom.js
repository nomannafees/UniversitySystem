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
            popup: 'dark-popup',
            title: 'dark-title',
            confirmButton: 'dark-confirm-button',
            cancelButton: 'dark-cancel-button'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    });

}

$(document).ready(function () {

    $('input.required, select.required').on('input', function () {
        const $this = $(this);
        const name = $this.attr('id');
        $this.removeClass('bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500');
        $this.removeClass('bg-green-50 border-green-500 text-green-900 placeholder-green-700 focus:ring-green-500 focus:border-green-500');
        $this.next('.feedback-message').remove();
        $this.closest('div').find('.error-msg').remove();
        if (!$this.val() || $this.val().trim() === '') {
            $this.addClass('bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500');
            if ($this.closest('div').find('.error-msg').length === 0) {
                $this.after('<p class="feedback-message error-msg mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span>This ' + name + ' is required!</p>');
            }
        } else {
            $this.addClass('bg-green-50 border-green-500 text-green-900 placeholder-green-700 focus:ring-green-500 focus:border-green-500');
            if ($this.next('.feedback-message').length === 0) {
                $this.after('<p class="feedback-message mt-2 text-sm text-green-600 dark:text-green-500"><span class="font-medium">Alright!</span> Looks good!</p>');
            }
        }
    });


    $('#form').on('submit', function (e) {
        let isValid = true;
        $('.feedback-message').remove();
        $('input.required, select.required').each(function () {
            const $this = $(this);
            const name = $this.attr('id');
            $('.error-msg').remove();
            $this.removeClass('bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500');
            $this.removeClass('bg-green-50 border-green-500 text-green-900 placeholder-green-700 focus:ring-green-500 focus:border-green-500');
            if (!$(this).val() || $(this).val().trim() === '') {
                // Add red border for invalid inputs
                $this.addClass('bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500');
                if ($this.next('.feedback-message').length === 0) {
                    $this.after('<p class="feedback-message mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium"></span> This ' + name + ' is required!</p>');
                }
                isValid = false;
            } else {
                $this.addClass('border-green-500 focus:ring-green-500 text-green-900 bg-green-50 placeholder-green-700');
            }
        });
        if (!isValid) {
            e.preventDefault();
        }
    });

});
