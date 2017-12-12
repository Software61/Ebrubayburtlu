<div style="margin-top: 80px;">






</head>
<body>

<script src="<?=base_url('assets/js/helperJS/admin.js')?>"></script>
 <div class="updateForm">

  <form method="POST" id="postForm" enctype="multipart/form-data" action="<?=base_url('Admin/InsertProjectType')?>">
  <div>
    <label class="lbl" id="lbl-edit"></label>
    <label class="lbl">Yeni proje tipi</label>
    <input type="text" name="categoryName" id="categoryName" class="formInput">
    <div class="editId"></div>
  <div>

    <input type="submit" id="formBtn" class="btn gray"  value="Kaydet" />
   
  </div>
  </div>
</form>
<div>
<center><button id="formCancel" class="btn-danger form-cancel">Vazgeç</button></center>
</div>
</div>
 <div class="updateForm">

 <center>
  <div style="    max-width: 450px;
    background-color: #cbcbcb;
    border-radius: 5px;
    width:100%;">
      <table style="color: black">
      <?php foreach ($projecttypes as $projectType) {?>
        <div>
      
          <tr>
            <td><button class="btn btn-edit" data-target="<?=$projectType->ProjectTypeId?>" data-eren="Düzenlenecek proje tipi : <?=$projectType->Name?>" style="background-color: #5bc0de!important;border-radius: 5px; width: 80px;">Düzenle</button></td>
            <td><span  style="text-align: center;"><?=$projectType->Name?></span></td>
            <td style="text-align: right;">  <button class="btn btn-delete" data-target="<?=$projectType->ProjectTypeId?>" style="background-color: #d9534f!important;border-radius: 5px;width: 45px;">Sil</button></div></td>
          </tr>
   
        
        
      
      <?php } ?>
      </table>
  <div>
  </div>
  </div>
</center>
</div>
<script type="text/javascript">
	$(".btn-edit").click(function () {
		$("#lbl-edit").text($(this).attr("data-eren"));
		$(".editId").html('<input type="text" style="display:none" name="categoryId" value="'+$(this).attr("data-target")+'">');
		$("#postForm").attr({"action":"UpdateProjectType"});
		$("#formCancel").show();
	});
</script>
<script type="text/javascript">
	$("#formCancel").click(function () {
		$("#lbl-edit").text("");
		$(".editId").html('');
		$("#postForm").attr({"action":"InsertProjectType"});
		$("#formCancel").hide();
	});
</script>

<script type="text/javascript">
  $(".btn-delete").click(function () {
    DeleteProjectType($(this).attr("data-target"));
  });

    function DeleteProjectType(id){ 
    if(confirm("Proje tipi silinecektir. Onaylıyor musunuz?")){
        $.ajax({
            type:'GET',
            url:"DeleteProjectType/"+id,
            data:{},
            success:function(data){
                var className=".forRemove"+id;
                $(className).remove();
                location.reload();
            }
        });
    }
  }
</script>



</div>