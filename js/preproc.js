document.addEventListener('DOMContentLoaded', function()
{
	let containerNode = document.getElementById("node_list");
	let addButton = document.getElementById("button-for-node");
	let deleteButton = document.getElementById("button-for-delete-node");
	let checkBox = document.getElementById("indeterminate-checkbox");

	addButton.addEventListener('click', function()
	{
		addButtonClick(containerNode);
	})

	deleteButton.addEventListener('click', function()
	{
		deleteButtonClick(containerNode);
	})
})


function addButtonClick(containerNode)
{
	let nodeForm = document.createElement("div");
	nodeForm.classList.add("nodeItem");
	let countNode = containerNode.getElementsByClassName("nodeItem").length + 1;
	nodeForm.innerHTML =
	`
	<form action="preproc.php" method="POST">
	<div class="valign-wrapper" name="uzel" id="node-input-${countNode}" style="width: 100%">
        <div><font color="white">
          Узел ${countNode}
        </font></div>
        <div class="input-field" style="margin-left: 5%">
          <input type="number" name="" class="validate" id="node-input-${countNode}">
          <label>
            Координата
          </label>
        </div>
        <div class="input-field" style="margin-left: 5%">
          <input type="number" class="validate" id="node-input-${countNode}">
          <label>
            Сосредоточ. нагрузка
          </label>
        </div>
        <div class="input-field" style="margin-left: 5%">
          <input type="number" class="validate" id="node-input-${countNode}">
          <label>
            Распредел. нагрузка
          </label>
        </div>
         <p>
      <label>
        <input id="indeterminate-checkbox" type="checkbox" />
        <span>Установить</span>
      </label>
    </p>
    <p>
      </div>
      <button class="btn waves-effect waves-light btnKryptoHeadersell" type="submit" name="action">Подтвердить</button>
      </form>
	`;

	containerNode.appendChild(nodeForm);
}

function deleteButtonClick(containerNode)
{
	let nodeList = containerNode.getElementsByClassName("nodeItem");
	let nodeListLength = nodeList.length;
	nodeList[nodeListLength - 1].remove();
}


// function saveFile() {
//   var data = document.getElementById('input').value;
//   var a = document.getElementById("linkForSavingFiles");
//   var file = new Blob([data], {
//     type: 'plain/text'
//   });
//   a.href = URL.createObjectURL(file);
//   a.download = 'file.txt';
//   a.click();
// }

function saveFile(){
  let stroka;
  let blob = new Blob([stroka], {type: "text/plain"});
  let link = document.createElement("a");
  link.setAttribute("href", URL.createObjectURL(blob));
  link.setAttribute("download", "my-text.txt");
  link.click();
}

function pusto(){
  console.log(1);
}