$(document).ready(function(){
	$('#btnWrite').click(function(){
		$.post('/curriculum/write',
			{ name : "A" },
			function(result){
				console.log(result);
			}
		);
	});
});