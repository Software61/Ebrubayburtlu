function DeleteSlider(id){
    if(confirm("Slider resmi silinecektir. Onaylıyor musunuz?")){
        $.ajax({
            type:'GET',
            url:"Admin/DeleteSliderImage/"+id,
            data:{},
            success:function(data){
                var className=".forRemove"+id;
                $(className).remove();
                location.reload();
            }
        });
    }
  }
  function DeleteProject(id){
    if(confirm("Proje silinecektir. Onaylıyor musunuz?")){
        $.ajax({
            type:'GET',
            url:"DeleteProject/"+id,
            data:{},
            success:function(data){
                var className=".forRemove"+id;
                $(className).remove();
                location.reload();
            }
        });
    }
  }