var Client = function () {

    var list = function () {

        var dataArr = {};
        var columnWidth = {"width": "10%", "targets": 0};

        var arrList = {
            'tableID': '#clientdatatable',
            'ajaxURL': baseurl + "client-ajaxAction",
            'ajaxAction': 'getdatatable',
            'postData': dataArr,
            'hideColumnList': [],
            'noSearchApply': [0],
            'noSortingApply': [0, 5],
            'defaultSortColumn': 0,
            'defaultSortOrder': 'desc',
            'setColumnWidth': columnWidth
        };
        getDataTable(arrList);

        var form = $('#addclient');
        var rules = {
            name: {required: true},
            phone: {required: true},
            email: {required: true},
            address: {required: true},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });

        $('body').on("click", ".editclient ", function () {
            var id = $(this).attr("data-id");
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "client-ajaxAction",
                data: {'action': 'editclient', 'id': id},
                success: function (data) {

                    $(".editdiv").html(data);
                    handleFormValidate(form, rules, function (form) {
                        handleAjaxFormSubmit(form, true);
                    });
                }
            });
        });

        var form = $('#editclientform');
        var rules = {
            category: {required: true},
            title: {required: true},
            author: {required: true},
            content: {required: true},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });

        $('body').on("click", ".deleteclient", function () {
            var id = $(this).attr("data-id");
            setTimeout(function () {
                $('.yes-sure:visible').attr('data-id', id);
            }, 500);
        });

        $('body').on('click', '.yes-sure', function () {
            var id = $(this).attr('data-id');
            var data = {id: id, _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "client-ajaxAction",
                data: {'action': 'deleteclient', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });
    }

    return{
        init: function () {
            list();
        }
    }
}();