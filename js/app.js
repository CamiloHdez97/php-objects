//funcion añadir filas
let num = 1;

function agregarFila() {
  let tbody = document.querySelector('#addItemtbody');
  num++;

  let tr = document.createElement('tr');
  tr.innerHTML = /* html */`
    <tr>
      <th scope="row" id="${num}">${num}</th>   
      <td>
        <input required="" type="text" name="${num}[]" class="input">
      </td>            
      <td>                        
        <input required="" type="text" name="${num}[]" class="input">
      </td>
      <td>                       
        <input required="" type="text" name="${num}[]" class="input">
      </td>
      <td>                       
        <input required="" type="text" name="${num}[]" class="input">
      </td>
      <td>                       
        <a name="" id="" class="btn btn-success" href="#" role="button">+</a>
        <a name="" id="" class="btn btn-danger" href="#" role="button">-</a>
      </td>
    </tr>
  `;

  tbody.appendChild(tr);

  console.log('entra');

  return num;
}

document.querySelector("#addItemtbody").addEventListener("click", (e) => {
  if (e.target.classList.contains('btn-success')) {
    agregarFila();
  } else if (e.target.classList.contains('btn-danger')) {
    const row = e.target.parentNode.parentNode;
    const position = parseInt(row.querySelector('th').getAttribute('id'));
    row.remove();
    num--;
    return position;
  }

  e.preventDefault();
  e.stopPropagation();
});





//funcion para eliminar filas

document.querySelector('#addItemtbody').addEventListener('click', (e) => {
    if (e.target.classList.contains('btn-danger')) {
      const row = e.target.parentNode.parentNode;
      row.remove();
    }
  });
  


//var myModal = document.querySelector('.mymodal')
//var myInput = document.querySelector('.boton')

//myModal.addEventListener('shown.bs.modal', function () {
//  myInput.focus()
//})


