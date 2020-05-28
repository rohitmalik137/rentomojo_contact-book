function search_fun(count){
    var input = document.getElementById("search_box");
    var filter = input.value.toUpperCase();
    for (var i=0; i<count; i++){
        var tmp = '__'+i;
        var temp = document.getElementById(tmp);
        // console.log(tmp+"  "+count+"  "+li.length);
        var txtValue = temp.textContent || temp.innerText;
        // console.log(txtValue+"____");
        if (txtValue.toUpperCase().indexOf(filter) > -1){
            document.getElementById('_'+i).style.display = "";
        }else{
            document.getElementById('_'+i).style.display = "none";
        }
    }
}