import "./bootstrap";
import "flowbite";
import { DataTable } from "simple-datatables";

document.addEventListener("DOMContentLoaded", function () {
    const dataTable = new DataTable("#search-table", {
        searchable: true,
        perPage: 10,
        perPageSelect: [5, 10, 15, 20, 25],
        sortable: true,
    });
});
