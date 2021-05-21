$("#formLogin").submit((function (e) {
	e.preventDefault(), $.ajax({
		url: BASE_URL + "/login/action",
		type: "POST",
		data: new FormData(this),
		processData: !1,
		contentType: !1,
		cache: !1,
		dataType: "JSON",
		beforeSend: function () {
			disableButton()	
		},
		complete: function () {
			enableButton()
		},
		success: function (e) {
			validate(e.validate?.input), e.validate.success && ("ok" == e.status ? msgSweetSuccess(e.message).then(() => {
				redirect('chat')
			}) : msgSweetWarning(e.message).then(() => {
				$("input[name='username']").select()
			}))
		}
	})
}));
