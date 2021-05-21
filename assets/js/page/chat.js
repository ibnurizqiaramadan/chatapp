$(document).ready(function() {
    socket.emit("join", {username : USERNAME})
})

$("#formStoreMessage").submit(function(e) {
    e.preventDefault()
    // return
    const username = $("input[name='username']").val()
    const message = $("input[name='message']")
    socket.emit("sendMessage", {
        username: username, 
        message: message.val()
    })
    message.val("")
    return
    $.ajax({
        url: $(this).attr("action"),
        type: "POST",
		data: new FormData(this),
		processData: !1,
		contentType: !1,
		cache: !1,
		dataType: "JSON",
    })
})

// $("#btnKirimPesan").click(function() {
//     const username = $("input[name='username']").val()
//     const message = $("input[name='message']")
//     socket.emit("sendMessage", {
//         username: username, 
//         message: message.val()
//     })
//     message.val("")
// })

socket.on("getMessage", param => {
    // alert(param.username + " " + param.message)
    var chatField = $(".chat-field-group")
    if (param.username == USERNAME) {
        chatField.append(`
            <div class="row">
                <div class="col-auto ml-auto pesan">
                    <div class="card shadow">
                        <div class="card-header text-sm p-2 pl-3">
                            ${param.username}
                        </div>
                        <div class="card-body p-3">
                            ${escapeHtml(param.message)}
                            <span class="text-sm waktuPesan text-muted">00:00:00</span>
                        </div>
                    </div>
                </div>
            </div>
        `)   
    } else {
        chatField.append(`
            <div class="row">
                <div class="col-auto mr-auto pesan">
                    <div class="card shadow">
                        <div class="card-header text-sm p-2 pl-3">
                            ${param.username}
                        </div>
                        <div class="card-body p-3">
                            ${escapeHtml(param.message)}
                            <span class="text-sm waktuPesan text-muted">00:00:00</span>
                        </div>
                    </div>
                </div>
            </div>
        `)
    }
    $(document).scrollTop($(document).height())
})