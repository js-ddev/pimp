$(function() {
 
    var $this = $("#myTable");
    var newrows = [];
    $this.find("tr").each(function(){
        var i = 0;
        $(this).find("th").each(function(){
            i++;
            if(newrows[i] === undefined) { newrows[i] = $("<tr></tr>"); }
            newrows[i].append($(this));
        });
        $(this).find("td").each(function(){
            i++;
            if(newrows[i] === undefined) { newrows[i] = $("<tr></tr>"); }
            newrows[i].append($(this));
        });
    });
    $this.find("tr").remove();
    $.each(newrows, function(){
        $this.append(this);
    });
 
    $this.find("thead").html("<tr>"+$this.find("tr").html()+"</tr>");
    $this.find("tbody tr").first().remove();
});
