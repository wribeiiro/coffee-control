var tablePayment

$(document).ready(() => {
    loadTablePayments()
})

function loadTablePayments() {
    
    const url = `${BASE_URL}/payments`

    tablePayment = $(`#tablePayment`).DataTable({
        sPaginationType: "full_numbers",
        destroy: false,
        searching: true,
        responsive: false,
        autoWidth: false,
        language: translateTable(),
        order: [[0, "DESC"]],
        ajax: {
            url: url,
            dataSrc: (data) => {
                return data.data || []
            },
            dataType: 'JSON',
            cache: true,
            error: (e) => {
                $("#newLink").removeAttr("disabled").find("i").removeClass("fa-spinner fa-spin").addClass("fa-plus")
            },
            beforeSend: () => {
                $("#newLink").attr("disabled", true).find("i").removeClass("fa-plus").addClass("fa-spinner fa-spin")
            },
            complete: () => {
                $("#newLink").removeAttr("disabled").find("i").removeClass("fa-spinner fa-spin").addClass("fa-plus")
            }
        },
        lengthChange: true,
        pageLength: 15,
        columns: [
            {
                data: "id",
                width: "20px",
                class: "text-center",
            },
            {
                data: "client_name",
                class: "text-left text-uppercase",
                width: "220px"
            },
            {
                data: "product_name",
                width: "220px",
                class: "text-left text-uppercase",
            },
            {
                data: "price",
                width: "80px",
                class: "text-right",
                render: (data) => {
                    return `R$ ${numberFormat(data, 2)}`
                }
            },
            {
                data: "link",
                class: "text-center text-lowercase font-weight-bold",
                width: "120px"
            },
            {
                data: "status",
                class: "text-center text-uppercase",
                width: "70px"
            },
            {
                data: "expire_in",
                class: "text-center",
                width: "70px"
            }
        ],
        dom: "Bfrtip",
        createdRow: function (row, data) {

        }
    })

    $(`#tablePayment .filters th`).each(function (idx, val) {
        $(this).html(`<input type="text" style="width: 100% !important;height: 24px !important; margin-bottom: 4px !important; border-radius: 3px !important" class="form-control hidden-xs" placeholder=""/>`)
    })

    tablePayment.columns().eq(0).each(function (index) {
        $('input', $(`#tablePayment .filters th`)[index]).on('keyup change', function () {
            table.column(index).search(this.value).draw()
        })
    })

    $(`#tablePayment tbody`).on('click', 'td', function() {

        let tr  = $(this).closest('tr')
        let row = table.row(tr)

        $('#modalPayment').modal()
    })
}