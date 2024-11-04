isEdit = false;
function sub() {
  const email = document.getElementById("email").value;

  if (!isEdit) {
    // insertData();
    let info = JSON.parse(localStorage.getItem("email")) || [];
    console.log(info);
    // info.push(data);
    localStorage.setItem("email", JSON.stringify(email));
  } else {
    isEdit = false;
  }
}
