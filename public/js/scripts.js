

//button file
$(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});


function previewImg(event) {
    // Gán giá trị các file vào biến files
    var files = document.getElementById('imageUpload').files;
    var filename = document.getElementById('imageUpload').value;
    var a = filename.replace(/^.*[\\\/]/, '');
   // console.log(a);
    // Show khung chứa ảnh xem trước
    $('#upload .box-preview-img').show();
 
    // Thêm chữ "Xem trước" vào khung
    $('#upload .box-preview-img').html('');
 
    // Dùng vòng lặp for để thêm các thẻ img vào khung chứa ảnh xem trước
    for (i = 0; i < files.length; i++)
    {
        // Thêm thẻ img theo i
        $('#upload .box-preview-img').append('<img src="" id="' + i +'">');
 
        // Thêm src vào mỗi thẻ img theo id = i
        $('#upload .box-preview-img img:eq('+i+')').attr('src', URL.createObjectURL(event.target.files[i]));
        

        $('#upload .box-preview-img').append('<input name="img_default" value="'+a+'">');

      }
}



                     
     
  