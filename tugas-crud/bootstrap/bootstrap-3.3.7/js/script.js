$("#pegawaiForm").submit(function(e) {
	var pegawaiForm = $(this).serialize();

	$.ajax({
		url: 'proses_create.php',
		// type: 'default GET (Other values: POST)',
		// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
		method: "POST",
		data: pegawaiForm,
	})
	.done(function() {
		alert("success");
	})
		e.preventDefault();
});

$(".hapus").click(function() {
	id = $(this).attr('id');
	if (confirm("Did you wanna erase this data?")){
	$.ajax({
		// type: 'default GET (Other values: POST)',
		// data: 'id='+id,
		method: "POST",
		url: 'delete.php?id='+id,
		success: function(){
		}
	});	
	$(this).parent().parent().fadeOut(500);
	} return false;
});

function tampil(){
	var search = $("#search").val();

	$.ajax({
		url: 'index.php',
		type: 'GET',
		// dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
		data: "q="+search,
	})
	.done(function(data) {
		$(#data).html(data)
	})
}

$("#search").keyup(function() {
	var search = $(this).val();
});