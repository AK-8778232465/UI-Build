$(document).ready(function () {
    $('#example').DataTable();
});

var select = $('select[aria-label="Default select example"]');
$.getJSON('{{asset(data/page4data.json)}}', function (data) {
    var borrowerNames = [];
    $.each(data, function (index, value) {
        borrowerNames.push(value["Borrower Name"]);
    });
    select.find('option').remove();
    select.append($('<option>').text('Borrower Name').attr('selected', true).css('font-size', '14px'));
    $.each(borrowerNames, function (index, value) {
        select.append($('<option>').text(value).val(value).css('font-size', '14px'));
    });


});

function changeButtonStyle(button) {
    var buttons = document.getElementsByClassName("btn1");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("active");
    }
    button.classList.add("active");
}

$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('#sidebarCollapse1').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var arrows = document.querySelectorAll(".btn1");

    arrows.forEach(function (arrow) {
        arrow.addEventListener("click", function () {
            this.classList.toggle("rotated");
        });
    });
});

function updateOptionsDate(value) {
    const datalist = document.querySelector('#list-date');
    datalist.innerHTML = ''; // clear existing options
    if (value.length >= 1) {
        // retrieve options using AJAX
        $.getJSON("../data/page4data.json", function (data) {
            const uniqueDates = [...new Set(data.map(item => item['Date']))];

            uniqueDates
                .filter(date => {
                    const dateStr = date.toLowerCase();
                    const monthStr = dateStr.slice(0, 2);
                    const monthWithLeadingZero = ("0" + monthStr).slice(-2);
                    return (monthStr === "0" + value || monthWithLeadingZero === value) && dateStr.indexOf('/', 3) !== -1;
                })
                .forEach(date => {
                    datalist.appendChild(createOptionDate(date));
                });
        });
    }
}

function createOptionDate(value) {
    const option = document.createElement('option');
    option.value = value;
    return option;
}



$(document).ready(function () {

    var table = $('#glide-table').DataTable({
        "ajax": {
            "url": "../data/page4data.json",
            "dataSrc": ""
        },
        "columns": [{
                "data": "Scenario Name"
            },
            {
                "data": "Borrower Name"
            },
            {
                "data": "Date"
            },
            {
                "data": "Loan Officer"
            },
            {
                "data": "Loan Purpose"
            },
            {
                "data": "Broker Name"
            },
            {
                data: null,
                render: function (data, type, row) {
                    if ((data.Action).toLowerCase() == "initiate pricing" || (data.Action).toLowerCase() == "submit loan" || (data.Action).toLowerCase() == "approved") {
                        return '<a style="font: normal normal normal 11px/17px Poppins;letter-spacing: 0px;color: #8AB7E9;" href="#">' + data.Action + '</a>';
                    } else {
                        return data.Action;
                    }
                }
            }
        ],
        "fnInitComplete": function () {
            $('select[name="glide-table_length"]').removeClass('form-select');
            $('#glide-table').find('.my-table-header').hide();
        },
        "pagingType": "full_numbers",
        "scrollY": 542,
        "scrollX": true,
        "paging": true,
        "scrollCollapse": true,
        "language": {
            "paginate": {
                "first": '<i class="fa-solid fa-angles-left" style="font-size:12px"></i>',
                "last": '<i class="fa-solid fa-angles-right" style="font-size:12px"></i>',
                "previous": '<i class="fa-solid fa-angle-left" style="font-size:12px"></i>',
                "next": '<i class="fa-solid fa-angle-right" style="font-size:12px"></i>',
                "sInfo": "_START_ - _END_ of _TOTAL_",
                "sInfoEmpty": "0 - 0 of 0",
                "sInfoFiltered": "",
                "sLengthMenu": "Show _MENU_"
            }
        },
        "drawCallback": function (settings) {
            
            var pagination = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
            var pageInfo = $(this).DataTable().page.info();
            var currentPage = pageInfo.page + 1;
            var totalPages = pageInfo.pages;
            var paginationHtml = '';
            paginationHtml += '<a class="paginate_button first"  href="#" data-page="first"><i style="opacity: 1;" class="fa-solid fa-angles-left text-dark" style="font-size:12px;color:#707070"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
            paginationHtml += '<a class="paginate_button previous"  href="#" data-page="prev"><i style="opacity: 1;" class="fa-solid fa-angle-left text-dark" style="font-size:12px;color:#707070"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
            paginationHtml += '<span class="paginate_button current"> ' + currentPage + '<span style="height:10px;font-size:8px;color:#707070">&nbsp; / &nbsp;</span>' + totalPages + ' </span><span>&nbsp;&nbsp;&nbsp;</span>';
            paginationHtml += '<a class="paginate_button next" href="#" data-page="next"><i style="opacity: 1;" class="fa-solid fa-angle-right text-dark" style="color:#707070;font-size:12px"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
            paginationHtml += '<a class="paginate_button last"  href="#" data-page="last"><i style="opacity: 1;" class="fa-solid fa-angles-right text-dark" style="color:#707070;font-size:12px"></a>';
            pagination.html(paginationHtml);

            // attach click event listener to navigation links
            pagination.find('a').on('click', function (e) {
                e.preventDefault();
                var page = $(this).data('page');
                if (page === 'prev') {
                    table.page('previous').draw('page');
                } else if (page === 'next') {
                    table.page('next').draw('page');
                } else if (page === 'first') {
                    table.page('first').draw('page');
                } else if (page === 'last') {
                    table.page('last').draw('page');
                } else {
                    table.page(page - 1).draw('page');
                }
            });
        },
        "dom": "<'row'<'col-sm-6 col-md-2  d-sm-flex  justify-content-sm-center justify-content-lg-start text-center'i><'col-sm-6 col-md-2'l><'col-md-6'><'col-sm-6 col-md-2'p>>" + "<'row'<'col-sm-12'tr>>",
        "language": {
            "lengthMenu": "Show&nbsp;&nbsp;&nbsp; _MENU_",
            "info": "_START_ to _END_ of _TOTAL_",
            "sortAsc": '<i class="fa fa-sort-alpha-asc"></i> Ascending',
            "sortDesc": '<i class="fa fa-sort-alpha-desc"></i> Descending'
        }
    });

    $('#reloadButton').on('click', function () {
        table.ajax.reload();
        $('#date-filter').val('');
        $('#borrower-name-filter').val('');
    });

    $(".btn1").click(function () {
        $(".btn1").removeClass("active");
        $(this).addClass("active");
    });
    $('.btn1').click(function () {
        $('.dataTables_scrollHeadInner').css('width', '100%');
        $('.datatable').css('width', '100%');
    });
    $(".btn2").click(function () {
        $(".btn2").removeClass("active1");
        $(this).addClass("active1");
    });

    $(document).ready(function () {
        // Add reload button after "1 to 10 of X entries" text
        var reloadButton = $('<button id="reloadButton" class="reloadButton" style="background-color:#FCFCFC;border:none;margin-left:10px;margin-top:5px;" type="button"><img src="asset/img/reload.svg" alt=""></button>');
        $('.dataTables_info').after(reloadButton);
        reloadButton.click(function () {
            table.ajax.reload();
            $('#date-filter').val('');
            $('#borrower-name-filter').val('');
        });
    });

});
