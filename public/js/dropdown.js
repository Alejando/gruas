$("#brand").change(event => {
	$.get(`ajax-subbrand/${event.target.value}`, function(res, bra){
		$("#subbrand").empty();
		res.forEach(element => {
			$("#subbrand").append(`<option value=${element.id}> ${element.name} </option>`);
		});
	});
});