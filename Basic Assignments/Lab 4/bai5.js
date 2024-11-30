const contactList = [];

function addContact() {
    const nameInput = document.getElementById("name");
    const phoneInput = document.getElementById("phone");

    const name = nameInput.value;
    const phone = phoneInput.value;

    if (name && phone) {
        const contact = { name, phone };
        contactList.push(contact);

        // Thêm liên hệ mới vào danh sách hiển thị
        const contactListElement = document.getElementById("contact-list");
        const listItem = document.createElement("li");
        listItem.textContent = `${name}: ${phone}`;
        contactListElement.appendChild(listItem);

        // Xóa dữ liệu từ các trường nhập
        nameInput.value = "";
        phoneInput.value = "";
    } else {
        alert("Vui lòng nhập tên và số điện thoại.");
    }
}
