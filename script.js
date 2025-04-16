$(document).ready(function () {
    loadContacts();

    $("#addBtn").click(function () {
        let name = $("#name").val();
        let email = $("#email").val();
        let phone = $("#phone").val();

        $.post("add_contact.php", { name, email, phone }, function () {
            $("#name, #email, #phone").val("");
            loadContacts();
        });
    });

    $("#searchBox").on("input", function () {
        let search = $(this).val();
        loadContacts(search);
    });

    function loadContacts(search = "") {
        $.get("get_contacts.php", { search }, function (data) {
            $("#contactTable tbody").html(data);
        });
    }

    window.deleteContact = function (id) {
        $.post("delete_contact.php", { id }, function () {
            loadContacts();
        });
    }
});

$(document).on("click", ".editBtn", function () {
    let row = $(this).closest("tr");
    let id = row.data("id");
    let name = row.find(".name").text();
    let email = row.find(".email").text();
    let phone = row.find(".phone").text();

    row.html(`
        <td><input class='form-control edit-name' value='${name}'></td>
        <td><input class='form-control edit-email' value='${email}'></td>
        <td><input class='form-control edit-phone' value='${phone}'></td>
        <td>
            <button class='btn btn-sm btn-success saveBtn'>Save</button>
            <button class='btn btn-sm btn-secondary cancelBtn'>Cancel</button>
        </td>
    `);
});

$(document).on("click", ".cancelBtn", function () {
    loadContacts();
});

$(document).on("click", ".saveBtn", function () {
    let row = $(this).closest("tr");
    let id = row.data("id");
    let name = row.find(".edit-name").val();
    let email = row.find(".edit-email").val();
    let phone = row.find(".edit-phone").val();

    $.post("update_contact.php", { id, name, email, phone }, function (response) {
        loadContacts();
    });
});
