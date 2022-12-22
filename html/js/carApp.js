typeof web3 !== "undefined"
  ? (web3 = new Web3(web3.currentProvider))
  : (web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:7545")));

if (web3.isConnected()) {
  console.log("connected");
} else {
  console.log("not connected");
  exit;
}

const contractAddress = "0xEF2273708C78Aa26Dc0215D86675C7Ea47189967";
const smartContract = web3.eth.contract(abi).at(contractAddress);

function init() {
  // 첫번째 계정으로 주소 설정
  $("#account").val(web3.eth.accounts[0]);
  moment.locale();
}

async function showList() {
  const table = document.getElementById("table1");
  const total = smartContract.getCTotal().toString();

  smartContract.cCar().watch(async (err, res) => {
    if (!err) {
      const row = table.insertRow();
      const cell1 = row.insertCell(0);
      const cell2 = row.insertCell(1);
      const cell3 = row.insertCell(2);
      const cell4 = row.insertCell(3);
      const cell5 = row.insertCell(4);
      const cell6 = row.insertCell(5);

      const time = (await res.args.timestamp.toString()) * 1000;
      cell1.innerHTML = await res.args.carNum;
      cell2.innerHTML = await res.args.vin;
      cell3.innerHTML = await res.args.carCenter;
      cell4.innerHTML = await res.args.carDetail;
      cell5.innerHTML = await res.args.distance;
      cell6.innerHTML = moment(time).format("YYYY-MM-DD hh:mm");
    }
  });

  console.log(total);
  for (let i = 0; i < total; i++) {
    const cCar = await smartContract.getInfo(i);
    const toString = await cCar.toString();
    const strArray = toString.split(",");

    const time = strArray[5] * 1000;
    const row = table.insertRow();
    const cell1 = row.insertCell(0);
    const cell2 = row.insertCell(1);
    const cell3 = row.insertCell(2);
    const cell4 = row.insertCell(3);
    const cell5 = row.insertCell(4);
    const cell6 = row.insertCell(5);
    cell1.innerHTML = strArray[0];
    cell2.innerHTML = strArray[1];
    cell3.innerHTML = strArray[2];
    cell4.innerHTML = strArray[3];
    cell5.innerHTML = strArray[4];
    cell6.innerHTML = moment(time).format("YYYY-MM-DD hh:mm");
  }
}

function setInfo() {
    smartContract.setInfo(
      $("#cCarNum").val(),
      $("#cVin").val(),
      $("#cCenter").val(),
      $("#cDetail").val(),
      $("#cDistance").val(),
      { from: $("#account").val(), gas: 3000000 },
      (err, result) => {
        if (!err) alert("트랜잭션이 성공적으로 전송되었습니다.\n" + result);
      }
    );


}

async function showList2() {
  const table = document.getElementById("table2");
  const total = smartContract.getBTotal().toString();

  smartContract.bCar().watch(async (err, res) => {
    if (!err) {
      const row = table.insertRow();
      const cell1 = row.insertCell(0);
      const cell2 = row.insertCell(1);
      const cell3 = row.insertCell(2);
      const cell4 = row.insertCell(3);
      const cell5 = row.insertCell(4);
      const cell6 = row.insertCell(5);
      const cell7 = row.insertCell(6);

      cell1.innerHTML = await res.args.carNum;
      cell2.innerHTML = await res.args.vin;
      cell3.innerHTML = await res.args.co;
      cell4.innerHTML = await res.args.carname;
      cell5.innerHTML = await res.args.modelYear;
      cell6.innerHTML = await res.args.exhaust;
      cell7.innerHTML = await res.args.fuel;
    }
  });

  console.log(total);
  for (let i = 0; i < total; i++) {
    const bCar = await smartContract.getCar(i);
    const toString = await bCar.toString();
    const strArray = toString.split(",");

    const row = table.insertRow();
    const cell1 = row.insertCell(0);
    const cell2 = row.insertCell(1);
    const cell3 = row.insertCell(2);
    const cell4 = row.insertCell(3);
    const cell5 = row.insertCell(4);
    const cell6 = row.insertCell(5);
    const cell7 = row.insertCell(6);
    cell1.innerHTML = strArray[0];
    cell2.innerHTML = strArray[1];
    cell3.innerHTML = strArray[2];
    cell4.innerHTML = strArray[3];
    cell5.innerHTML = strArray[4];
    cell6.innerHTML = strArray[5];
    cell7.innerHTML = strArray[6];
  }
}

function setCar() {
    smartContract.setCar(
      $("#cCarNum").val(),
      $("#cVin").val(),
      $("#cCo").val(),
      $("#cCarname").val(),
      $("#cModelYear").val(),
      $("#cExhaust").val(),
      $("#cFuel").val(),
      { from: $("#account").val(), gas: 3000000 },
      (err, result) => {
        if (!err) alert("트랜잭션이 성공적으로 전송되었습니다.\n" + result);
      }
    );

}

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("searchTable");
  tr = table.getElementsByTagName("tr");

  for (let i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }$("#searchTable").show();
}

$(function() {
  init();
  showList();
  showList2();
});
