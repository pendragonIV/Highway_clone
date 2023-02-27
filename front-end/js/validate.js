function signInvalidate() {
    let count = 0;
    // user name
    let regex_User_name = /^[aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ\s]{8,50}$/;
    let User_name = $("#User_name").val();
    let test_User_name = regex_User_name.test(User_name);
    // mật khẩu
    let regex_Password = /^[a-zA-Z0-9]{8,20}$/;
    let Password = $("#Password").val();
    let test_Password = regex_Password.test(Password);
    if(User_name.length == 0 || Password.length == 0){
        alert("Quên nhập này bạn ơi! ");
        count ++;
    }
    else if(test_Password == false || test_User_name == false ){
        alert("Vui lòng nhập lại");
    }
    if(count != 0){
        return false;
    }
    return true;
}
// function signUpvalidate() {
    
//     let count = 0;
//     // Họ và tên
//     let regex_name =
//         /^[aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ\s]{8,50}$/;
//     let name = $("#name").val();
//     let test_name = regex_name.test(name);
//     // user_name
//     let regex_user_name =
//         /^[aAàÀảẢãÃáÁạẠăĂằẰẳẲẵẴắẮặẶâÂầẦẩẨẫẪấẤậẬbBcCdDđĐeEèÈẻẺẽẼéÉẹẸêÊềỀểỂễỄếẾệỆfFgGhHiIìÌỉỈĩĨíÍịỊjJkKlLmMnNoOòÒỏỎõÕóÓọỌôÔồỒổỔỗỖốỐộỘơƠờỜởỞỡỠớỚợỢpPqQrRsStTuUùÙủỦũŨúÚụỤưƯừỪửỬữỮứỨựỰvVwWxXyYỳỲỷỶỹỸýÝỵỴzZ\s]{8,50}$/;
//     let user_name = $("#user_name").val();
//     let test_user_name = regex_user_name.test(user_name);
//     // mật khẩu
//     let regex_password = /^[a-zA-Z0-9]{8,20}$/;
//     let password = $("#password").val();
//     let test_password = regex_password.test(password);
//     // số điện thoại
//     let regex_phone_number = /^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/;
//     let phone_number = $("#phone_number").val();
//     let test_phone_number = regex_phone_number.test(phone_number);
//     if (name.length == 0 || user_name.length == 0 || password.length == 0 || phone_number.length == 0) {
//         alert("Quên nhập này bạn ơi ");
//         count++;
//     } else if (test_name == false || test_user_name == false || test_password == false ||
//         test_phone_number == false) {
//         alert("Vui lòng nhập lại");
//     }
//     if (count != 0) {
//         return false;
//     }
//     return true;


// }