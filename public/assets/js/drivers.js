$(function () {
    let del_id = '';
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-primary',
            cancelButton: 'btn btn-gray'
        },
        buttonsStyling: false
    });
    

    $('.driver-del-btn').click(function() {
        del_id = $(this).attr('data-id');

        swalWithBootstrapButtons.fire({
            title: 'Are you sure you want to delete?',
            showCancelButton: true,
            confirmButtonClass: "btn-danger me-2",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then((res) => {
            if(res.isConfirmed) {
                // delete
            }
        });
    });

    $('.lisence-image').click(function () {
        let image = $(this).attr('src');
        $('#modal-lisence-image').attr('src', image);
        $('#modal-lisence').modal();
    });
});

function previewImage(event, previewId) {
    const reader = new FileReader();
    reader.onload = function(){
        const output = document.getElementById(previewId);
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}