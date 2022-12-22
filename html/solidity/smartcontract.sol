pragma solidity ^0.4.22;

contract car_management{
    uint cTotal;
    uint bTotal;

    struct car_information{ // 정비이력
        string carNum; // 차량번호
        string vin; //차대번호
        string carCenter; // 카센터
        string carDetail; //정비 내역
        uint distance; // 주행거리
        uint timestamp;
    }

    struct basic_information{ // 차량 기본정보
        string carNum; // 차량번호
        string vin; //차대번호
        string co; //제조사
        string carname; //모델명
        uint modelYear; //연식
        uint exhaust; //배기량
        string fuel; //사용연료
    }

    event cCar (
        string carNum,
        string vin,
        string carCenter,
        string carDetail,
        uint distance,
        uint timestamp
    );

    event bCar (
        string carNum,
        string vin,
        string co,
        string carname,
        uint modelYear,
        uint exhaust,
        string fuel
    );


    car_information[] public car_info;
    basic_information[] public basic_info;

    function setInfo (string _carNum, string _vin, string _carCenter, string _carDetail, uint _distance) public { // 정비이력
        car_info.push(car_information(_carNum, _vin, _carCenter, _carDetail, _distance, block.timestamp));
        cTotal++;
        emit cCar(_carNum, _vin, _carCenter, _carDetail, _distance, block.timestamp);
    }

    function setCar (string _carNum, string _vin, string _co, string _carname, uint _modelYear, uint _exhaust, string _fuel) public { // 차량 기본정보
        basic_info.push(basic_information(_carNum, _vin, _co, _carname, _modelYear, _exhaust, _fuel));
        bTotal++;
        emit bCar(_carNum, _vin, _co, _carname, _modelYear, _exhaust, _fuel);
    }

    function getInfo(uint _number) public view returns(string, string, string, string, uint, uint) { // 정비이력
        return (car_info[_number].carNum, car_info[_number].vin, car_info[_number].carCenter, car_info[_number].carDetail, car_info[_number].distance, car_info[_number].timestamp);
    }

    function getCar(uint _number) public view returns(string, string, string, string, uint, uint, string) { // 차량 기본정보
        return (basic_info[_number].carNum, basic_info[_number].vin, basic_info[_number].co, basic_info[_number].carname, basic_info[_number].modelYear, basic_info[_number].exhaust, basic_info[_number].fuel);
    }

    function getCTotal() public view returns (uint) {
        return cTotal;
    }

    function getBTotal() public view returns (uint) {
        return bTotal;
    }
}
