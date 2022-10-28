$().ready(function () {
  $("#Form").validate({
    onfocusout: false,
    onkeyup: false,
    onclick: false,
    rules: {
      ma_kh: {
        required: true,
        minlength: 6,
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
      mat_khau3: {
        required: true,
        minlength: 6,
      },
      email: {
        required: true,
        validateEmail: true,
        email: true,
      },
    },
    messages: {
      ho_ten: {
        required: "<span style='color: red'>Bắt buộc nhập họ và tên</span> ",
        maxlength: "<span style='color: red'>Nhập tối đa 30 ký tự</span> ",
        minlength: "<span style='color: red'>Nhập trên 6 trở lên ký tự</span> ",
        validateho_ten: "<span style='color: red'>Nhập đúng họ và tên</span> ",
      },
      ma_kh: {
        required:
          "<span style='color: red'>Bắt buộc nhập tên đăng nhập</span> ",
        minlength: "<span style='color: red'>Nhập trên 6 trở lên ký tự</span> ",
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
      mat_khau3: {
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
