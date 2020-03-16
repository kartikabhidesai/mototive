var Readmoreblog = function () {

    var list = function () {
        
        var form = $('#blogcommentform');
        var rules = {
            blg_cmt_name: {required: true},
            blg_cmt_email: {required: true,email:true},
            blg_cmt: {required: true},
        };

        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        }); 
    }
    return {
        init: function () {
            list();
        }

    }
}();