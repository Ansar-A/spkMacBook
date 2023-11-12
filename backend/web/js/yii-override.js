yii.confirm = function (message, okCallBack, cancelCallBack) {
  swal(
    {
      title: message,
      type: "warning",
      showCancelButton: true,
      closeOnConfirm: true,
      allowOutsideClick: true,
    },
    okCallBack
  );
};
