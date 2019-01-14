/*Make an AJAX call to get the local JSON that contains my skills.
Create divs for every category, skill and description.
Append them to index.*/
$(document).ready(function() {
	let contentToAppend;
	$.getJSON("includes/knowledge.inc.json", function(json) {
		$.each(json, function(category, skillArray) {
			contentToAppend = "<div class='category' id='" + category.toLowerCase() + "'>";
			contentToAppend += "<div class='togglecategory' id='toggle" + category.toLowerCase() + "'>" + category + "</div>";
			contentToAppend += "<div class='slidedown' id='slidedown" + category.toLowerCase() + "'>";
			$.each(skillArray, function(index, skill) {
				contentToAppend += "<div class='skill-container'>";
				contentToAppend += "<div class='skill-title' id='" + skill["title"].toLowerCase() + "'>" + skill["title"] + "</div>";
				contentToAppend += "<div class='skill-description' id='description-" + skill["title"].toLowerCase() + "'>" + skill["description"] + "</div>"
				contentToAppend += "</div>";
			});
			contentToAppend += "</div></div>";
			$("#my-knowledge-categories").append(contentToAppend);
			$("#" + category.toLowerCase()).click(function() {
				let slideId = "#slidedown" + category.toLowerCase();
				let toggleId = "#toggle" + category.toLowerCase();
				$("#" + category.toLowerCase()).css("border", "none");
				$(slideId).toggle("slow", function() {
					// Remove/Add the border when toggled
					if($(slideId).is(":visible"))
					{
						$("#" + category.toLowerCase()).css("border", "none");
					}
					else
					{
						$("#" + category.toLowerCase()).css("border", "solid 3px #292929");
					}
				});
				$(toggleId).toggle();
			});
		});
	});
});