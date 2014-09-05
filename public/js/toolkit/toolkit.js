

$(document).ready(function(){

/*


	//$(docum	ent).tooltip();
	$(".fundamentals").click(function(){
		var fundamental_id = $(this).attr("data-name");

		window.location="tools/"+fundamental_id;

		var tools =  new Array();
		var tool_descriptions = new Array();

		
	});*/
	
});

function htmlEncode(value){

  //create a in-memory div, set it's inner text(which jQuery automatically encodes)
  //then grab the encoded contents back out.  The div never exists on the page.
  console.log($('<div/>').text(value).html());
  return $('<div/>').text(value).html();
}

function htmlDecode(value){
  return $('<div/>').html(value).text();
}