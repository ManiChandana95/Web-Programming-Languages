function loadXMLDoc() {
    $.ajax({
        type: "GET" ,
        url: "movies.xml" ,
        dataType: "xml" ,
        success: function(xml) {
			var table = "<tr><th>Title</th><th>Director</th><th>Genre</th>" +
        "<th>Cast</th><th>IMDB Rating</th><th>Short Description</th></tr>";
            $(xml).find('movie').each(function() {
		var title = $(this).find('title').val();
        var genres = $(this).find('genre');
        var genre = "";
        $(genres).each(function() {
            genre += this.val() + ", ";
        });
        genre = genre.substring(0, genre.length - 2);
        var director = $(this).find('director').val();
        var cast = $(this).find('cast');
        var c = "";
        $(cast).children().each(function() {
            c += $(this)[0].attributes.getNamedItem('name').value + ", ";
        });

        c = c.substring(0, c.length - 2);

        var summary = $(this).find('synopsis').val();
        var imdb_rating = $(this).find('score').val();
        table += "<tr><td>" + title + "</td><td>" + director + "</td>" +
            "<td>" + genre + "</td><td>" + c + "</td>" +
            "<td>" + imdb_rating + "</td><td>" + summary + "</td></tr>";
    });
	    document.getElementById("demo").innerHTML = table;

		}
});
}