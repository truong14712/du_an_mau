$().ready(function () {
  $("#Form").validate({
    onfocusout: false,
    onkeyup: false,
    onclick: false,
    rules: {
      ten_loai: {
        required: true,
        maxlength: 30,
      },
      ma_kh: {
        required: true,
      },
      ho_ten: {
        required: true,
        maxlength: 30,
        minlength: 6,
        validateho_ten: true,
      },
      mat_khau: {
        required: true,
        minlength: 6,
      },
      mat_khau2: {
        required: true,
        minlength: 6,
      },
      email: {
        required: true,
        validateEmail: true,
        email: true,
      },
      ten_hh: {
        required: true,
        minlength: 6,
      },
      don_gia: {
        required: true,
        minlength: 3,
        digits: true,
      },
      giam_gia: {
        required: true,
        maxlength: 2,
        digits: true,
      },
      ngay_nhap: {
        required: true,
        dateISO: true,
      },
    },
    messages: {
      ten_loai: {
        required: "<span style='color: red'>Bắt buộc nhập tên loại</span> ",
        maxlength: " <span style='color: red'>Nhập tối đa 30 ký tự</span> ",
      },
      ho_ten: {
        required: "<span style='color: red'>Bắt buộc nhập họ và tên</span> ",
        maxlength: "<span style='color: red'>Nhập tối đa 30 ký tự</span> ",
        minlength: "<span style='color: red'>Nhập trên 6 trở lên ký tự</span> ",
        validateho_ten: "<span style='color: red'>Nhập đúng họ và tên</span> ",
      },
      ma_kh: {
        required:
          "<span style='color: red'>Bắt buộc nhập mã khách hàng</span> ",
      },
      mat_khau: {
        required: "<span style='color: red'>Bắt buộc nhập mật khẩu</span> ",
        minlength:
          "<span style='color: red'>Nhập mật khẩu từ 6 ký tự trở lên</span> ",
      },
      mat_khau2: {
        required: "<span style='color: red'>Bắt buộc nhập mật khẩu</span> ",
        minlength:
          "<span style='color: red'>Nhập mật khẩu từ 6 ký tự trở lên</span> ",
      },
      email: {
        required: "<span style='color: red'>Bắt buộc nhập email</span> ",
        validateEmail:
          "<span style='color: red'>Nhập email đúng định dạng</span> ",
        email: "<span style='color: red'>Nhập email đúng định dạng</span> ",
      },
      ten_hh: {
        required: "<span style='color: red'>Bắt buộc nhập tên hàng hóa</span> ",
        minlength: "<span style='color: red'>Nhập trên 6 trở lên ký tự</span> ",
      },
      don_gia: {
        required: "<span style='color: red'>Bắt buộc nhập đơn giá</span> ",
        maxlength: "<span style='color: red'>Nhập trên 3 trở lên ký tự</span> ",
        digits:
          "<span style='color: red'>Nhập số lớn hơn 0 và không có ký tự</span> ",
      },
      giam_gia: {
        required: "<span style='color: red'>Bắt buộc nhập đơn giá</span> ",
        maxlength:
          "<span style='color: red'>Nhập dưới 2 trở xuống ký tự</span> ",
        digits:
          "<span style='color: red'>Nhập số lớn hơn 0 và không có ký tự và nhỏ hơn 100%</span> ",
      },
      ngay_nhap: {
        required: "<span style='color: red'>Bắt buộc nhập ngày nhập</span> ",
        dateISO:
          "<span style='color: red'>Bắt buộc nhập năm trước tháng sau đó ngày và trước ngày hiện tại</span> ",
      },
    },
  });
});
$.validator.addMethod(
  "validateho_ten",
  function (value, element) {
    return (
      this.optional(element) ||
      /^([a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđ]+)((\s{1}[a-vxyỳọáầảấờễàạằệếýộậốũứĩõúữịỗìềểẩớặòùồợãụủíỹắẫựỉỏừỷởóéửỵẳẹèẽổẵẻỡơôưăêâđ]+){1,})$/i.test(
        value
      ) ||
      /^([a-z]+)((\s{1}[a-z]+){1,})$ /i.test(value)
    );
  },
  ""
);
$.validator.addMethod(
  "validateEmail",
  function (value, element) {
    return (
      this.optional(element) ||
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i.test(
        value
      )
    );
  },
  ""
);
