$("#add__content__row").on('click', function () {
    var margin = $(this).data('margin');
    var input = `<div class="row"><input type="text" hidden value="inputField" name="inputType[]"><div class="col-md-3 mt-${margin}">
    <input type="text" name="contentKey[]" class="p-2 form-control" placeholder="Key">
</div>
<div class="col-md-9 mb-4 mt-${margin}">
    <input type="text" name="contentValue[]" class="form-control p-2" placeholder="Value">
</div></div>`;
    var textarea = `<div class="row"><input type="text" hidden value="textField" name="inputType[]"><div class="col-md-3 mt-${margin}">
    <input type="text" class="p-2 form-control" name="contentKey[]"  placeholder="Key">
</div>
<div class="col-md-9 mb-4 mt-${margin}">
    <textarea  class="form-control" name="contentValue[]"  cols="10" rows="3" placeholder="Value"></textarea>
</div></div>`;
    var section = $(".content__tags");
    var sectionType = $("#content__row__type").val() == 'input' ? input : textarea;
    section.append(sectionType);
});

$("#blog__form").on("submit", function () {
    var hvalue = $('.quill-editor-full').html();
    $(this).append("<textarea name='blog_detail' style='display:none'>" + hvalue + "</textarea>");
});


$("#blog__form").on("submit", function () {
    var hvalue = $('.quill-editor-full').html();
    $(this).append("<textarea name='blog_detail' style='display:none'>" + hvalue + "</textarea>");
});


// $("#settings__form").on("submit", function () {
//     var policy = $('.quill-editor-full-1').html();
//     $(this).append("<input value='richField' name='inputType[]' style='display:none'>");
//     $(this).append("<textarea  name='contentValue[]' style='display:none'>" + policy + "</textarea>");

//     $(this).append("<input value='richField' name='inputType[]' style='display:none'>");
//     var terms = $('.quill-editor-full-2').html();
//     $(this).append("<textarea name='contentValue[]' style='display:none'>" + terms + "</textarea>");

//     $(this).append("<input value='richField' name='inputType[]' style='display:none'>");
//     var about = $('.quill-editor-full-3').html();
//     $(this).append("<textarea name='contentValue[]' style='display:none'>" + about + "</textarea>");
// });
