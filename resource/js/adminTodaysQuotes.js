var adminTodaysQuotes = {
		
	save : function(){
		if(oValidator.formName.getMessage("todaysquotes_form")){
			$("[name=todaysquotes_form]").submit();
		}
	},
	
	reset : function(){
		$("[name=title]").val("Quote of the Day");
		$('[name=display_opt]').filter("[value=single]").prop("checked", true);
	}
}

$(document).ready(function(){
	var seq = $("[name=seq]").val();
	var sUrl = usbuilder.getUrl("apiGetAdminSettings");
	
	$.ajax({
		dataType: "json",
		type	: "GET",
		url 	: sUrl,
		data 	: "seq=" + seq,
		success : function(info){
			$("[name=title]").val(info.Data.title);
			$('[name=display_opt]').filter("[value=" + info.Data.display + "]").prop("checked", true);
		}
	});
});