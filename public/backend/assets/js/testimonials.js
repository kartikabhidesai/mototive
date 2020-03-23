var Testimonials = function () {

    var list = function () {

        var dataArr = {};
        var columnWidth = {"width": "10%", "targets": 0};

        var arrList = {
            'tableID': '#testimonialsdatatable',
            'ajaxURL': baseurl + "testimonials-ajaxAction",
            'ajaxAction': 'getdatatable',
            'postData': dataArr,
            'hideColumnList': [],
            'noSearchApply': [0, 5],
            'noSortingApply': [0, 1, 5],
            'defaultSortColumn': 0,
            'defaultSortOrder': 'desc',
            'setColumnWidth': columnWidth
        };
        getDataTable(arrList);

        var form = $('#addtestimonials');
        var rules = {
            name: {required: true},
            position: {required: true},
            message: {required: true},
            image: {required: true},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });

        $('body').on("click", ".edittestimonials", function () {
            var id = $(this).attr("data-id");
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "testimonials-ajaxAction",
                data: {'action': 'edittestimonials', 'id': id},
                success: function (data) {

                    $(".editdiv").html(data);
                    handleFormValidate(form, rules, function (form) {
                        handleAjaxFormSubmit(form, true);
                    });
                }
            });
        });

        var form = $('#edittestimonialsform');
        var rules = {
            name: {required: true},
            position: {required: true},
            message: {required: true},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });

        $('body').on("click", ".deletetestimonials", function () {
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
                url: baseurl + "testimonials-ajaxAction",
                data: {'action': 'deletetestimonials', 'data': data},
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