$(document).ready(function () {

//  Add New Company Validation 
// path : /views/admin/company/add.blade.php

$("#add_company_form").validate({
    errorClass: 'text-danger',
    rules: {
        title: {
            required: true,
            minlength: 3,
        },
    },
    messages: {
        title: {
            required: "Company title cannot be empty",
            minlength: "Title must be greater than 2 characters",
        },
    }
});

//  Edit Company Details Validation 
// path : /views/admin/company/edit.blade.php

$("#edit_company_form").validate({
    errorClass: 'text-danger',
    rules: {
        title: {
            required: true,
            minlength: 3,
            lettersonly: true,
        },
    },
    messages: {
        title: {
            required: "Company title cannot be empty",
            minlength: "Title must be greater than 2 characters",
            lettersonly: "Company Name must not be integer",
        },
    }
});
});
