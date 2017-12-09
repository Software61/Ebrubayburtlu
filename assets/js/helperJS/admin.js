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