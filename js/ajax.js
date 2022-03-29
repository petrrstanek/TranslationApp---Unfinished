const alertSuccess = document.querySelector('.alert-success');
const alertDanger = document.querySelector('.alert-danger');
const userInput = document.getElementById('user-input');
const engInput = document.querySelector('eng-space');
const msgBoxS = document.getElementById('message-box-success');
const msgBoxD = document.getElementById('message-box-danger');
const div = document.querySelector('.amount');

function submit() {
  const formData = document.getElementsByClassName('form-data');
  const fetchData = new FormData();

  for (let i = 0; i < formData.length; i++) {
    fetchData.append(formData[i].name, formData[i].value);
  }

  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'translation.php');
  xhr.send(fetchData);

  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      const timeout = setTimeout(removeMsg, 1500);
      removeMsg();

      if (xhr.responseText == 'Super! Správně!') {
        alertSuccess.style.display = 'block';
        msgBoxS.innerHTML = xhr.responseText;
      }

      if (xhr.responseText == 'Zadal jste špatný překlad') {
        alertDanger.style.display = 'block';
        msgBoxD.innerHTML = xhr.responseText;
      }

      if (xhr.responseText == 'Nezadal jste...') {
        alertDanger.style.display = 'block';
        msgBoxD.innerHTML = xhr.responseText;
      }

      if (xhr.responseText == 'Dokončil jste test...') {
        window.location.href = 'dashboard.php';
        alertSuccess.style.display = 'block';
        msgBoxS.innerHTML = xhr.responseText;
      }
      userInput.value = '';
    }
  };
}

function removeMsg() {
  alertSuccess.style.display = 'none';
  alertDanger.style.display = 'none';
}

// function feeder(){
//     const formData = document.getElementsByClassName('form-data');
//     const fetchData = new FormData();

//     for(let i = 0; i < formData.length; i++){
//         fetchData.append(formData[i].name, formData[i].value);
//     }
//     fetchData = undefined;

//     let xhr = new XMLHttpRequest();
//     xhr.open('POST', 'feeder.php');
//     xhr.send(fetchData)

//     xhr.onreadystatechange = function(){
//         if(xhr.readyState === 4 && xhr.status === 200){
//             engInput.value = xhr.responseText
//         }
//     }
// }