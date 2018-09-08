$(document).ready(function(){
	$("#note_id").focusin(function(){
		$("#panel_id").show()
	})

	$("#button_id").click(function(){
		$("#save_id").attr("class", "fa fa-spinner fa-spin")
		setTimeout(function(){
			$("#save_id").attr("class", "fa fa-pencil")
			
		}, 5000)
	})

})

// test kl buat baru js
// $(document).ready(function(){
// console.log("hai")

// })