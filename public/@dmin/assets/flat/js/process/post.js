/**
 * Created by tibanh on 14/01/16.
 */

$(document).ready(function(){
    $(document).on("click", "ul#_btn-action > li > a", function(){
        var action = $(this).data("action");
        var confirm = $(this).data("confirm");

        var ids = [];
        $("input[name='bulk_actions[]']:checked").each(function(i){
            var id = $(this).val();
            if(id){
                ids.push(id);
            }
        });

        if(confirm == 1){

            if(ids.length){
                bootbox.confirm("Bạn có chắc muốn xóa những bài viết có id: " + ids.join(", ") + "?", function(result) {
                    if(result){
                        $('input[name="action"]').val(action);
                        $("form[name='post-frm']").submit();
                    }
                });
            }else{
                bootbox.alert("Bạn chưa chọn bài viết nào!", function() {

                });
            }

        }else{
            $('input[name="action"]').val(action);
            $("form[name='post-frm']").submit();
        }

    });

    /**
     * up = DESC
     * down = ASC
     * DEFAULT = DESC
     */
    $(document).on("click", "._sort", function(){
        var name = $(this).data("name");
        var $t = $("._sort[data-name='" + name + "']");
        var sort_by = "";
        if($t.hasClass("fa-sort")){
            sort_by = "DESC";
            $t.removeClass("fa-sort").addClass("fa-sort-up");
        }else if($t.hasClass("fa-sort-up")){
            sort_by = "ASC";
            $t.removeClass("fa-sort-up").addClass("fa-sort-down");
        }else if($t.hasClass("fa-sort-down")){
            sort_by = "DESC";
            $t.removeClass("fa-sort-down").addClass("fa-sort-up");
        }
        $t.next().val(sort_by);
    });
});