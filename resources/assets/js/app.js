$(document).ready(function(){
	$("#calculate").click(function(element){
		element.preventDefault();
		var hullLength = $("#hull-length");
		var buttocAngle = $("#buttoc-angle");
		var displacement = $("#displacement");
		var fields = [hullLength,buttocAngle,displacement];

		$.each(fields, function( index, value ) {
			if(value.val() == '' || !isInt(value.val())){
				value.next(".error").html("Must be a number");
				return false;
			} else {
				value.next(".error").empty();
			}
		});

		$.ajax({
			method: "post",
			url: "/calculate",
			data: {
				"hull_length": hullLength.val(),
				"buttoc_angle": buttocAngle.val(),
				"displacement": displacement.val(),
			}
		}).done(function( msg ) {
			$("#hull-speed").val(msg.hull_speed)
			$("#hp").val(msg.hp)
		});
	});
});

function isInt(n) {
	return n % 1 === 0;
}
