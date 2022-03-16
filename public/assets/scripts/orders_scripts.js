function OrderExcelUploadModal() {
    $("#OrderExcelUploadModal").modal('show');
}

function OrderExcelExportModal() {
    $("#OrderExcelExportModal").modal('show');
}

function OrderExcelUploadSubmit() {

}

function OrderStatusChange(order_id) {
    $("#status_order_id").val(order_id);
    $("#OrderStatusChangeModal").modal('show');
}

function OrderUpdateModal(order_id) {
    $("#OrderUpdateModal").modal('show');
}