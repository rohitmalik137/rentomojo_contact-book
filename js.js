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

var btn = document.getElementById('add_contact');
btn.addEventListener('click', function() {
    document.location.href = 'add_contact.php';
});

function show(show_id){
    console.log(show_id);
    var id = show_id.id;
    var arr = id.split("_");
    document.getElementById(id).style.display = 'none';
    document.getElementsByClassName('outer_info')[arr[1]].style.backgroundColor = 'rgb(158, 204, 247)';
    document.getElementsByClassName('contact_details')[arr[1]].style.backgroundColor = 'rgb(193, 221, 247)';
    document.getElementById("up_"+arr[1]).style.display = 'block';
    document.getElementById("extend_"+arr[1]).style.display = 'block';
}

function hide(hide_id){
    var id = hide_id.id;
    var arr = id.split("_");
    document.getElementById(id).style.display = 'none';
    document.getElementsByClassName('outer_info')[arr[1]].style.backgroundColor = 'transparent';
    document.getElementById("down_"+arr[1]).style.display = 'block';
    document.getElementById("extend_"+arr[1]).style.display = 'none';
}