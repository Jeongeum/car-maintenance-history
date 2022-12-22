const abi = [
	{
		"constant": false,
		"inputs": [
			{
				"name": "_carNum",
				"type": "string"
			},
			{
				"name": "_vin",
				"type": "string"
			},
			{
				"name": "_co",
				"type": "string"
			},
			{
				"name": "_carname",
				"type": "string"
			},
			{
				"name": "_modelYear",
				"type": "uint256"
			},
			{
				"name": "_exhaust",
				"type": "uint256"
			},
			{
				"name": "_fuel",
				"type": "string"
			}
		],
		"name": "setCar",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_carNum",
				"type": "string"
			},
			{
				"name": "_vin",
				"type": "string"
			},
			{
				"name": "_carCenter",
				"type": "string"
			},
			{
				"name": "_carDetail",
				"type": "string"
			},
			{
				"name": "_distance",
				"type": "uint256"
			}
		],
		"name": "setInfo",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "carNum",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "vin",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "carCenter",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "carDetail",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "distance",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "timestamp",
				"type": "uint256"
			}
		],
		"name": "cCar",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "carNum",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "vin",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "co",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "carname",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "modelYear",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "exhaust",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "fuel",
				"type": "string"
			}
		],
		"name": "bCar",
		"type": "event"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "basic_info",
		"outputs": [
			{
				"name": "carNum",
				"type": "string"
			},
			{
				"name": "vin",
				"type": "string"
			},
			{
				"name": "co",
				"type": "string"
			},
			{
				"name": "carname",
				"type": "string"
			},
			{
				"name": "modelYear",
				"type": "uint256"
			},
			{
				"name": "exhaust",
				"type": "uint256"
			},
			{
				"name": "fuel",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "car_info",
		"outputs": [
			{
				"name": "carNum",
				"type": "string"
			},
			{
				"name": "vin",
				"type": "string"
			},
			{
				"name": "carCenter",
				"type": "string"
			},
			{
				"name": "carDetail",
				"type": "string"
			},
			{
				"name": "distance",
				"type": "uint256"
			},
			{
				"name": "timestamp",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getBTotal",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "_number",
				"type": "uint256"
			}
		],
		"name": "getCar",
		"outputs": [
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "getCTotal",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "_number",
				"type": "uint256"
			}
		],
		"name": "getInfo",
		"outputs": [
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "string"
			},
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	}
]
